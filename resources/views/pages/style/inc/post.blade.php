@if($products) @foreach($products as $product)

dd($products)
<div class="col">
  <div class="product_box py-md-3">
    <div class="top position-relative">
      <img src="{{ asset('images/products/6.png') }}" alt="" class="img-fluid w-100" />
      <div class="onhover-btn position-absolute w-100 text-center">
        <a href="{{ route('web.single-product', $product->slug)}}" class="btn-3">View Product Details</a>
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
    <div class="bottom mt-md-4 my-2">
      <p class="fw-500 fs-5 mb-1">
        {{$product->name}}

        <span>Available</span>
      </p>

      <p class="mb-0 fw-500 fs-5 mb-1">${{$product->selling_price}}</p>
    </div>
  </div>
</div>
@endforeach @endif