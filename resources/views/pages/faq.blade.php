@extends('layouts.main')

@section('main')

<section class="py-md-5 py-3 faqs">
  <div class="container">
      <div class="row">
          <div class="col-12 pb-md-4 pb-3" data-aos="fade-down">
              <h1 class="font-1 fs-1 fw-600 text-center">Frequently Asked Questions</h1>
          </div>
          <div class="col-md-3" data-aos="fade-down">
              <h2 class="font-1 fs-5 fw-600 pb-md-4 pb-3">Contents</h2>
              <ul>
                  <li class="py-2" data-bs-toggle="collapse" href="#general" role="button" aria-expanded="false" aria-controls="general">
                      <a href="#">General</a>
                  </li>

                  <li class="py-2" data-bs-toggle="collapse" href="#Acceptance" role="button" aria-expanded="false" aria-controls="Acceptance">
                      <a href="#">Acceptance</a>
                  </li>
                  <li class="py-2" data-bs-toggle="collapse" href="#Returns" role="button" aria-expanded="false" aria-controls="Returns">
                      <a href="#">Returns</a>
                  </li>
                  <li class="py-2" data-bs-toggle="collapse" href="#Warranty" role="button" aria-expanded="false" aria-controls="Warranty">
                      <a href="#">Warranty</a>
                  </li>
                  <li class="py-2" data-bs-toggle="collapse" href="#Exchange" role="button" aria-expanded="false" aria-controls="Exchange">
                      <a href="#">Exchange</a>
                  </li>
                  <li class="py-2" data-bs-toggle="collapse" href="#shipping" role="button" aria-expanded="false" aria-controls="shipping">
                      <a href="#">Shipping</a>
                  </li>
                  <li class="py-2" data-bs-toggle="collapse" href="#cancellations" role="button" aria-expanded="false" aria-controls="cancellations">
                      <a href="#">Cancellations</a>
                  </li>
                  <li class="py-2" data-bs-toggle="collapse" href="#showcase" role="button" aria-expanded="false" aria-controls="showcase">
                      <a href="#">Customer showcase comments</a>
                  </li>
              </ul>
          </div>
          <div class="col-md-9">
              <ul>
                  <li class="border-bottom">
                      <div class="fw-bold py-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam?</div>
                      <div class="collapse" id="general">
                          <div class="card card-body px-0 border-0">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                      </div>
                  </li>
                  <li class="border-bottom">
                      <div class="fw-bold py-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam?</div>
                      <div class="collapse" id="Acceptance">
                          <div class="card card-body px-0 border-0">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                      </div>
                  </li>
                  <li class="border-bottom">
                      <div class="fw-bold py-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam?</div>
                      <div class="collapse" id="Returns">
                          <div class="card card-body px-0 border-0">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                      </div>
                  </li>
                  <li class="border-bottom">
                      <div class="fw-bold py-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam?</div>
                      <div class="collapse" id="Warranty">
                          <div class="card card-body px-0 border-0">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                      </div>
                  </li>
                  <li class="border-bottom">
                      <div class="fw-bold py-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam?</div>
                      <div class="collapse" id="Exchange">
                          <div class="card card-body px-0 border-0">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                      </div>
                  </li>
                  <li class="border-bottom">
                      <div class="fw-bold py-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam?</div>
                      <div class="collapse" id="Exchange">
                          <div class="card card-body px-0 border-0">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                      </div>
                  </li>
                  <li class="border-bottom">
                      <div class="fw-bold py-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam?</div>
                      <div class="collapse" id="shipping">
                          <div class="card card-body px-0 border-0">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                      </div>
                  </li>
                  <li class="border-bottom">
                      <div class="fw-bold py-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam?</div>
                      <div class="collapse" id="cancellations">
                          <div class="card card-body px-0 border-0">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                      </div>
                  </li>
                  <li class="border-bottom">
                      <div class="fw-bold py-3">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam?</div>
                      <div class="collapse" id="showcase">
                          <div class="card card-body px-0 border-0">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</section>
@endsection