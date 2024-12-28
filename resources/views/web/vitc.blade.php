<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitamin C Range</title>
    <style>
        body {
            background-color: #fff4e1;
        }

        h1 {
            color: #ff9800;
        }

        .product-card {
            border-left: 5px solid #ff9800;
        }
    </style>
</head>
<body>
<x-web-layout>
    <h1>Vitamin C Range</h1>
    <div class="container">
        <div class="product-card">
            <img src="{{ asset('Vitaminboost.webp') }}"alt="Vitamin C">
            <div class="product-name">Vitamin C Brightening Serum</div>
            <div class="product-price">$40.99</div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>
    </div>
</x-web-layout>
</body>
</html>
