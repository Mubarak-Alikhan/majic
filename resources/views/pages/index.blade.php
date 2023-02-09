@extends('layouts.main')

@section('main')
    <div class="positon-relative">

        <section class="bannerSlider">
            <div class="item">
                <div class="container bg">
                    <div class="row row-cols-md-2 row-cols-1 justify-content-center align-items-center p-md-5 p-2">
                        <div class="col">
                            <h1 class="display-1 text-dark fw-bold font-1 text-uppercase">Lost tribe</h1>
                            <p class="font-1 fw-normal">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </p>
                            <a class="btn-1 d-inline-block my-2" href="javascript:void(0)">Learn more</a>
                        </div>
                        <div class="col position-relative">
                            <img src="{{asset('images/banner-img.png') }}" class="img-fluid" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container bg">
                    <div class="row row-cols-md-2 row-cols-1 justify-content-center align-items-center p-md-5 p-2">
                        <div class="col">
                            <h1 class="display-1 text-dark fw-bold font-1 text-uppercase">Lost tribe</h1>
                            <p class="font-1 fw-normal">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </p>
                            <a class="btn-1 d-inline-block my-2" href="javascript:void(0)">Learn more</a>
                        </div>
                        <div class="col position-relative">
                            <img src="{{asset('images/banner-img.png')}}" class="img-fluid" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <ul class="position-absolute s-icons">
            <li class="py-3">
                <a href="https://www.facebook.com/" target="_blank" class=""><img src="{{asset('images/fb.svg')}}" class="img-fluid" alt=""></a>
            </li>
            <li class="py-3">
                <a href="https://instagram.com/" target="_blank" class=""><img src="{{asset('images/insta.svg')}}" class="img-fluid" alt=""></a>
                <li class="py-3">
                    <a href="https://www.pinterest.com/" target="_blank" class=""><img src="{{asset('images/pinterest.svg')}}" class="img-fluid" alt=""></a>
                </li>
            </li>
        </ul>
    </div>
    <section class="py-md-5 py-3 additions position-relative">
        <div class="container">
            <div class="row row-cols-md-2 ">
                <div class="col-12">
                    <h2 class="font-1 display-5 pb-md-5 pb-3">Recent Additions</h2>
                </div>
                <div class="col">
                    <a href="product-detail–bracelets.html">
                        <img src="{{ asset('images/products/1.png') }}" class="w-100" alt="">
                        <div class="font-1 py-3 text-center fs-5 fw-600">
                            <p class="">
                                Set Name
                            </p>
                            <p class="text-dark">
                                jewelry piece type - version
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="product-detail–earring.html">
                        <img src="{{ asset('images/products/2.png') }}" class="w-100" alt="">
                        <div class="font-1 py-3 text-center fs-5 fw-600">
                            <p class="">
                                Set Name
                            </p>
                            <p class="text-dark">
                                jewelry piece type - version
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection