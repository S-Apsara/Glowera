{{-- resources/views/products/bundles.blade.php --}}

<x-web-layout title="Bundles - Glowera">
<style>
        .pro-div{
            height: 700px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-img-top{
            height: 75%;
        }
    </style>

    <div class="container mt-5">
        <h2 class="text-center mb-5 h1">Exclusive Bundles</h2>
        
        <div class="row">
            {{-- Bundle 1 --}}
            <div class="col col-4 mb-4">
                <div class="card pro-div category-card text-center">
                    <img src="{{ asset('hydration.jpeg') }}" class="card-img-top" alt="Bundle 1 Image">
                    <div class="card-body">
                        <h5 class="card-title">Hydration Bundle</h5>
                        <p class="card-text">A perfect combo for ultimate skin hydration, featuring a serum and moisturizer.</p>
                        <p class="price font-weight-bold">$29.99</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            {{-- Bundle 2 --}}
            <div class="col col-4 mb-4">
                <div class="card pro-div category-card text-center">
                    <img src="{{ asset('suncare.jpeg') }}" class="card-img-top" alt="Bundle 2 Image">
                    <div class="card-body">
                        <h5 class="card-title">Sun Protection Bundle</h5>
                        <p class="card-text">Protect your skin with our sunscreen and after-sun lotion duo.</p>
                        <p class="price font-weight-bold">$34.99</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            {{-- Bundle 3 --}}
            <div class="col col-4 mb-4">
                <div class="card pro-div category-card text-center">
                    <img src="{{ asset('glow.jpeg') }}" class="card-img-top" alt="Bundle 3 Image">
                    <div class="card-body">
                        <h5 class="card-title">Glow Bundle</h5>
                        <p class="card-text">Brighten your skin with our vitamin C serum and glow-enhancing toner.</p>
                        <p class="price font-weight-bold">$39.99</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            {{-- Bundle 4 --}}
            <div class="col col-4 mb-4">
                <div class="card pro-div category-card text-center">
                    <img src="{{ asset('antiage.webp') }}" class="card-img-top" alt="Bundle 4 Image">
                    <div class="card-body">
                        <h5 class="card-title">Anti-Aging Bundle</h5>
                        <p class="card-text">Reduce fine lines and wrinkles with our powerful anti-aging duo.</p>
                        <p class="price font-weight-bold">$49.99</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            {{-- Bundle 5 --}}
            <div class="col col-md-4 mb-4">
                <div class="card pro-div category-card text-center">
                    <img src="{{ asset('Vitaminboost.webp') }}" class="card-img-top" alt="Bundle 5 Image">
                    <div class="card-body">
                        <h5 class="card-title">Vitamin Boost Bundle</h5>
                        <p class="card-text">A collection of vitamin-enriched products for healthy, radiant skin.</p>
                        <p class="price font-weight-bold">$44.99</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            {{-- Bundle 6 --}}
            <div class="col col-md-4 mb-4">
                <div class="card pro-div category-card text-center">
                    <img src="{{ asset('essentialsb.jpeg') }}" class="card-img-top" alt="Bundle 6 Image">
                    <div class="card-body">
                        <h5 class="card-title">Essential Care Bundle</h5>
                        <p class="card-text">Daily essentials to cleanse, tone, and moisturize your skin.</p>
                        <p class="price font-weight-bold">$59.99</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            </div>
    </div>

</x-web-layout>
