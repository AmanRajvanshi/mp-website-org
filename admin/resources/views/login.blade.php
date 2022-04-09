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
                  <h2 class="mb-2 text-center">Login</h2>
                  <!--
                  <p class="text-center">To Keep connected with us please login with your personal info.
                  </p>
-->
                  <form id="form">
                    @csrf
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" name="email" type="email" placeholder="admin@example.com">
                          <span class="text-danger field_error" id="email_error"></span>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Password</label>
                          <input class="form-control" name="password" type="password" placeholder="********">
                          <span class="text-danger field_error" id="password_error"></span>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Remember
                            Me</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <a href="recover-pass" class="text-primary float-right">Forgot
                          Password?</a>
                      </div>
                    </div>
                    <div class="justify-content-center align-items-center">
                      <!--
                      <span>Create an Account <a href="signup.php" class="text-primary">Sign
                          Up</a></span>
-->
                      <button type="submit" class="btn btn-primary">Sign In</button><br>
                      <div id="error_msg" class="text-danger">{{Session::get('error')}}</div>
                    </div>
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
  @include('footer')
  @include('script')
  <script>
    $(document).ready(function() {
          $('#form').submit(function(e) {
              e.preventDefault();
              $('.field_error').html('');
              $.ajax({
                 url : 'auth',
                 data : $('#form').serialize(),
                 method : 'POST',
                 dataType : 'json',
                 success : function(result) {
                    if (result.status == 'error') {
                        $('#error_msg').html(result.error);
                        $.each(result.error,function(key,val){
                        // console.log(key);
                        // console.log(val);
                        $('#'+key+'_error').html(val[0]);
                        })
                    }else if(result.status == 'success'){
                        $('#success_msg').html(result.msg);
                        setTimeout(function(){
                            window.location='index'; 
                        },1000);
                    }
                 }
              });
          });
        });
  </script>
</body>

</html>
