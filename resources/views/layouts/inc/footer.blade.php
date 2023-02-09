<footer>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <img
                    src="{{ asset('images/logo.svg') }}"
                    class="img-fluid"
                    alt=""
                />
                <ul
                    class="d-md-flex justify-content-between pt-md-5 pb-md-3 pb-2 pt-3"
                >
                    <li>
                        <a
                            href="{{ route('web.home') }}"
                            class="text-uppercase fw-600"
                            >Home</a
                        >
                    </li>
                    <li>
                        <a
                            href="{{ route('web.about') }}"
                            class="text-uppercase fw-600"
                            >About</a
                        >
                    </li>
                    <li>
                        <a
                            href="{{ route('web.products') }}"
                            class="text-uppercase fw-600"
                            >Products</a
                        >
                    </li>
                    <li>
                        <a
                            href="{{ route('web.products') }}"
                            class="text-uppercase fw-600"
                            >Collections</a
                        >
                    </li>
                    <li>
                        <a
                            href="{{ route('web.contact') }}"
                            class="text-uppercase fw-600"
                            >Contact</a
                        >
                    </li>
                    <li>
                        <a
                            href="{{ route('web.faq') }}"
                            class="text-uppercase fw-600"
                            >Faqs</a
                        >
                    </li>
                </ul>
            </div>
        </div>
        <div class="row row-cols-md-2 row-cols-1 border-top pt-3 border-dark">
            <div class="col text-md-start text-center">
                <p class="font-1 fw-normal mb-0">Copyrights @ lorem ipsum</p>
            </div>
            <div class="col text-md-end text-center">
                <a href="{{ route('web.policy') }}" class="font-1 fw-normal"
                    >Policies</a
                >
            </div>
        </div>
    </div>
</footer>
