<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Property Checkout</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fffaf4;
      color: #333;
    }

    .checkout-section {
      max-width: 500px;
      margin: 80px auto;
      background-color: #ffffff;
      padding: 40px;
      box-shadow: 0 0 15px rgba(255, 165, 0, 0.2);
      border-radius: 12px;
    }

    .checkout-section h2 {
      text-align: center;
      color: #ff6600;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #444;
    }

    select {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      margin-bottom: 25px;
      transition: border-color 0.3s ease;
    }

    select:focus {
      border-color: #ff6600;
      outline: none;
    }

    .pay-now-btn {
      width: 100%;
      padding: 14px;
      background-color: #ff6600;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .pay-now-btn:hover {
      background-color: #e65c00;
      transform: scale(1.02);
    }

    @media (max-width: 600px) {
      .checkout-section {
        margin: 30px 20px;
        padding: 30px 20px;
      }

      .pay-now-btn {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <section class="checkout-section">
    <h2>Checkout</h2>

    <form action="payment-success.php" method="post">

      <label for="propertyType">Select Property Type:</label>
      <select id="propertyType" name="propertyType" required>
        <option value="" disabled selected>-- Select --</option>
        <option value="residential_rent">Residential - Rent</option>
        <option value="residential_sale">Residential - Sale</option>
        <option value="commercial_rent">Commercial - Rent</option>
        <option value="commercial_sale">Commercial - Sale</option>
        <option value="land_rent">Land/Plot - Rent</option>
        <option value="land_sale">Land/Plot - Sale</option>
        <option value="suite_sale">Suite - Sale</option>
      </select>

      <button type="submit" class="pay-now-btn">Pay Now</button>
    </form>
  </section>

</body>
</html>
