<div class="row justify-content-lg-between justify-content-center">
  <div class="col-md-3" data-aos="fade-down">
    <ul class="filters">
      <li>
        <span class="fs-5 font-1 fw-600 text-uppercase">Search</span>
        <form class="pt-md-3 pt-2">
          <div class="border-0 position-relative">
            <input type="text" placeholder="Type your search..." class="fw-normal fs-14 form-control rounded-0 py-3 px-3 border-dark" />
            <button class="border-0 bg-transparent position-absolute searchIcon">
              <img src="{{ asset('images/search-icon.svg') }}" class="img-fluid" alt="" />
            </button>
          </div>
        </form>
      </li>
      <li class="pt-md-5 pt-3">
        <span class="fs-5 font-1 fw-600 text-uppercase">collections</span>
        @foreach($collections as $collection)
        <div class="pt-3">
          <p class="py-2 border-bottom fw-500">
            <a href="{{ route('web.collection', $collection->slug)}}" class="d-flex justify-content-between align-items-center">
              <span>{{$collection->name}}</span>
            </a>
          </p>
        </div>
        @endforeach
      </li>
      <li class="pt-md-5 pt-3">
        <span class="fs-5 font-1 fw-600 text-uppercase">Jewelry piece type</span>
        @foreach($categories as $category)
        <div class="pt-3">
          <p class="py-2 border-bottom fw-500">
            <a href="{{ url('view-product/'.$category->slug)}}" class="d-flex justify-content-between align-items-center">
              <span>{{$category->name}}</span>
            </a>
          </p>
        </div>
        @endforeach
      </li>

      <li class="pt-md-5 pt-3">
        <span class="fs-5 font-1 fw-600 text-uppercase">Sets</span>
        @foreach($sets as $set)
        <div class="pt-3">
          <p class="py-2 border-bottom fw-500 mb-0">
            <a href="" class="d-flex justify-content-between align-items-center">
              <span>{{$set->name}}</span>
            </a>
          </p>
        </div>
        @endforeach
      </li>

      <li class="pt-md-5 pt-3">
        <span class="fs-5 font-1 fw-600 text-uppercase">Style</span>
        @foreach($styles as $style)
        <div class="pt-3">
          <p class="py-2 border-bottom fw-500 mb-0">
            <a href="" class="d-flex justify-content-between align-items-center">
              <span>{{$style->name}} </span>
            </a>
          </p>
        </div>
        @endforeach
      </li>

      <li class="pt-md-5 pt-3">
        <span class="fs-5 font-1 fw-600 text-uppercase">Filter by Price</span>
        <div class="range-slider">
          <span class="rangeValues d-block"></span>
          <input value="1000" min="1000" max="50000" step="500" type="range" />
          <input value="50000" min="1000" max="50000" step="500" type="range" />
        </div>
      </li>

      <li class="pt-md-5 pt-3 misc d-none">
        <span class="fs-5 font-1 fw-600 text-uppercase">Search By</span>
        <form class="pt-md-3 pt-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="limitEdition" />
            <label class="form-check-label" for="limitEdition">
              Limited edition
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="Onekind" />
            <label class="form-check-label" for="Onekind ">
              One of a kind
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="SoldOut " />
            <label class="form-check-label" for="SoldOut">
              Sold out
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="Sealant" />
            <label class="form-check-label" for="Sealant">
              Sealant
            </label>
          </div>
        </form>
      </li>
    </ul>
  </div>
  <div class="col-md-8 row row-cols-sm-2 row-cols-1"></div>

  <div class="col-12">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item pagination_custom">
          {{ $products->links() }}
        </li>
      </ul>
    </nav>
  </div>
</div>