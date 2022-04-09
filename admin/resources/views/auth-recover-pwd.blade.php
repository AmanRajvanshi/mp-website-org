

<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/datum/html/backend/auth-recover-pwd.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 05:50:52 GMT -->

@include('head')
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
    <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-md-5">
                  <div class="card p-5">
                     <div class="card-body">
                        <div class="auth-logo">
                           <img src="../assets/images/logo.png" class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                           <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal light-logo" alt="logo">
                        </div>
                        <h3 class="mb-3 text-center">Reset Password</h3>
                        <p class="text-center small text-secondary mb-3">You can reset your password here</p>
                        <form>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label class="text-secondary">Email</label>
                                    <input class="form-control" type="email" placeholder="Enter Email">
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
   </body>

   @include('script');
<!-- Mirrored from templates.iqonic.design/datum/html/backend/auth-recover-pwd.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 05:50:52 GMT -->
</html>