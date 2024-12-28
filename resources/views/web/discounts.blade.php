<x-web-layout title="Discounts - Glowera">
    <style>
        .pro-box{
            height: 580px;
        }
        .card-img-top{
            height: 75%;
        }
    </style>
    <div class="container mt-5">
        <h2 class="text-center">50% Off Weekend Sale</h2>
        <p class="text-center text-muted">Enjoy exclusive discounts on our skincare essentials this weekend!</p>
        <div class="container-fluid">
        <div class="row mt-4 me-0">
            {{-- Discounted Product 1 --}}
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('h_serum.jpeg') }}" class="card-img-top" alt="Serum">
                    <div class="card-body">
                        <h5 class="card-title">Hydrating Face Serum</h5>
                        <p class="card-text">Boosts moisture and improves skin texture.</p>
                        <p class="text-muted"><s>$20.00</s></p>
                        <p class="text-danger font-weight-bold">$10.00 (50% off)</p>
                    </div>
                </div>
            </div>

            {{-- Discounted Product 2 --}}
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('sunscreen.webp') }}" class="card-img-top" alt="Sunscreen">
                    <div class="card-body">
                        <h5 class="card-title">SPF 50+ Sunscreen</h5>
                        <p class="card-text">Protects your skin from harmful UV rays.</p>
                        <p class="text-muted"><s>$15.00</s></p>
                        <p class="text-danger font-weight-bold">$7.50 (50% off)</p>
                    </div>
                </div>
            </div>
            
            {{-- Discounted Product 3 --}}
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('n_toner.jpeg') }}" class="pro-img card-img-top" alt="Toner">
                    <div class="card-body">
                        <h5 class="card-title">Refreshing Face Toner</h5>
                        <p class="card-text">Balances skin pH and refreshes.</p>
                        <p class="text-muted"><s>$12.00</s></p>
                        <p class="text-danger font-weight-bold">$6.00 (50% off)</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="row mt-4">
            {{-- Discounted Product 4 --}}
            <div class="col-4 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('vit_c.jpeg') }}" class="card-img-top" alt="Vitamin C Cream">
                    <div class="card-body">
                        <h5 class="card-title">Vitamin C Brightening Cream</h5>
                        <p class="card-text">Gives your skin a radiant glow.</p>
                        <p class="text-muted"><s>$25.00</s></p>
                        <p class="text-danger font-weight-bold">$12.50 (50% off)</p>
                    </div>
                </div>
            </div>

            {{-- Discounted Product 5 --}}
            <div class="col-4 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('moisture.jpeg') }}" class="card-img-top" alt="Moisturizer">
                    <div class="card-body">
                        <h5 class="card-title">Daily Moisturizer</h5>
                        <p class="card-text">Keeps your skin soft and hydrated.</p>
                        <p class="text-muted"><s>$18.00</s></p>
                        <p class="text-danger font-weight-bold">$9.00 (50% off)</p>
                    </div>
                </div>
            </div>

            {{-- Discounted Product 6 --}}
            <div class="col-4 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('facewash.jpeg') }}" height="100px" class="card-img-top" alt="Face Wash">
                    <div class="card-body">
                        <h5 class="card-title">Gentle Face Wash</h5>
                        <p class="card-text">Cleanses and refreshes your skin.</p>
                        <p class="text-muted"><s>$10.00</s></p>
                        <p class="text-danger font-weight-bold">$5.00 (50% off)</p>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
    </x-web-layout>
