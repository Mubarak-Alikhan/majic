@extends('layouts.main') @section('main')
<section>
    <div class="container">
        <div class="row my-md-5  my-3">
            <div class="col-sm-6">
                <h2>Cart (@if(session()->exists('cart'))
                    {{ count(session()->get('cart')) }}
                    @else{
                    0
                    }
                    @endif)
                </h2>
            </div>
            <div class="col-sm-6 text-end">
                <a href="{{ route('web.products')}}" class="btn-2 d-inline-block line-height-60 fw-600 px-5">Go Back To Shopping</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                @if(session('cart')) 
                @foreach(session('cart') as $id =>
                $product)
                <div class="cart-box bg-form p-4 mb-5">
                    <div class="row">

                        <div class="col-md-3">
                            <img src="{{ $product['image'] }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="fs-20 fw-600">Collection name</h3>
                                    <p class="fs-14 fw-600 mb-4">Set name</p>
                                    <div class="row">
                                        <p class="fs-14 fw-600 mb-2 col-sm-5">Wearer name</p>
                                        <p class="fs-14 fw-600 mb-2 col-sm-5">{{$product["name"]}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="fs-14 fw-600 mb-2 col-sm-5">Piece type</p>
                                        <p class="fs-14 fw-600 mb-2 col-sm-5">piece version</p>
                                    </div>
                                    <p class="mb-4">
                                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="fs-14 text-blue text-decoration-underline fw-600">Customize Again</a>
                                        <!-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> -->
                                    </p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="16.2" viewBox="0 0 16.2 16.2">
                                        <g id="delete" transform="translate(-2 -2)">
                                            <path id="Path_19763" data-name="Path 19763" d="M14.411,19.608H7.549a1.938,1.938,0,0,1-1.934-1.751L4.5,6.712A.647.647,0,0,1,5.148,6H16.812a.648.648,0,0,1,.645.712L16.345,17.856a1.938,1.938,0,0,1-1.934,1.752ZM5.863,7.3,6.9,17.728a.647.647,0,0,0,.645.584h6.862a.647.647,0,0,0,.645-.584L16.1,7.3Z" transform="translate(-0.88 -1.408)" fill="red" />
                                            <path id="Path_19764" data-name="Path 19764" d="M17.552,7.3H2.648a.648.648,0,1,1,0-1.3h14.9a.648.648,0,1,1,0,1.3Z" transform="translate(0 -1.408)" fill="red" />
                                            <path id="Path_19765" data-name="Path 19765" d="M14.148,18.424a.648.648,0,0,1-.648-.648V10.648a.648.648,0,0,1,1.3,0v7.128A.648.648,0,0,1,14.148,18.424Z" transform="translate(-4.048 -2.816)" fill="red" />
                                            <path id="Path_19766" data-name="Path 19766" d="M10.3,18.424a.648.648,0,0,1-.645-.59L9,10.706a.648.648,0,1,1,1.291-.117l.648,7.128a.648.648,0,0,1-.646.706Z" transform="translate(-2.464 -2.816)" fill="red" />
                                            <path id="Path_19767" data-name="Path 19767" d="M17.649,18.424A.648.648,0,0,1,17,17.718l.648-7.128a.648.648,0,1,1,1.291.117l-.648,7.128A.648.648,0,0,1,17.649,18.424Z" transform="translate(-5.28 -2.816)" fill="red" />
                                            <path id="Path_19768" data-name="Path 19768" d="M15.48,5.888H9.648A.648.648,0,0,1,9,5.24V2.648A.648.648,0,0,1,9.648,2H15.48a.648.648,0,0,1,.648.648V5.24A.648.648,0,0,1,15.48,5.888ZM10.3,4.592h4.536V3.3H10.3Z" transform="translate(-2.464)" fill="red" />
                                        </g>
                                    </svg>
                                    <p>
                                        <a href="{{ route('remove', [$id]) }}" class="fs-14 text-red text-decoration-underline">Remove</a>
                                    </p>
                                    <h3 class="fw-500 mt-md-5 mt-2">${{ $product["price"] }}</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                @else
                Sorry !!! its empty..........
               
                @endif

                <div class="text-center my-4">
                    <a href="{{ route('checkout') }}" class="btn-3 fw-600 text-center line-height-60 py-2">
                        Proceed to checkout
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered my_modal">
        <div class="modal-content">
            <div class="modal-body my_modal_body">
                <h1 class="text-center fw-500 fs-1">Measurement Reminder</h1>
                <p class="fs-14 text-center line-height-26">
                    Would you like to get a reminder to provide your body measurements for the items in your cart that need measurements? I won’t be a pest; I’ll send a reminder only once a week for up to 30 days.
                </p>
                <div class="d-flex justify-content-center">
                    <div class="radio_group mx-3">
                        <input type="radio" name="rating" id="byTextMessage" value="byTextMessage" checked><label for="byTextMessage"> By text message </label>
                    </div>
                    <div class="radio_group mx-3">
                        <input type="radio" name="rating" id="byEmail" value="byEmail"><label for="byEmail"> By email </label>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <div class="mx-2">
                        <a href="javascript:;" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" role="button" class="btn-3 modal_btn">OK</a>
                    </div>
                    <div class="mx-2">
                        <a href="javascript:;" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal" role="button" class="btn-2 modal_btn d-inline-block">No thanks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered my_modal">
        <div class="modal-content">
            <div class="modal-body my_modal_body">
                <h1 class="text-center fw-500 fs-1">Measurement Reminder</h1>
                <p class="fs-14 text-center line-height-26">
                    Would you like to get a reminder to provide your body measurements for the items in your cart that need measurements? I won’t be a pest; I’ll send a reminder only once a week for up to 30 days.
                </p>

                <div class="row justify-content-center mt-4 g-0">
                    <div class="col-sm-8">
                        <input type="text" class="form-control input-theme h-100" placeholder="Enter contact number">
                    </div>
                    <div class="col-sm-4">
                        <a href="javascript:;" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal" role="button" class="btn-3 modal_btn">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered my_modal">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body my_modal_body">
                <h1 class="text-center fw-500 fs-1">Reminder Activated!</h1>
                <p class="fs-14 text-center line-height-26">
                    You’ll receive reminders at <text message number> once/week for the next 30 days
                </p>

                <div class="row justify-content-center mt-4 g-0">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered my_modal">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body my_modal_body">
                <h1 class="text-center fw-500 fs-1">Reminder Declined!</h1>
                <p class="fs-14 text-center line-height-26">
                    We won’t send you any reminders. Please remember to provide body measurements for your cart items within the next 30 days. Your cart will expire after that time.
                </p>

                <div class="row justify-content-center mt-4 g-0">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection