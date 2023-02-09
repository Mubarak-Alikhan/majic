<section class="product_banner position-relative py-5">
    <div class="container">
        @if (session('message'))
        <div class="alert alert-success">
           {{ session('message') }}
        </div>
     @endif
        <div class="row align-items-center">
            <div class="col-md-7">
                <img src="{{ asset('images/product-banner-left.png') }}" alt="" class="img-fluid" />
            </div>
            <div class="col-md-5">
                <h2 class="text-center fw-600 mb-4">STAY CONNECTED</h2>
                <form method ="post" >
                    @csrf
                    <div class="row g-0">
                        <div class="col-sm-8">
                            <input type="email" name="email" placeholder="Email Address" id="email" class="form-control bg-white rounded-0 height-50 border-black"  required />
                            <span class="text-danger error-text email_err"></span>
                        </div>
                        <div class="col-sm-4">

                            <button id="sendMessageButton" type="submit" class="btn-3 border-0 p-0 h-100 w-100 d-block">
                                Subscribe
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>