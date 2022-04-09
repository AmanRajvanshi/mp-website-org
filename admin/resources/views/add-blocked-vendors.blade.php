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
	  @include('sidebar');
	  @include('navbar');
    <div class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-4 mt-1">
            <h4 class="font-weight-bold">Add Blocked Vendors</h4>
              <hr>
							<div class="row">
									<div class="col-md-3 mb-3">
											<div class="card-body rounded bg-light">
													<div class="d-flex justify-content-center">
															<img src="assets/images/user/1.jpg" class="img-fluid" alt="profile">
													</div>
													<div class="d-flex justify-content-center mt-2 mb-3">
															<p class="mb-0 text-muted font-weight-bold">Upload Image</p>
                       			 <input type="file" accept="image/*" id="myFile" name="filename2">
													</div>
											</div>
									</div>
									<div class="col-md-9">
										<div class="form-group row">
											<label class="control-label col-sm-2 align-self-center" for="name">Name:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="name" placeholder="Enter Name">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-sm-2 align-self-center" for="business-name">Business's Name:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="business-name" placeholder="Enter Business's Name">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-sm-2 align-self-center" for="contact-number">Business Contact:</label>
											<div class="col-sm-10">
												<input type="number" class="form-control" id="contact-number" placeholder="Enter Business Contact Number">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-sm-2 align-self-center" for="business-email">Business Email:</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="business-email" placeholder="Enter Business Email">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-sm-2 align-self-center" for="business-location">Business Location:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="business-location" placeholder="Enter Business Location">
											</div>
										</div>
										<div class="form-group mb-0 float-right">
											<button type="submit" class="btn btn-primary mr-2">Submit</button>
											<button type="submit" class="btn bg-danger">Cancel</button>
										</div>
									</div>
							</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page end  -->
  <!-- Wrapper End-->
  @include('footer');
  @include('script');
</body>

</html>
