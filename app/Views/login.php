<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">


        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post" action="<?php echo site_url('Login'); ?>">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" name="email" id="email" class="form-control form-control-lg" />
              <label class="form-label" for="email">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="password" class="form-control form-control-lg" />
              <label class="form-label" for="password">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="<?php echo site_url('Registration'); ?>" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
    </div>
  </div>
</section>