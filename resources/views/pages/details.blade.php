@extends('layouts.main') @section('main')

<section class="py-md-5 py-3 product_data">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <div class="text-center">
          <h1 class="text-dark display-5 mt-0 fw-600">
            CA Fire -{{$products->name}}
          </h1>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-6 position-relative">
        <div class="position-absolute popHoverBox">
          <a href="javascript:;" class="btn-3 product_detail_hover" data-bs-placement="bottom" tabindex="0 " role="button ">
            Limited Edition
            <input type="hidden" class="products_id" value="{{$products->id}}" />
          </a>
        </div>
        <div class="row">
          <div class="col-lg-3 order-2 order-lg-1">
            <div class="slider-nav">
              <!-- <div>
                <img src="{{ asset('images/products/product-side-2.png')}} " alt=" " class="img-fluid mx-auto mb-3 slider-nav-img" />
              </div>
              <div>
                <img src="{{ asset('images/products/product-side-2.png')}}" alt=" " class="img-fluid mx-auto mb-3 slider-nav-img" />
              </div>
              <div>
                <img src="{{ asset('images/products/product-side-2.png')}} " alt=" " class="img-fluid mx-auto mb-3 slider-nav-img" />
              </div>
              <div>
                <img src="{{ asset('images/products/product-side-2.png')}} " alt=" " class="img-fluid mx-auto mb-3 slider-nav-img" />
              </div> -->
             
              <div>
                <img src="{{ '/'.$products->image}} " alt=" " class="img-fluid mx-auto mb-3 slider-nav-img" />
              </div>
           
            </div>
          </div>
          <div class="col-lg-9 order-1 order-lg-2">
            <div class="slider-for">
              <div>
                <figure>
                  <img src="{{ '/'.$products->image}} " height="650px" width="400px" alt=" " />
                  <figcaption class="text-center fw-600 mt-3">
                    Image label
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <p class="text-black-2 fs-14 fw-600 line-height-26 mb-4">
          {{ $products->description }}
        </p>
        <div class="d-flex mb-4">
          <span class="me-2 fw-600">Materials:</span>
          <span>{{ $products->material }}</span>
        </div>
        <h3 class="fw-600 fs-16 mb-4">Photography model dimensions</h3>
        <div class="row">
          <div class="col-sm-6 mb-4">
            <span class="fw-600">Circumference shown:</span>
          </div>
          <div class="col-sm-6 mb-4">
            <span>50 in / 10 cm</span>
          </div>
          <div class="col-sm-6 mb-4">
            <span class="fw-600">Minimum length:</span>
          </div>
          <div class="col-sm-6 mb-4">
            <span>50 in / 10 cm</span>
          </div>
          <div class="col-sm-6 mb-4">
            <span class="fw-600">Minimum adjustment increment length :</span>
          </div>
          <div class="col-sm-6 mb-4">
            <span>50 in / 10 cm</span>
          </div>
          <div class="align-self-center fw-600 col-lg-6 col-sm-4 mb-4">
            Quantity:
          </div>
          <div class="quantity buttons_added d-flex col-lg-6 col-sm-8 mb-4">
            <!-- <input type="button " value="-" class="minus border-0 ">
                        <input type="number " step="1 " min="1 " max=" " name="quantity " value="1 " title="Qty " class="input-text qty text border-0 " size="4 " pattern=" " inputmode=" ">
                        <input type="button " value="+ " class="plus border-0 "> -->

            <input type="button" value="-" class="minus" />
            <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" />
            <input type="button" value="+" class="plus" />
          </div>
          <div class="align-self-center fw-600 col-sm-6 mb-4">
            Share at:
          </div>
          <div class="d-flex col-sm-6 mb-4">
            <a href=" " class="social-icons">
              <svg xmlns="http://www.w3.org/2000/svg " width="12.403 " height="23.158 " viewBox="0 0 12.403 23.158 ">
                <path id="Icon_awesome-facebook-f " data-name="Icon awesome-facebook-f " d="M13.2,13.026l.643-4.191H9.822V6.116a2.1,2.1,0,0,1,2.363-2.264h1.828V.283A22.3,22.3,0,0,0,10.767,0C7.456,0,5.291,2.007,5.291,5.641V8.835H1.609v4.191H5.291V23.158H9.822V13.026Z
                        " transform="translate(-1.609) " fill="#171717 " />
              </svg>
            </a>
            <a href=" " class="social-icons insta">
              <svg xmlns="http://www.w3.org/2000/svg " width="21.298 " height="21.298 " viewBox="0 0 21.298 21.298 ">
                <g id="Icon_feather-instagram " data-name="Icon feather-instagram " transform="translate(1 1) ">
                  <path id="Path_19737 " data-name="Path 19737 " d="M7.825,3h9.649A4.825,4.825,0,0,1,22.3,7.825v9.649A4.825,4.825,0,0,1,17.474,22.3H7.825A4.825,4.825,0,0,1,3,17.474V7.825A4.825,4.825,0,0,1,7.825,3Z " transform="translate(-3
                        -3) " fill="none " stroke="#171717 " stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " />
                  <path id="Path_19738 " data-name="Path 19738 " d="M19.742,15.229a3.86,3.86,0,1,1-3.252-3.252,3.86,3.86,0,0,1,3.252,3.252Z " transform="translate(-6.234 -6.187) " fill="none " stroke="#171717 " stroke-linecap="round
                        " stroke-linejoin="round " stroke-width="2 " />
                  <path id="Path_19739 " data-name="Path 19739 " d="M26.25,9.75h0 " transform="translate(-11.294 -5.408) " fill="none " stroke="#171717 " stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " />
                </g>
              </svg>
            </a>
            <a href=" " class="social-icons">
              <svg xmlns="http://www.w3.org/2000/svg " width="16.482 " height="21.299 " viewBox="0 0 16.482 21.299 ">
                <path id="Path_19769 " data-name="Path 19769 " d="M0,7.645A6.705,6.705,0,0,1,.564,4.983,8.453,8.453,0,0,1,2.183,2.534,7.733,7.733,0,0,1,4.951.7a9.937,9.937,0,0,1,3.8-.7A7.7,7.7,0,0,1,14.31,2.087a6.6,6.6,0,0,1,2.172,4.919,9.518,9.518,0,0,1-1.842,6.016A5.759,5.759,0,0,1,9.881,15.4a3.774,3.774,0,0,1-1.8-.447A2.739,2.739,0,0,1,6.9,13.863l-.852,3.364a6.521,6.521,0,0,1-.277.82c-.113.277-.238.543-.373.8s-.27.5-.4.724-.27.441-.4.639-.251.366-.351.5-.192.251-.277.351l-.128.17a.157.157,0,0,1-.17.064.154.154,0,0,1-.128-.128c0-.015-.011-.113-.032-.3s-.043-.379-.064-.586-.043-.473-.064-.8-.028-.643-.021-.948.028-.643.064-1.011a8.449,8.449,0,0,1,.16-1.022q.233-1,1.576-6.665a3.583,3.583,0,0,1-.277-.82,3.811,3.811,0,0,1-.106-.777l-.021-.319a3.617,3.617,0,0,1,.692-2.268,2.052,2.052,0,0,1,1.672-.905,1.511,1.511,0,0,1,1.224.522,1.965,1.965,0,0,1,.437,1.31,5.009,5.009,0,0,1-.181,1.2q-.182.712-.479,1.64t-.426,1.5a1.839,1.839,0,0,0,.373,1.661,1.932,1.932,0,0,0,1.565.7A3.2,3.2,0,0,0,12.4,11.382a9.108,9.108,0,0,0,1.1-4.61A4.509,4.509,0,0,0,12.159,3.4a5.14,5.14,0,0,0-3.748-1.31A5.791,5.791,0,0,0,4.057,3.812,5.731,5.731,0,0,0,2.385,7.943a3.657,3.657,0,0,0,.809,2.406.693.693,0,0,1,.17.681,4.405,4.405,0,0,0-.128.49,4.405,4.405,0,0,1-.128.49.382.382,0,0,1-.213.309.482.482,0,0,1-.383-.011A3.562,3.562,0,0,1,.628,10.551,6.367,6.367,0,0,1,0,7.645Z
                        " fill="#171717 " />
              </svg>
            </a>
          </div>
        </div>
        <p class="d-flex justify-content-start fw-500 fs-5 mb-1">
          color:-
          @foreach($products->variants as $variant)
        <div  style="height: 25px; width: 50px; border-radius: 5px; background-color:{{ "#".$variant->color_name }};"></div>
        </p>
        @endforeach
        <a href="customization-bracelets.html" target="_blank" class="btn-2 d-block line-height-60 fw-600 text-center">
          Customize
        </a>
        <div class="row mt-4">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <form action="{{ route('addcart', $products->id) }}" method="POST">
              @csrf  
            <a href="{{ route('addcart', $products->id) }}" class="btn-3 fw-600 text-center line-height-60 d-block p-0">
              Add to cart
            </a>
            </form>

          </div>
          <div class="col-lg-6 mb-lg-0">
            <a href="" data-productid="{{ $products->id }}" data-userid="{{Auth::id()}}" class="update_wishlist btn-2 fw-600 text-center line-height-60 d-block">
              <svg xmlns="http://www.w3.org/2000/svg " width="26 " height="24 " viewBox="0 0 26 24 ">
                <path id="Icon_ionic-md-heart-empty " data-name="Icon ionic-md-heart-empty " d="M22.225,4.5a7.69,7.69,0,0,0-5.85,2.744A7.69,7.69,0,0,0,10.525,4.5a7.069,7.069,0,0,0-7.15,7.194c0,4.969,4.419,8.956,11.112,15.106l1.888,1.7,1.887-1.7c6.694-6.15,11.113-10.138,11.113-15.106A7.069,7.069,0,0,0,22.225,4.5Zm-5.05,20.581-.263.244-.537.487-.537-.487-.263-.244a79.442,79.442,0,0,1-7.669-7.625c-1.75-2.169-2.525-3.944-2.525-5.763A5.2,5.2,0,0,1,6.863,7.987,5.086,5.086,0,0,1,10.525,6.5a5.732,5.732,0,0,1,4.319,2.031l1.531,1.819,1.531-1.819A5.711,5.711,0,0,1,22.225,6.5a5.111,5.111,0,0,1,3.669,1.487,5.209,5.209,0,0,1,1.481,3.706c0,1.812-.781,3.594-2.525,5.763A79.6,79.6,0,0,1,17.175,25.081Z
                        " transform="translate(-3.375 -4.5) " fill="#171717 " />
              </svg>
              Add to wishlist
            </a>
         
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-md-5 py-3">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2>You might also like…</h2>
      </div>
    </div>
    <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1">
      <div class="col mb-5 mb-lg-0">
        <div class="product_box">
          <div class="top position-relative">
            <img src="{{asset('images/products/6.png')}}" alt="" class="img-fluid w-100" />
            <div class="onhover-btn position-absolute w-100 text-center">
              <a href="" class="btn-3">View Product Details</a>
            </div>
            <div class="onhover-icons position-absolute">
              <div class="d-flex justify-content-center">
                <a href="javascript:;" class="icon-box d-flex justify-content-center align-items-center mr-30">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24">
                    <path id="Icon_ionic-md-heart-empty" data-name="Icon ionic-md-heart-empty" d="M22.225,4.5a7.69,7.69,0,0,0-5.85,2.744A7.69,7.69,0,0,0,10.525,4.5a7.069,7.069,0,0,0-7.15,7.194c0,4.969,4.419,8.956,11.112,15.106l1.888,1.7,1.887-1.7c6.694-6.15,11.113-10.138,11.113-15.106A7.069,7.069,0,0,0,22.225,4.5Zm-5.05,20.581-.263.244-.537.487-.537-.487-.263-.244a79.442,79.442,0,0,1-7.669-7.625c-1.75-2.169-2.525-3.944-2.525-5.763A5.2,5.2,0,0,1,6.863,7.987,5.086,5.086,0,0,1,10.525,6.5a5.732,5.732,0,0,1,4.319,2.031l1.531,1.819,1.531-1.819A5.711,5.711,0,0,1,22.225,6.5a5.111,5.111,0,0,1,3.669,1.487,5.209,5.209,0,0,1,1.481,3.706c0,1.812-.781,3.594-2.525,5.763A79.6,79.6,0,0,1,17.175,25.081Z" transform="translate(-3.375 -4.5)" fill="#fff" />
                  </svg>
                </a>
                <a href="javascript:;" class="icon-box d-flex justify-content-center align-items-center ml-30">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27.999" viewBox="0 0 24 27.999">
                    <path id="Bag" d="M1535.282,38.8a.865.865,0,0,0-.854-.8h-4.286v-1.75a5.144,5.144,0,1,0-10.286,0V38h-4.286a.865.865,0,0,0-.854.8L1513,58.045a.886.886,0,0,0,.221.669.849.849,0,0,0,.633.285h22.285a.849.849,0,0,0,.633-.285.886.886,0,0,0,.221-.669Zm-13.711-2.546a3.429,3.429,0,1,1,6.857,0V38h-6.857Zm-6.775,21,1.558-17.5h3.5v1.993a1.714,1.714,0,1,0,1.714,0V39.749h6.857v1.993a1.714,1.714,0,1,0,1.714,0V39.749h3.5l1.558,17.5Z" transform="translate(-1513 -30.999)" fill="#fff" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="bottom mt-4">
            <p class="fw-500 fs-20">
              Product name - <span>sub heading</span>
            </p>
            <p class="mb-0 fw-500 fs-20">Price</p>
          </div>
        </div>
      </div>
      <div class="col mb-5 mb-lg-0">
        <div class="product_box">
          <div class="top position-relative">
            <img src="{{asset('images/products/7.png')}}" alt="" class="img-fluid w-100" />
            <div class="onhover-btn position-absolute w-100 text-center">
              <a href="" class="btn-3">View Product Details</a>
            </div>
            <div class="onhover-icons position-absolute">
              <div class="d-flex justify-content-center">
                <a href="javascript:;" class="icon-box d-flex justify-content-center align-items-center mr-30">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24">
                    <path id="Icon_ionic-md-heart-empty" data-name="Icon ionic-md-heart-empty" d="M22.225,4.5a7.69,7.69,0,0,0-5.85,2.744A7.69,7.69,0,0,0,10.525,4.5a7.069,7.069,0,0,0-7.15,7.194c0,4.969,4.419,8.956,11.112,15.106l1.888,1.7,1.887-1.7c6.694-6.15,11.113-10.138,11.113-15.106A7.069,7.069,0,0,0,22.225,4.5Zm-5.05,20.581-.263.244-.537.487-.537-.487-.263-.244a79.442,79.442,0,0,1-7.669-7.625c-1.75-2.169-2.525-3.944-2.525-5.763A5.2,5.2,0,0,1,6.863,7.987,5.086,5.086,0,0,1,10.525,6.5a5.732,5.732,0,0,1,4.319,2.031l1.531,1.819,1.531-1.819A5.711,5.711,0,0,1,22.225,6.5a5.111,5.111,0,0,1,3.669,1.487,5.209,5.209,0,0,1,1.481,3.706c0,1.812-.781,3.594-2.525,5.763A79.6,79.6,0,0,1,17.175,25.081Z" transform="translate(-3.375 -4.5)" fill="#fff" />
                  </svg>
                </a>
                <a href="javascript:;" class="icon-box d-flex justify-content-center align-items-center ml-30">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27.999" viewBox="0 0 24 27.999">
                    <path id="Bag" d="M1535.282,38.8a.865.865,0,0,0-.854-.8h-4.286v-1.75a5.144,5.144,0,1,0-10.286,0V38h-4.286a.865.865,0,0,0-.854.8L1513,58.045a.886.886,0,0,0,.221.669.849.849,0,0,0,.633.285h22.285a.849.849,0,0,0,.633-.285.886.886,0,0,0,.221-.669Zm-13.711-2.546a3.429,3.429,0,1,1,6.857,0V38h-6.857Zm-6.775,21,1.558-17.5h3.5v1.993a1.714,1.714,0,1,0,1.714,0V39.749h6.857v1.993a1.714,1.714,0,1,0,1.714,0V39.749h3.5l1.558,17.5Z" transform="translate(-1513 -30.999)" fill="#fff" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="bottom mt-4">
            <p class="fw-500 fs-20">
              Product name - <span>sub heading</span>
            </p>
            <p class="mb-0 fw-500 fs-20">Price</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product_box position-relative">
          <div class="position-absolute popHoverBox">
            <a href="javascript:;" class="btn-3 product_detail_hover" data-bs-placement="bottom" tabindex="0 " role="button ">
              Limited Edition
            </a>
          </div>
          <div class="top position-relative">
            <img src="{{asset('images/products/8.png')}}" alt="" class="img-fluid w-100" />
            <div class="onhover-btn position-absolute w-100 text-center">
              <a href="" class="btn-3">View Product Details</a>
            </div>
            <div class="onhover-icons position-absolute">
              <div class="d-flex justify-content-center">
                <a href="javascript:;" class="icon-box d-flex justify-content-center align-items-center mr-30">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24">
                    <path id="Icon_ionic-md-heart-empty" data-name="Icon ionic-md-heart-empty" d="M22.225,4.5a7.69,7.69,0,0,0-5.85,2.744A7.69,7.69,0,0,0,10.525,4.5a7.069,7.069,0,0,0-7.15,7.194c0,4.969,4.419,8.956,11.112,15.106l1.888,1.7,1.887-1.7c6.694-6.15,11.113-10.138,11.113-15.106A7.069,7.069,0,0,0,22.225,4.5Zm-5.05,20.581-.263.244-.537.487-.537-.487-.263-.244a79.442,79.442,0,0,1-7.669-7.625c-1.75-2.169-2.525-3.944-2.525-5.763A5.2,5.2,0,0,1,6.863,7.987,5.086,5.086,0,0,1,10.525,6.5a5.732,5.732,0,0,1,4.319,2.031l1.531,1.819,1.531-1.819A5.711,5.711,0,0,1,22.225,6.5a5.111,5.111,0,0,1,3.669,1.487,5.209,5.209,0,0,1,1.481,3.706c0,1.812-.781,3.594-2.525,5.763A79.6,79.6,0,0,1,17.175,25.081Z" transform="translate(-3.375 -4.5)" fill="#fff" />
                  </svg>
                </a>
                <a href="javascript:;" class="icon-box d-flex justify-content-center align-items-center ml-30">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27.999" viewBox="0 0 24 27.999">
                    <path id="Bag" d="M1535.282,38.8a.865.865,0,0,0-.854-.8h-4.286v-1.75a5.144,5.144,0,1,0-10.286,0V38h-4.286a.865.865,0,0,0-.854.8L1513,58.045a.886.886,0,0,0,.221.669.849.849,0,0,0,.633.285h22.285a.849.849,0,0,0,.633-.285.886.886,0,0,0,.221-.669Zm-13.711-2.546a3.429,3.429,0,1,1,6.857,0V38h-6.857Zm-6.775,21,1.558-17.5h3.5v1.993a1.714,1.714,0,1,0,1.714,0V39.749h6.857v1.993a1.714,1.714,0,1,0,1.714,0V39.749h3.5l1.558,17.5Z" transform="translate(-1513 -30.999)" fill="#fff" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="bottom mt-4">
            <p class="fw-500 fs-20">
              Product name - <span>sub heading</span>
            </p>
            <p class="mb-0 fw-500 fs-20">Price</p>
          </div>
        </div>
      </div>
      <div class="col-12 text-center mt-5">
        <a href="" class="btn-3 text-center"> Browse all </a>
      </div>
    </div>
  </div>
</section>

@endsection