<?php
header("Location: ../index.php");
exit;

require_once 'authorization.php'; // must contain getValidToken()

$environment = 'uat';

$orderStatus_urls = [
    "prod" => "https://api.phonepe.com/apis/pg/subscriptions/v2/order/{merchantOrderId}/status?details=true",
    "uat"  => "https://api-preprod.phonepe.com/apis/pg-sandbox/subscriptions/v2/order/{merchantOrderId}/status?details=true"
];

if (!isset($_GET['merchantOrderId'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing merchantOrderId']);
    exit;
}

$merchantOrderId = $_GET['merchantOrderId'];

// Subscriptions V2 uses O-Bearer token
$token = getValidToken();

if (!$token) {
    http_response_code(500);
    echo json_encode(['error' => 'OAuth token not available']);
    exit;
}

$url = str_replace('{merchantOrderId}', $merchantOrderId, $orderStatus_urls[$environment]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Accept: application/json",
    "Authorization: O-Bearer $token"
]);

$response = curl_exec($ch);
print_r($response); exit;
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    http_response_code(500);
    echo "Error fetching status";
    exit;
}
$data = json_decode($response, true);

// Subscriptions V2 → state comes at TOP-LEVEL
$state = $data["state"] ?? null;
$amount = $data["amount"] ?? 0;

if ($state === "COMPLETED") {
    header("Location: $FRONTEND_URL/success?merchantOrderId=$merchantOrderId&amount=" . ($amount/100));
    exit;
}

if ($state === "FAILED") {
    header("Location: $FRONTEND_URL/failure?merchantOrderId=$merchantOrderId");
    exit;
}

header("Location: $FRONTEND_URL/pending?merchantOrderId=$merchantOrderId");
exit;

?>
