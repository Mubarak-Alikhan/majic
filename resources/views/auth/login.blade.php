<div class="login modal fade fw-normal" id="myModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered my_modal">
        <div class="modal-content">
            <div class="modal-body p-md-4">
                <h1 class="text-center fw-500 fs-1">Login</h1>
                <p class="fs-14 text-center line-height-26">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam
                </p>
                <form class="row g-3 pt-md-4 w-75 mx-auto formClick">
                    <div class="col-md-12">
                        <label for="Username" class="fw-600">Email / Username:</label>
                        <input type="text" name="email" class="form-control ps-md-4 p-md-3 rounded-0 text-dark my-1" placeholder="Your Name" id="Username" />
                    </div>
                    <div class="col-md-12">
                        <label for="pwd" class="fw-600">Password</label>
                        <input type="password" name="password" class="form-control ps-md-4 p-md-3 rounded-0 text-dark my-1" placeholder="Your Name" id="pwd" />
                    </div>
                    <div class="col-md-12 d-md-flex justify-content-between align-items-center">
                        <div class="radio_group mx-3">
                            <input type="radio" name="rating" id="byTextMessage" value="byTextMessage" /><label for="byTextMessage">Remember</label>
                        </div>
                        <a href="#" class="text-red">Forgot password</a>
                    </div>
                    <div class="col-md-6 mx-auto">
                        <button type="submit" class="btn btn-primary btn-3 rounded-0 w-100 border-0 py-3">
                            {{ __("login") }}
                        </button>
                    </div>
                    <div class="col-12">
                        <p class="text-center">
                            Dont have an account ?
                            <a href="http://majic.test/?register=true" role="button" class="btn-link">
                                Register </a>now
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>