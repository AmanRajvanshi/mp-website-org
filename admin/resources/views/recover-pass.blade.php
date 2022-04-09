<!doctype html>
<html lang="en">

  @include('head')

<body class="">
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
      <img src="{{url('assets/img/loader.svg')}}" class="spinner">
    </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">
    <div class="container-fluid">
      <section class="login-content">
        <div class="container h-100">
          <div class="row align-items-center justify-content-center h-100">
            <div class="col-md-5">
              <div class="card">
                <div class="card-body">
                  <div class="auth-logo">
                    <img src="assets/img/logos/full-width-logo.png" class="img-fluid rounded-normal" alt="logo">
                  </div>
                  <h2 class="mb-2 text-center">Reset Password</h2>
                  <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
                  <form>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="email" placeholder=" ">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Reset</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- Page end  -->
  <!-- Wrapper End-->
  @include('sidebar')
  @include('script')
</body>

</html>
