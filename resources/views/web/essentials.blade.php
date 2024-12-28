<x-web-layout>
    <style>
        .pro-box{
            height: 650px;
        }
        .card-img-top{
            height: 75%;
        }
    </style>
<div class="container mt-5">
        <h2 class="text-center">Essential Skincare Products</h2>
        <div class="row mt-4">
            {{-- Product 1 --}}
            <div class="col-md-4 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('serum.webp') }}" class="card-img-top" alt="Serum">
                    <div class="card-body">
                        <h5 class="card-title">Hydrating Face Serum</h5>
                        <p class="card-text">A lightweight, hydrating serum that boosts skin moisture and improves texture.</p>
                        <p class="text-primary font-weight-bold">$20.00</p>
                    </div>
                </div>
            </div>

            {{-- Product 2 --}}
            <div class="col-md-4 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('sunscreen.webp') }}" class="card-img-top" alt="Sunscreen">
                    <div class="card-body">
                        <h5 class="card-title">SPF 50+ Sunscreen</h5>
                        <p class="card-text">Protect your skin from harmful UV rays with this non-greasy sunscreen.</p>
                        <p class="text-primary font-weight-bold">$15.00</p>
                    </div>
                </div>
            </div>

            {{-- Product 3 --}}
            <div class="col-md-4 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('toner.jpeg') }}" class="card-img-top" alt="Toner">
                    <div class="card-body">
                        <h5 class="card-title">Refreshing Face Toner</h5>
                        <p class="card-text">A gentle toner that helps balance skin pH and provides a refreshing feel.</p>
                        <p class="text-primary font-weight-bold">$12.00</p>
                    </div>
                </div>
            </div>

            {{-- Product 4 --}}
            <div class="col-md-4 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('vitamin.webp') }}" class="card-img-top" alt="Vitamin C Cream">
                    <div class="card-body">
                        <h5 class="card-title">Vitamin C Brightening Cream</h5>
                        <p class="card-text">Enhances skin radiance with Vitamin C for a glowing complexion.</p>
                        <p class="text-primary font-weight-bold">$25.00</p>
                    </div>
                </div>
            </div>

            {{-- Product 5 --}}
            <div class="col-md-4 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('quenchh.jpeg') }}" class="card-img-top" alt="Moisturizer">
                    <div class="card-body">
                        <h5 class="card-title">Daily Moisturizer</h5>
                        <p class="card-text">Hydrates and nourishes your skin for all-day comfort and softness.</p>
                        <p class="text-primary font-weight-bold">$18.00</p>
                    </div>
                </div>
            </div>

            {{-- Product 6 --}}
            <div class="col-md-4 mb-4">
                <div class="card pro-box">
                    <img src="{{ asset('toner.jpeg') }}" class="card-img-top" alt="Face Wash">
                    <div class="card-body">
                        <h5 class="card-title">Gentle Face Wash</h5>
                        <p class="card-text">Removes impurities and leaves your skin feeling fresh and clean.</p>
                        <p class="text-primary font-weight-bold">$10.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </x-web-layout>