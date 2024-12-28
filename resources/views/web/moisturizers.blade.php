<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moisturizers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e7f9f5;
        }

        h1 {
            text-align: center;
            margin: 40px 0;
            color: #2c786c;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            text-align: center;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            border-radius: 10px;
        }

        .product-name {
            font-size: 1.2rem;
            color: #2c786c;
            margin: 10px 0;
        }

        .product-price {
            color: #ff5722;
        }

        .buy-btn {
            background: #2c786c;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .buy-btn:hover {
            background: #1e5448;
        }
    </style>
</head>
<body>
<x-web-layout>
    <h1>Moisturizers</h1>
    <div class="container">
        <div class="product-card">
            <img src="{{ asset('moisture.jpeg') }}" alt="Moisturizer">
            <div class="product-name">Hydrating Moisturizer</div>
            <div class="product-price">$30.99</div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>
    </div>
</x-web-layout>
</body>
</html>
