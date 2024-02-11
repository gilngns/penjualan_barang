@extends('layouts.app')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/header/1.jpg') }}" class="d-block w-100 img-fluid" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <p class="fs-1 font-carousel">
                        "Latest Clothing Trends for a More Stylish Appearance!"
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/header/2.jpg') }}" class="d-block w-100 img-fluid" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <p class="fs-1 font-carousel">
                        "Update Your Wardrobe with Modern Style and the Latest Trends!"
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/header/3.jpg') }}" class="d-block w-100 img-fluid" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <p class="fs-1">
                        "Find Your Style: The Latest Collection For Unforgettable Style!"
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </section>
    <!-- produk -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center font mb-5">Most purchased products</h2>
            <div class="row">
                <div class="col-md-4 mb-3 btn hvr-grow">
                    <div class="card">
                        <img src="{{ asset('image/upload/1707481032969.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">T-Shirt</h5>
                            <p class="card-text">Rp.150.000</p>
                            <a href="#" class="btn btn-danger">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 btn hvr-grow">
                    <div class="card">
                        <img src="{{ asset('image/upload/1707481386567.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Hoodie</h5>
                            <p class="card-text">Rp.200.000</p>
                            <a href="#" class="btn btn-danger">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 btn hvr-grow">
                    <div class="card">
                        <img src="{{ asset('image/upload/1707481358859.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Crewneck</h5>
                            <p class="card-text">Rp.175.000</p>
                            <a href="#" class="btn btn-danger">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>
    <!-- melayani -->
    <div id="melayani">
        <div class="container-fluid py-4 bg-dark">
            <div class="container">
                <h2 class="text-white text-center font1">We Serve</h2>
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6 mb-3">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex align-items-center justify-content-center mt-5">
                                    <i class="bi bi-truck text-white fs-1"></i>
                                </div>
                            </div>
                            <div class="mt-3 text-white text-center">
                                <h5>Cash On Delivery</h5>
                                <p>"Easy, Safe, and Hassle-Free!"</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-3">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex align-items-center justify-content-center mt-5">
                                    <i class="bi bi-box text-white fs-1"></i>
                                </div>
                            </div>
                            <div class="mt-3 text-white text-center">
                                <h5>Take Away</h5>
                                <p>"Order Now, Pick Up Anytime!"</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-3">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex align-items-center justify-content-center mt-5">
                                    <i class="bi bi-shop text-white fs-1"></i>
                                </div>
                            </div>
                            <div class="mt-3 text-white text-center">
                                <h5>Buy at the store</h5>
                                <p>"Buy Directly in Store: Experience the Best Quality and Service!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lokasi -->
    <section id="lokasi">
        <div class="container-fluid py-5">
            <div class="container text-center mb-5">
                <h2 class="font">Location</h2>
            </div>
            <div class="container d-flex justify-content-center align-items-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663021.9566700738!2d138.45053070520132!3d35.50205870175782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x605d1b87f02e57e7%3A0x2e01618b22571b89!2sTokyo%2C%20Japan!5e0!3m2!1sen!2sid!4v1707393277923!5m2!1sen!2sid"
                    width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    @endsection
