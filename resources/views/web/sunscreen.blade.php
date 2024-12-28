<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunscreen Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fef7e2; /* Light peach background */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: #ff6347; /* Warm red-orange color */
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
            padding: 20px;
            text-align: center;
            width: 100%;
            max-width: 250px;
        }

        /* Hover Animation */
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .product-card img:hover {
            transform: scale(1.1);
        }

        .product-name {
            font-size: 1.2rem;
            margin-top: 15px;
            color: #333;
        }

        .product-price {
            font-size: 1.1rem;
            color: #ff6347;
            margin: 10px 0;
        }

        .product-card a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff6347;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .product-card a:hover {
            background-color: #ff4500;
        }

        /* Fade-in Animation */
        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<x-web-layout>
    <div class="container">
        <h1 class="fade-in">Our Sunscreen Products</h1>

        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card fade-in" style="animation-delay: 0.3s;">
                <img src="https://via.placeholder.com/250x250?text=Sunscreen+1" alt="Sunscreen 1">
                <div class="product-name">Sunscreen SPF 30</div>
                <div class="product-price">$20.99</div>
                <a href="#">Buy Now</a>
            </div>

            <!-- Product 2 -->
            <div class="product-card fade-in" style="animation-delay: 0.6s;">
                <img src="https://via.placeholder.com/250x250?text=Sunscreen+2" alt="Sunscreen 2">
                <div class="product-name">Sunscreen SPF 50</div>
                <div class="product-price">$25.99</div>
                <a href="#">Buy Now</a>
            </div>

            <!-- Product 3 -->
            <div class="product-card fade-in" style="animation-delay: 0.9s;">
                <img src="https://via.placeholder.com/250x250?text=Sunscreen+3" alt="Sunscreen 3">
                <div class="product-name">Sunscreen SPF 40</div>
                <div class="product-price">$22.50</div>
                <a href="#">Buy Now</a>
            </div>
        </div>
    </div>
    </x-web-layout>
   
    
</body>
</html>
