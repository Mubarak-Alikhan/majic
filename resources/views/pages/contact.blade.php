@extends('layouts.main') @section('main')
<section class="py-md-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-md-4 pb-3" data-aos="fade-down">
                <h1 class="font-1 fs-1 fw-600 text-center">Contact</h1>
            </div>
            @if (session('message'))
            <div class="alert alert-success">
                {{ session("message") }}
            </div>
            @endif
            <div class="col-md-4" data-aos="fade-down">
                <h2 class="font-1 fs-4 fw-600 pb-md-4 pb-3">Contact Info</h2>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/mail.png') }}" class="img-fluid" alt="" />
                    <div class="ps-4">
                        <p class="fs-4 font-1 mb-2 fw-600">Email Address</p>
                        <a href="mailto:yourbord@edu.com" class="font-1 mb-2 d-inline-block">yourbord@edu.com</a>
                        <a href="mailto:info@mydomain.com" class="font-1">info@mydomain.com</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-md-0 py-2" data-aos="fade-down">
                <h2 class="font-1 fs-4 fw-600">Get In Touch</h2>

                <form class="row g-3 pt-md-4" action="{{ route('web.inquiry') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control ps-md-4 p-md-3 rounded-0 text-dark my-1" placeholder="Your Name" id="" />
                    </div>
                    @error('name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control ps-md-4 p-md-3 rounded-0 text-dark my-1" placeholder="Your Email" id="" required />
                    </div>
                    @error('eamil')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror

                    <div class="col-md-6">
                        <input type="text" name="subject" class="form-control ps-md-4 p-md-3 rounded-0 text-dark my-1" placeholder="Your Subject" id="" />
                    </div>
                    @error('subject')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                    <div class="col-md-6">
                        <input type="tel" name="phone" class="form-control ps-md-4 p-md-3 rounded-0 text-dark my-1" placeholder="Phone number" id="" required />
                    </div>
                    @error('phone')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror

                    <div class="col-12">
                        <textarea name="message" id="summernote" class="form-control ps-md-4 p-md-3 rounded-0 text-dark"></textarea>
                    </div>
                    @error('message')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror

                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary btn-3 rounded-0 w-100 border-0 py-3">
                            Send Message
                        </button>
                        <!-- <button type="submit" data-bs-target="#thanku" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-primary btn-3 rounded-0 w-100 border-0 py-3">Send Message</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="thanku" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered my_modal">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body my_modal_body">
                <h1 class="text-center fw-500 fs-1">
                    Thanks for your message.
                </h1>
                <p class="fs-14 text-center line-height-26">
                    majic jewelry design will usually reply within 2 business
                    days
                </p>
            </div>
        </div>
    </div>
</div>

@endsection @push('script')
<script src="assets/summernote/summernote.min.js" defer></script>
@endpush