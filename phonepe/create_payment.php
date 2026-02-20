<?php
require_once 'authorization.php';

//$environment = 'prod';  // Environment: 'uat' or 'prod'

$payment_urls = [
    "prod" => "https://api.phonepe.com/apis/pg/checkout/v2/pay",
    "uat"  => "https://api-preprod.phonepe.com/apis/pg-sandbox/checkout/v2/pay"
];

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

$BACKEND_URL = $protocol . $host . $path ;

$merchantOrderId = "ORDID_" . uniqid();
$token = getValidToken();

if (!$token) {
    http_response_code(500);
    echo json_encode(['error' => 'OAuth token not available. Please try again later.']);
    exit;
}
$amountRupees = isset($_GET['payment']) ? (float)$_GET['payment'] : 0;

//convert to rupees
$amount =  (int) round($amountRupees * 100);
$requestData = [
    "merchantOrderId" => $merchantOrderId,
    "amount" => $amount,
    "expireAfter" => 1200,
    "metaInfo" => [
        "udf1" => "additional-information-1",
        "udf2" => "additional-information-2",
        "udf3" => "additional-information-3",
        "udf4" => "additional-information-4",
        "udf5" => "additional-information-5"
    ],
    "paymentFlow" => [
        "type" => "PG_CHECKOUT",
        "message" => "Payment message used for collect requests",
        "merchantUrls" => [
            "redirectUrl" => "$BACKEND_URL/redirect.php?merchantOrderId=$merchantOrderId",
        ]
    ]
];

$payment_url = $payment_urls[$environment];

$ch = curl_init($payment_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: O-Bearer $token"
]);
curl_setopt($ch, CURLOPT_POST, true);

$response = curl_exec($ch);
$data = json_decode($response, true);


if (!empty($data['code']) && $data['code'] === 'BLOCKED_MERCHANT') {
    // Log this clearly for ops / support
    error_log("PhonePe BLOCKED_MERCHANT for merchantOrderId=$merchantOrderId. Response: " . $response);

    http_response_code(500);
    echo json_encode([
        "success" => false,
        "message" => "Merchant is not enabled for this PhonePe API. Please contact support.",
        "phonepe_code" => $data['code']
    ]);
    exit;
}


$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$result = json_decode($response, true);
 //echo json_encode($result, JSON_PRETTY_PRINT); exit;     // Uncomment this line to view the response
if ($httpCode === 200 && isset($result['redirectUrl'])) {
    $redirectUrl = $result['redirectUrl'];
    header("Location: $redirectUrl");
    exit;
}
exit;
?>
