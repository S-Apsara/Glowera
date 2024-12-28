<x-web-layout title="Details - Glowera">
    <style>
        .det-page {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background-color: rgba(255, 221, 225, 0.6);
            padding: 20px;
        }

        .product-image {
            flex: 1;
            max-width: 300px; /* Adjust the image size */
            margin-right: 20px; /* Space between image and text */
        }

        .product-details {
            flex: 2;
        }

        .product-image img {
            width: 100%;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
        }
    </style>

    <div class="det-page">
        
        <div class="product-image">
            <img src="moisturiser.webp" alt="Daily Moisturizer">
        </div>

       
        <div class="product-details col-md-6">
            <h3><strong>Why Use a Daily Moisturizer?</strong></h3>
            <p><embedded>Our Daily Moisturizer helps to keep your skin hydrated, smooth, and protected from environmental stressors. It's formulated to suit all skin types, providing essential moisture without a greasy finish.</embedded></p>
            
        
            <h4><b>Benefits:</b></h4>
            <ul>
                <li>Long-lasting hydration for soft, supple skin</li>
                <li>Improves skin texture and appearance</li>
                <li>Helps reduce fine lines and signs of aging</li>
                <li>Lightweight and suitable for daily use</li>
            </ul>

           
            <h4><b>How to Use?</b></h4>
            <ol>
                <li><strong>Cleanse:</strong> Begin with a gentle cleanser to remove any dirt or makeup.</li>
                <li><strong>Apply Toner:</strong> If you use a toner, apply it after cleansing to balance the skin’s pH.</li>
                <li><b>Dispense Product:</b> Take a small amount of moisturizer (about the size of a dime) onto your fingertips.</li>
                <li><b>Apply to Face:</b> Gently massage the moisturizer into your skin using upward, circular motions.</li>
                <li><b>Let Absorb:</b> Allow the moisturizer to fully absorb before applying sunscreen or makeup.</li>
            </ol>

            <!-- Pricing Information -->
            <p class="text-danger font-weight-bold mt-3">Price: $18.00</p>
            <a href="./order" class="btn btn-outline-danger product_buy_btn">Buy Now</a>
        </div>
    </div>
</x-web-layout>
