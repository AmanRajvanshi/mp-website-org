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
  <form class="row g-3 date-icon-set-modal" id="form">
    @csrf
  <div class="wrapper">
    @include('sidebar')
    @include('navbar')
    
    <div class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-4 mt-1">
            <h4 class="font-weight-bold">Edit User</h4>
          </div>
          <div class="col-lg-12">
           
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <div class="card-body rounded bg-light">
                      <div class="d-flex justify-content-center">
                        <input type="hidden" name="pid" value="{{$data->id}}">
                        <img src="{{url('upload_image')}}/{{$data->profile_pic}}" id="output" class="img-fluid" alt="profile">
                        
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
                        <input type="text" value="{{$data->name}}" name="name" class="form-control" id="Text1" placeholder="Enter Full Name">
                        <span class="field_error text-danger" id="name_error"></span>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label font-weight-bold text-muted text-uppercase">Gender</label><br>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="gender" id="male" value="male" class="custom-control-input" 
                            {{$data->gender == 'male' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="male"> Male </label>
                          </div>
                        </div>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="gender" id="female" value="female" class="custom-control-input" {{$data->gender == 'female' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="female"> Female </label>
                          </div>
                        </div>
                        <div class="form-check form-check-inline mt-2">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"name="gender" id="other" value="other" class="custom-control-input" 
                            {{$data->gender == 'other' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="other"> Other </label>
                          </div>
                        </div>
                        <span class="field_error text-danger" id="gender_error"></span>
                      </div>
                      <div class="col-md-6 mb-3 position-relative">
                        <label for="Text2" class="form-label font-weight-bold text-muted text-uppercase">Birth Day</label>
                        <input type="text" class="form-control" id="Text2" name="birthday" placeholder="Enter Birth Day" value="{{$data->dob}}">
                        <span class="field_error text-danger" id="birthday_error"></span>
                        <span class="search-link">
                          <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                        </span>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="Text4" class="form-label font-weight-bold text-muted text-uppercase">Email</label>
                        <input type="email" name="email" value="{{$data->email}}" class="form-control" id="Text4" placeholder="Enter Email">
                        <span class="field_error text-danger" id="email_error"></span>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="Text5" class="form-label font-weight-bold text-muted text-uppercase">Phone</label>
                        <input type="number" name="contact" value="{{$data->contact}}" class="form-control" id="Text5" placeholder="Enter Phone">
                        <span class="field_error text-danger" id="contact_error"></span>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="country" class="form-label font-weight-bold text-muted text-uppercase">Country</label>
                        <select id="country" name="country" class="form-select form-control choicesjs">
                          <option class="">Select Country</option>
                          @foreach ($country as $cun)
                            @if ($data->country == $cun->id)
                               <option value="{{$cun->id}}" selected>{{$cun->name}}</option>
                            @else
                               <option value="{{$cun->id}}">{{$cun->name}}</option>
                            @endif
                          @endforeach
                        </select>
                        <span class="field_error text-danger" id="country_error"></span>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="state" class="form-label font-weight-bold text-muted text-uppercase">State/Region</label>
                        <select id="state" name="state" class="form-select form-control">
                          <option class="">Select State/Region</option>
                          @foreach ($state as $st)
                             @if($data->state == $st->id)
                             <option value="{{$st->id}}" selected>{{$st->name}}</option>
                             @else
                             <option value="{{$st->id}}">{{$st->name}}</option>
                             @endif
                          @endforeach
                        </select>
                        <span class="field_error text-danger" id="state_error"></span>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="Text7" class="form-label font-weight-bold text-muted text-uppercase">Zipcode</label>
                        <input type="text" name="pincode" class="form-control" value="{{$data->pincode}}" placeholder="Enter Zipcode">
                        <span class="field_error text-danger" id="pincode_error"></span>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="Text6" class="form-label font-weight-bold text-muted text-uppercase">Address</label>
                        <input type="text" name="address" value="{{$data->address}}" class="form-control" id="Text6" placeholder="Enter Address">
                        <span class="field_error text-danger" id="address_error"></span>
                      </div>
                      {{-- <div class="col-md-12 mb-3">
                        <label for="Text9" class="form-label font-weight-bold text-muted text-uppercase">Bio</label>
                        <textarea class="form-control" value="{{$data->bio}}" id="Text9" rows="2" placeholder="Enter Bio"></textarea>
                      </div> --}}
                      <div class="col-md-12 mb-3">
                        <label class="form-label font-weight-bold text-muted text-uppercase mb-3">Notification Type</label><br>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" name="notification[]" value="email" class="custom-control-input m-0" id="inlineCheckbox1"
                            @if($notification)
                              @if(in_array("email",$notification))
                               checked
                              @endif
                            @endif 
                            >
                            <label class="custom-control-label" for="inlineCheckbox1">Email</label>
                          </div>
                        </div>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" name="notification[]" value="sms" class="custom-control-input m-0" id="inlineCheckbox2" 
                            @if($notification)
                              @if(in_array("sms",$notification))
                                 checked
                              @endif
                            @endif>
                            <label class="custom-control-label" for="inlineCheckbox2">SMS</label>
                          </div>
                        </div>
                        <div class="form-check form-check-inline">
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" name="notification[]" value="phone" class="custom-control-input m-0" id="inlineCheckbox3" 
                            @if($notification)
                              @if(in_array("phone",$notification))
                              checked
                              @endif
                            @endif>
                            <label class="custom-control-label" for="inlineCheckbox3">Phone</label>
                          </div>
                        </div>
                        <span class="text-danger" id="notification_error"></span>
                      </div>
                    <div class="d-flex justify-content-end mt-3">
                      <button type="submit" class="btn btn-primary">
                       Update User
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
 
  </div>
</form>
  <!-- Page end  -->
  <!-- Wrapper End-->
  @include('footer')
  @include('script')
  <script>
    $(document).ready(function() {
      $('#form').submit(function(e) {
          e.preventDefault();
          $.ajax({
            url : "{{url('updateUser')}}",
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
                $('#form')[0].reset();
                alert(result.msg);
                $('#success_msg').html(result.msg);
                window.location.href="{{url('users')}}";
              }
            }
          });
        });
      $('#country').change(function() {
        var id = $('#country').val();
        $.ajax({
          url: '{{url('fetchcity')}}',
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
