<!doctype html>
<html lang="en">
  
  @include('head')
  <script type="text/javascript">
    function initGeolocation()
    {
       if( navigator.geolocation )
       {
          // Call getCurrentPosition with success and failure callbacks
          navigator.geolocation.getCurrentPosition( success, fail );
       }
       else
       {
          alert("Sorry, your browser does not support geolocation services.");
       }
    }

    function success(position)
    {

        document.getElementById('long').value = position.coords.longitude;
        document.getElementById('lat').value = position.coords.latitude
    }

    function fail()
    {
       // Could not obtain location
    }

  </script> 
  <body onLoad="initGeolocation();">
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
      @include('navbar')
      <div class="content-page">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 mb-4 mt-1">
              <h4 class="font-weight-bold">Add User</h4>
            </div>
            <div class="col-lg-12">
              <div class="card">
              <form enctype="multipart/form-data" class="form">
                <input type="hidden" name="longitude" id="long">
                <input type="hidden" name="latitude" id="lat">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3 mb-3">
											<div class="card-body rounded bg-light">
													<div class="d-flex justify-content-center">
															<img src="assets/images/user/1.jpg" id="output" class="img-fluid" alt="profile">
													</div>
													<div class="d-flex justify-content-center mt-2 mb-3">
															<label for="myFile" class="mb-0 text-muted font-weight-bold">Upload Image</label>
														  <input type="file" onchange="loadFile(event)" class="d-none" id="myFile" name="file">
                              <span class="text-danger" id="file_error"></span>
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
                    </div>
                    <div class="col-md-9">
                        <div class="col-md-6 mb-3">
                          <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">Full Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
                          <span class="text-danger" id="name_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label font-weight-bold text-muted text-uppercase">Gender</label><br>
                          <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="male" name="gender" value="male" class="custom-control-input">
                              <label class="custom-control-label" for="male">Male</label>
                            </div>
                          </div>
                          <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="female" name="gender" value="female" class="custom-control-input">
                              <label class="custom-control-label" for="female">Female</label>
                            </div>
                          </div>
                          <div class="form-check form-check-inline mt-2">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="other" name="gender" value="other" class="custom-control-input">
                              <label class="custom-control-label" for="other">Other</label>
                            </div>
                          </div>
                          <span class="text-danger" id="gender_error"></span>
                        </div>
                        <div class="col-md-6 mb-3 position-relative">
                          <label for="Text2" class="form-label font-weight-bold text-muted text-uppercase">Birth Day</label>
                          <input type="date" class="form-control" id="Text2" name="birthday" placeholder="Enter Birth Day" autocomplete="off">
                          <span class="text-danger" id="birthday_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="Text4" class="form-label font-weight-bold text-muted text-uppercase">Email</label>
                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                          <span class="text-danger" id="email_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="Text5" class="form-label font-weight-bold text-muted text-uppercase">Phone</label>
                          <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
                          <span class="text-danger" id="phone_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="inputcountry" class="form-label font-weight-bold text-muted text-uppercase">Country</label>
                          <select id="country" name="country" class="form-select form-control choicesjs" >
                            <option value="">Select Country</option>
                            @foreach ($country as $cun)
                            <option value="{{$cun->id}}">{{$cun->name}}</option>
                            @endforeach
                          </select>
                          <span class="text-danger" id="country_error"></span>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                          <span id="co" class="text-danger"></span>
                          <label for="inputState" class="form-label font-weight-bold text-muted text-uppercase">State/Region</label>
                          <select id="state" name="state" class="form-select form-control">
                            <option value="">Select State/Region</option>
                          </select>
                          <span class="text-danger" id="state_error"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="Text7" class="form-label font-weight-bold text-muted text-uppercase">Zipcode</label>
                          <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter Zipcode">
                          <span class="text-danger" id="zipcode_error"></span>
                        </div>
                        <div class="col-md-12 mb-3">
                          <label for="Text6" class="form-label font-weight-bold text-muted text-uppercase">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                          <span class="text-danger" id="address_error"></span>
                        </div>
                        <div class="col-md-12 mb-3">
                          <label for="status" class="form-label font-weight-bold text-muted text-uppercase">Status</label>
                          <select id="status" name="status" class="form-select form-control choicesjs" >
                            <option value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                          <span class="text-danger" id="status_error"></span>
                        </div>
                        {{-- <div class="col-md-12 mb-3">
                          <label for="Text9" class="form-label font-weight-bold text-muted text-uppercase">Bio</label>
                          <textarea class="form-control" id="bio" name="bio" rows="2" placeholder="Enter Bio"></textarea>
                          <span class="text-danger" id="bio_error"></span>
                        </div> --}}
                        <div class="col-md-12 mb-3">
                          <label class="form-label font-weight-bold text-muted text-uppercase mb-3">Notification Type</label><br>
                          <div class="form-check form-check-inline">
                            <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" name="notification[]" value="email" class="custom-control-input m-0" id="inlineCheckbox1">
                              <label class="custom-control-label" for="inlineCheckbox1">Email</label>
                            </div>
                          </div>
                          <div class="form-check form-check-inline">
                            <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" name="notification[]" value="sms" class="custom-control-input m-0" id="inlineCheckbox2">
                              <label class="custom-control-label" for="inlineCheckbox2">SMS</label>
                            </div>
                          </div>
                          <div class="form-check form-check-inline">
                            <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" name="notification[]" value="phone" class="custom-control-input m-0" id="inlineCheckbox3">
                              <label class="custom-control-label" for="inlineCheckbox3">Phone</label>
                            </div>
                          </div>
                          <span class="text-danger" id="notification_error"></span>
                        </div>
                      <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary">
                        Add User
                        </button>
                        <br>
                        <span id="error_msg" class="text-danger"></span>
                        <span id="success_msg" class="text-success"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </div>
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
      $(document).ready(function() {
        $('.form').submit(function(e) {
          e.preventDefault();
          $.ajax({
            url : "addUser",
            method: 'POST',
            data: new FormData(this),
            dataType : 'json',
            cache:false,
            contentType: false,
            processData: false,
            success: function(result){
              if (result.status == 'error') {
                $('#error_msg').html(result.error);
                $.each(result.error,function(key,val){
                  // console.log(key);
                  // console.log(val);
                  $('#'+key+'_error').html(val[0]);
                })
              }else if(result.status == 'success'){
                $('.slider')[0].reset();
                alert(result.msg);
                $('#success_msg').html(result.msg);
                window.location.href="add-setup";
              }
            }
          });
        });
        $('#country').change(function() {
           var id = $('#country').val();
           $.ajax({
             url: 'fetchcity',
             method: 'GET',
             dataType: 'json',
             data: {id: id},
             success: function(result){
              $('#state').html('');
               $.each(result, function(key, value){
                  $('#state').append('<option value="'+value.id+'">'+value.name+'</option>');
               });
             }
           });
        });
      });
    </script>
  </body>
</html>