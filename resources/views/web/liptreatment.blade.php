<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lip Treatment</title>
    <style>
        body {
            background-color: #ffe6eb;
        }

        h1 {
            color: #d81b60;
        }

        .product-card img {
            box-shadow: 0px 5px 15px rgba(216, 27, 96, 0.2);
        }
    </style>
</head>
<body>
<x-web-layout>
    <h1>Lip Treatment</h1>
    <div class="container">
        <div class="product-card">
            <img src="{{ asset('lipbalm.jpeg') }}" alt="Lip Balm">
            <div class="product-name">Nourishing Lip Balm</div>
            <div class="product-price">$12.99</div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>
    </div>
</x-web-layout>
</body>
</html>
