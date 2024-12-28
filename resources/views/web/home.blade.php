<x-web-layout>
    <style>
        .dis-card {
            background-image: url("{{ asset('Sale.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            background-color: white;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        .card {
            height: 300px;
            color: white;
            display: flex;
            justify-content: center;
        }
        .card-title, .card-text {
            backdrop-filter: blur(10px);
        }
        .bundle_card {
            background-image: url("{{ asset('bundles.webp') }}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            background-color: white;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        .essential_card {
            background-image: url("{{ asset('essential.jpeg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            background-color: white;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
    </style>

    <!-- Hero Section -->
    <div class="jumbotron container mt-4 text-center">
        <h1>Glowéra!</h1>
        <h1 class="display-4 glow-text">Your skin's true best friend!</h1>
        <p class="lead">Discover our organic skincare collection, crafted to bring out your skin’s natural beauty. Start your glow journey today!</p>
        <a class="btn btn-outline-danger btn-lg" href="./shop" role="button">Shop Now</a>
        <div class="scroll-down mt-4" onclick="document.getElementById('carouselExample').scrollIntoView({behavior: 'smooth'});">
            <i class="bi bi-arrow-down-circle-fill"></i>
        </div>
    </div>

    <!-- Product Carousel -->
    <div id="carouselExample" class="carousel slide container mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('bundle.webp') }}" class="d-block w-100" alt="Skincare Bundle">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('vitamin.webp') }}" class="d-block w-100" alt="Organic Makeup">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('lipcare.jpg') }}" class="d-block w-100" alt="Natural Products">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Product Categories -->
    <div id="products" class="container mt-5">
        <h2 class="text-center mb-4">Explore Our Deals</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card category-card text-center">
                    <div class="card-body bundle_card">
                        <h5 class="card-title">Bundles & Special Offers</h5>
                        <p class="card-text">Explore our exclusive bundles and discounts.</p>
                        <a href="./bundles" class="btn btn-primary">Browse</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card category-card text-center">
                    <div class="card-body essential_card">
                        <h5 class="card-title">Skincare Essentials</h5>
                        <p class="card-text">Everything you need for a daily skincare routine.</p>
                        <a href="./essentials" class="btn btn-primary">Browse Essentials</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card category-card text-center">
                    <div class="card-body dis-card">
                        <h5 class="card-title">Discounts</h5>
                        <p class="card-text">Limited-time offers on selected products.</p>
                        <a href="./discounts" class="btn btn-primary">View Offers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-web-layout>
