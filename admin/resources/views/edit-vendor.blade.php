<!doctype html>
<html lang="en">
<base href="../">
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
    <div class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-4 mt-1">
            <h4 class="font-weight-bold">Edit Vendors</h4>
              <hr>
			  <form class="form" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-3 mb-3">
						<div class="card-body rounded bg-light">
								<div class="d-flex justify-content-center">
									<img src="upload_image/{{$data -> profile_pic}}" id="output" class="img-fluid" alt="profile">
								</div>
								<div class="d-flex justify-content-center mt-2 mb-3">
									<label class="mb-0 text-muted font-weight-bold" for="myFile">Upload Image</label>
									<input type="file" class="d-none" onchange="loadFile(event)" id="myFile" name="file">
								</div>
						</div>
						<script>
							var loadFile = function(event) {
							  var output = document.getElementById('output');
							  output.src = URL.createObjectURL(event.target.files[0]);
							  output.onload = function() {
								URL.revokeObjectURL(output.src) // free memory
							  }
							};
						  </script>
					</div>
					<div class="col-md-9">
						<div class="form-group row">
							<label class="control-label col-sm-2 align-self-center" for="name">Name:</label>
							<div class="col-sm-10">
								<input type="hidden" name="pid" value="{{$data -> id}}">
								<input value="{{$data -> name}}" name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
								<span class="text-danger" id="name_error"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-sm-2 align-self-center" for="business-name">Business's Name:</label>
							<div class="col-sm-10">
								<input type="text" value="{{$data -> shop_name}}" class="form-control" id="business-name" name="business_name" placeholder="Enter Business's Name">
								<span class="text-danger" id="business_name_error"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-sm-2 align-self-center" for="contact-number">Business Contact:</label>
							<div class="col-sm-10">
								<input type="number" value="{{$data -> contact}}" class="form-control" id="contact-number" name="business_contact" placeholder="Enter Business Contact Number">
								<span class="text-danger" id="business_contact_error"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-sm-2 align-self-center" for="business-email">Business Email:</label>
							<div class="col-sm-10">
								<input type="email" value="{{$data -> email}}" class="form-control" id="business-email" name="business_email" placeholder="Enter Business Email">
								<span class="text-danger" id="business_email_error"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-sm-2 align-self-center" for="business-location">Business Location:</label>
							<div class="col-sm-10">
								<input type="text" value="{{$data -> city}}" class="form-control" id="business-location" name="business_location" placeholder="Enter Business Location">
								<span class="text-danger" id="business_location_error"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-sm-2 align-self-center" for="business-location">Business Status:</label>
							<div class="col-sm-10">
								<select class="form-control" name="status" id="status">
									<option value="">Select</option>
									<option value="Active" {{$data -> status == 'Active' ? 'selected' : ''}}>Active</option>
									<option value="Pending" {{$data -> status == 'Pending' ? 'selected' : ''}}>Pending</option>
									<option value="Blocked" {{$data -> status == 'Blocked' ? 'selected' : ''}}>Blocked</option>
								</select>
								<span class="text-danger field_error" id="status_error"></span>
							</div>
						</div>
						<div class="form-group mb-0 float-right">
							<button type="submit" class="btn btn-primary mr-2">Update</button>
							<button type="submit" class="btn bg-danger">Cancel</button>
						</div>
					</div>
				</div>
			  </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page end  -->
  <!-- Wrapper End-->
  @include('footer')
  @include('script')
  <script>
	$(document).ready(function(){
		$('.form').submit(function(e){
           e.preventDefault();
           $.ajax({
              url : '{{url('editvendor')}}',
			  data:new FormData(this),
			  method: 'POST',
			  dataType:'JSON',
			  cache:false,
			  contentType: false,
			  processData: false,
			  success : function(result) {
				//   alert(result.status);
				if (result.status == 'error') {
					if(result.error){
					$('#error_msg').html(result.error);
					}
					$.each(result.error,function(key,val){
					// console.log(key);
					// console.log(val);
					$('#'+key+'_error').html(val[0]);
					})
				}else if(result.status == 'success'){
					$('#kt_form')[0].reset();
					$('#success_msg').html(result.msg);
					setTimeout(function(){
						window.location.href = '/vendors'; 
					}, 1000);
				}
			  }
		   });
		});
	});
  </script>
</body>

</html>
