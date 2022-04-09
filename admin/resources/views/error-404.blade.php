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
    @include('sidebar')
    @include('navbar')
		<div class="container">
			<div class="row no-gutters height-self-center">
				<div class="col-sm-12 text-center align-self-center">
					<div class="iq-error position-relative">
						<img src="assets/images/error/Datum_404.png" class="img-fluid iq-error-img iq-error-img-dark mx-auto"
							alt="">
						<img src="assets/images/error/Datum_404.png" class="img-fluid iq-error-img mb-0" alt="">
						<h2 class="mb-0">Oops! This Page is Not Found.</h2>
						<p>The requested page dose not exist.</p>
						<a class="btn btn-primary d-inline-flex align-items-center mt-3" href="index.php"><i
								class="ri-home-4-line mr-2"></i>Back to Home</a>
					</div>
				</div>
			</div>
		</div>
  </div>
  <!-- Wrapper End-->
  @include('navbar')
  @include('script')
</body>

</html>
