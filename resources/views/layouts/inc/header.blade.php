<header class="bg-white">
    <div class="container">
        <div class="row d-lg-none">
            <div class="col-9">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('images/logo.svg') }}" alt="" class="img-fluid" />
                </a>
            </div>
            <div class="col-3 text-end align-self-center">
                <button data-trigger="navbar_main" class="d-lg-none btn" type="button">
                    <img src="{{ asset('images/bars-staggered.svg') }}" class="w-100" alt="" />
                </button>
            </div>
        </div>
    </div>
    <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg header">
        <div class="container align-items-end">
            <div class="offcanvas-header">
                <button class="btn-close float-end color-dark"></button>
            </div>
            <a class="navbar-brand d-none d-lg-inline" href="{{ route('web.home') }}"><img src="{{ asset('images/logo.svg') }}" alt="" class="img-fluid" /></a>
            <div>
                <div class="text-md-end text-center pe-md-5 w-100 d-flex justify-content-evenly justify-content-md-end">
                    <a href="#" class="px-md-4"><img src="{{ asset('images/search.svg') }}" class="img-fluid" alt="" />
                    </a>
                    <a href="{{ route('wishlist')}}" class="px-md-4 position-relative"><img src="{{ asset('images/heart.svg') }}" class="img-fluid" alt="" /></a>
                    <a href="{{ route('cart.list') }}" class="px-md-4 position-relative"><img src="{{ asset('images/cart.svg') }}" class="img-fluid" alt="" /><span class="position-absolute count">@if(session()->exists('cart'))
                            {{ count(session()->get('cart')) }}
                            @endif</span></a>

                    <div class="dropdown">
                        <a href="#" class="ps-md-4 dropdown" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('images/user.svg') }}" class="img-fluid" alt="" /></a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 boxShadow" aria-labelledby="dropdownMenuButton1">
                            @guest()
                            <li class="py-2">
                                <a href="{{ url('/?login=true') }}" class="fw-normal dropdown-item">Login</a>
                            </li>
                            <li class="py-2">
                                <a class="fw-normal dropdown-item" href="{{ url('/?register=true') }}">Register</a>
                            </li>
                            @endguest() @auth()
                            <li class="py-2">
                                <a class="fw-normal dropdown-item" href="my_orders.html">My Orders</a>
                            </li>
                            <li class="py-2">
                                <a class="fw-normal dropdown-item" href="purchase_history.html">My Purchase History</a>
                            </li>
                            <li class="py-2">
                                <a class="fw-normal dropdown-item" href="profile.html">My Customer Information</a>
                            </li>
                            <li class="py-2">
                                <a class="fw-normal dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __("Logout") }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @endauth()
                        </ul>
                    </div>
                </div>
                <ul class="navbar-nav me-lg-auto pt-2 align-items-center">
                    <li class="nav-item position-relative px-xl-5 px-lg-3">
                        <a class="nav-link text-dark" href="{{ route('web.home') }}">Home</a>
                    </li>
                    <li class="nav-item position-relative px-xl-5 px-lg-3 dropdown">
                        <a class="nav-link text-dark dropdown-toggle" id="collection" data-bs-toggle="dropdown" aria-expanded="false" href="javascript:void(0)">Collections</a>
                        <div class="dropdown-menu p-md-5 border-0 megamenu" aria-labelledby="collection">
                            <div class="container">
                                <div class="row row-cols-md-3 row-cols-1">
                                    <div class="col">
                                        <ul class="ps-0 p-md-3 p-1">
                                            <p class="mb-2 border-bottom">
                                                CA Fire
                                            </p>
                                            <li class="py-2">
                                                <a class="link-item" href="#">CA fire</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Embers and ashes</a>
                                            </li>
                                        </ul>
                                        <ul class="ps-0 p-md-3 p-1">
                                            <p class="mb-2 border-bottom">
                                                Lost Tribe
                                            </p>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Set A</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Set B</a>
                                            </li>
                                        </ul>
                                        <ul class="ps-0 p-md-3 p-1">
                                            <p class="mb-2 border-bottom">
                                                Cosplay bracelets
                                            </p>
                                            <li class="py-2">
                                                <a class="link-item text-secondary" href="#">(Collections without
                                                    sets)</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="ps-0 p-md-3 p-1">
                                            <p class="mb-2 border-bottom">
                                                Santa Fe Mood
                                            </p>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Set A</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Set B</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Set C</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Set D</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="ps-0 p-md-3 p-1">
                                            <p class="mb-2 border-bottom">
                                                Winter Court
                                            </p>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Winter baronness</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Winter viscountess</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Winter countess</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Winter duchess
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Winter princess</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Winter queen</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item position-relative px-xl-5 px-lg-3 dropdown" style="width: 200px">
                        <a class="nav-link text-dark dropdown-toggle" id="styles" data-bs-toggle="dropdown" aria-expanded="false" href="javascript:void(0)">Sets</a>
                        <div class="dropdown-menu border-0" aria-labelledby="style">
                            <div class="container">
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <ul class="p-2">
                                            <li class="py-2">
                                                <a class="link-item" href="#">All the B’s</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Boho à l’orange</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Caribbean Swim
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">Diane</a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">
                                                    Indian River Sunset
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">
                                                    Red blossom
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a class="link-item" href="#">
                                                    They say it’s Spring
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item position-relative px-xl-5 px-lg-3 dropdown">
                        <a class="nav-link text-dark dropdown-toggle" id="styles" data-bs-toggle="dropdown" aria-expanded="false" href="javascript:void(0)">Styles</a>

                        <div class="dropdown-menu border-0" aria-labelledby="style">
                            <div class="container">
                                <div class="row row-cols-1">

                                    <div class="col">
                                        <ul class="p-2">


                                            <li class="py-2">
                                                <a class="link-item" href="#">
                                                    Tribal
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item position-relative px-xl-5 px-lg-3">
                        <a class="nav-link text-blue p-0" href="#">The majic difference</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- model start login -->
@include('auth.login')
<!--model start for Register-->
@include('auth.register') @push('script') @endpush