<!doctype html>
<html lang="en">
@include('head');
<script src="https://use.fontawesome.com/ee1148104a.js"></script>
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
            <form action="{{url('add-setup')}}">
            <h4 class="font-weight-bold">Add Setup</h4>
            </form>
            <div class="row" style="padding:10px 0">
              <div class="d-inline-block w-100">
                <a type="button" class="btn btn-outline-primary mt-2" href="#slider">Slider</a>
                <a type="button" class="btn btn-outline-primary mt-2" href="#sponsorposition">Sponsor Position</a>
                <a type="button" class="btn btn-outline-primary mt-2" href="#categorybanner">Category Banner</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="slider">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
              <div class="card-body p-0">
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="font-weight-bold">Slider</h5>
                  @if($res[0]->add == 'yes')
                  <button class="btn btn-secondary btn-sm">
                    <a style="color:white" data-toggle="modal" data-target="#addslider">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                      </svg>
                      Add
                    </a>
                  </button>
                  @endif
                </div>
                <div class="table-responsive">
                  <table class="slidertable table mb-0 table-bordered">
                    <thead class="table-color-heading">
                      <tr class="">
                        <th scope="col">
                          S No.
                        </th>
                        <th scope="col">
                          Image
                        </th>
                        <th scope="col">
                          Link
                        </th>
                        <th scope="col">
                          Sort_Order
                        </th>
                        <th scope="col">
                          Expiry
                        </th>
                        <th scope="col">
                          Status
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $a = 1; @endphp
                    @foreach ($slider as $value)
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          {{$a++}}
                        </td>
                        <td class="" style="display:grid;place-items:center">
                          <div class="iq-avatar">
                            <img class="avatar-90 rounded" src="upload/{{$value->image}}" alt="#" data-original-title="" title="">
                          </div>
                        </td>
                        <td>
                          <a href="">{{$value->link}}</a>
                        </td>
                        <td>
                          {{$value->sort_order}}
                        </td>
                        <td>
                          {{$value->expiry}}
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              @if($res[0]->edit == 'yes')
                              <input type="checkbox" name="sliderstatus" class="custom-control-input bg-waring sliderstatus" 
                              id="{{$value->id}}" {{$value -> status == 'Active' ? 'checked' : '' }}>
                              @endif
                              <label class="custom-control-label" for="{{$value->id}}">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="sponsorposition">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
              <div class="card-body p-0">
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="font-weight-bold">Sponsor Position</h5>
                  @if($res[0]->add == 'yes')
                  <button class="btn btn-secondary btn-sm">
                    <a style="color:white" data-toggle="modal" data-target="#addsponserposition">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                      </svg>
                      Add
                    </a>
                  </button>
                  @endif
                </div>
                <div class="table-responsive">
                  <table class="table mb-0 sponsortable">
                    <thead class="table-color-heading">
                      <tr class="">
                        <th scope="col">
                          S No.
                        </th>
                        <th scope="col">
                          Seller_Name
                        </th>
                        <th scope="col">
                          Category
                        </th>
                        <th scope="col">
                          Sort_Order
                        </th>
                        <th scope="col">
                          Expiry
                        </th>
                        <th scope="col">
                          Status
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $a = 1; @endphp
                      @foreach ($sponsor_position as $sponsor)
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          {{$a++}}
                        </td>
                        <td class="">
                          <div class="active-project-1 d-flex align-items-center mt-0 ">
                            <div class="h-avatar is-medium">
                              <img class="avatar rounded-circle" alt="user-icon" src="upload_image/{{$sponsor->image}}">
                            </div>
                            <div class="data-content">
                              <div>
                                <span class="font-weight-bold">{{$sponsor->seller_name}}</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          {{$sponsor->category}}
                        </td>
                        <td>
                          {{$sponsor->sort_order}}
                        </td>
                        <td>
                          {{$sponsor->expiry}}
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              @if($res[0]->edit == 'yes')
                              <input type="checkbox" name="sponsorstatus" class="custom-control-input bg-waring sponsorstatus" id="sid-{{$sponsor->id}}" 
                              {{$sponsor -> status == 'Active' ? 'checked' : '' }}>
                              @endif
                              <label class="custom-control-label" for="sid-{{$sponsor->id}}">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="categorybanner">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
              <div class="card-body p-0">
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="font-weight-bold">Category Banner</h5>
                  @if($res[0]->add == 'yes')
                  <button class="btn btn-secondary btn-sm">
                    <a data-toggle="modal" data-target="#addbanner" style="color:white">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                      </svg>
                      Add
                    </a>
                  </button>
                  @endif
                </div>
                <div class="table-responsive">
                  <table class="table data-table mb-0 table-bordered table-striped ">
                    <thead class="table-color-heading">
                      <tr class="">
                        <th scope="col">
                          S No.
                        </th>
                        <th scope="col">
                          Image
                        </th>
                        <th scope="col">
                          Link
                        </th>
                        <th scope="col">
                          Sort_Order
                        </th>
                        <th scope="col">
                          Expiry
                        </th>
                        <th scope="col">
                          Status
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $c = 1; @endphp
                      @foreach ($banner as $banner_value)
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          {{$c++}}
                        </td>
                        <td class="" style="display:grid;place-items:center">
                          <div class="iq-avatar">
                            <img class="avatar-90 rounded" src="upload_image/{{$banner_value->image}}" alt="#" data-original-title="" title="">
                          </div>
                        </td>
                        <td>
                          <a href="">{{$banner_value->link}}</a>
                        </td>
                        <td>
                          {{$banner_value->sort_order}}
                        </td>
                        <td>
                          {{$banner_value->expiry}}
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                              @if($res[0]->edit == 'yes')
                              <input type="checkbox" name="bannerstatus" class="custom-control-input bg-waring bannerstatus" id="bid-{{$banner_value->id}}" 
                              {{$banner_value -> status == 'Active' ? 'checked' : '' }}>
                              @endif
                              <label class="custom-control-label" for="bid-{{$banner_value->id}}">Active/Inactive</label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!--Add Modal -->
       <div class="modal fade" id="addslider" tabindex="-1" role="dialog" aria-labelledby="addsliderTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addmodalTitle">Add Slider</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="slider" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <div class="card-body rounded bg-light">
                      <div class="d-flex justify-content-center">
                          <img src="assets/images/user/1.jpg" id="output" class="img-fluid" alt="profile">
                      </div>
                      <div class="d-flex justify-content-center mt-2 mb-3">
                      <label for="myFile" class="mb-0 text-muted font-weight-bold">Upload Image</label>
                      <input type="file" id="myFile" class="d-none" onchange="loadFile(event)" name="file">
                      <span class="text-danger field_error" id="file_error"></span>
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
                      <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center" for="name">Link:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="link" name="link" placeholder="Enter link">
                          <span class="text-danger field_error" id="link_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center" for="business-name">Sort Order:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="sort_order" id="sort_order" placeholder="Enter Sort Order">
                          <span class="text-danger field_error" id="sort_order_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center" for="contact-number">Expiry Date:</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="expiry_date" id="expiry_date">
                          <span class="text-danger field_error" id="expiry_date_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center" for="business-email">Status:</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="status">
                            <option value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                          <span class="text-danger field_error" id="status_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                          <input type="submit" value="Submit" class="btn btn-success">
                          <span class="text-danger" id="error_msg"></span>
                          <span class="text-success" id="success_msg"></span>
                      </div>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--Edit Modal -->
      <!--Add Modal -->
      <div class="modal fade" id="addsponserposition" tabindex="-1" role="dialog" aria-labelledby="addsponsorTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addmodalTitle">Add Sponsor Position</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="sponsor_position" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <div class="card-body rounded bg-light">
                      <div class="d-flex justify-content-center">
                          <img src="assets/images/user/1.jpg" id="outputs" class="img-fluid" alt="profile">
                      </div>
                      <div class="d-flex justify-content-center mt-2 mb-3">
                      <label for="myFiles" class="mb-0 text-muted font-weight-bold">Upload Image</label>
                      <input type="file" id="myFiles" class="d-none" onchange="loadFile(event)" name="files">
                      <span class="text-danger field_error" id="files_error"></span>
                      </div>
                      <script>
                        var loadFile = function(event) {
                          var outputs = document.getElementById('outputs');
                          outputs.src = URL.createObjectURL(event.target.files[0]);
                          outputs.onload = function() {
                            URL.revokeObjectURL(outputs.src) // free memory
                          }
                        };
                      </script>
                    </div>
                  </div>
                    <div class="col-md-9">
                      <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center" for="name">Seller Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="seller_name" name="seller_name" placeholder="Enter Seller Name">
                          <span class="text-danger field_error" id="seller_name_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center" for="name">Category:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category">
                          <span class="text-danger field_error" id="category_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center" for="business-name">Sort Order:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="sort_orders" id="sort_orders" placeholder="Enter Sort Order">
                          <span class="text-danger field_error" id="sort_orders_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center" for="contact-number">Expiry Date:</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="expiry_dates" id="expiry_dates">
                          <span class="text-danger field_error" id="expiry_dates_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-sm-2 align-self-center" for="business-email">Status:</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="statuss">
                            <option value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                          <span class="text-danger field_error" id="statuss_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                          <input type="submit" value="Submit" class="btn btn-success">
                          <span class="text-danger" id="error_msgs"></span>
                          <span class="text-success" id="success_msgs"></span>
                      </div>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--Edit Modal -->
     <!--Add Modal -->
     <div class="modal fade" id="addbanner" tabindex="-1" role="dialog" aria-labelledby="addBannerTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addmodalTitle">Add Banner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="banner" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col-md-3 mb-3">
                  <div class="card-body rounded bg-light">
                    <div class="d-flex justify-content-center">
                        <img src="assets/images/user/1.jpg" id="outputbanner" class="img-fluid" alt="profile">
                    </div>
                    <div class="d-flex justify-content-center mt-2 mb-3">
                    <label for="myFilebanner" class="mb-0 text-muted font-weight-bold">Upload Image</label>
                    <input type="file" id="myFilebanner" class="d-none" onchange="loadFile(event)" name="filebanner">
                    <span class="text-danger field_error" id="filebanner_error"></span>
                    </div>
                    <script>
                      var loadFile = function(event) {
                        var outputbanner = document.getElementById('outputbanner');
                        outputbanner.src = URL.createObjectURL(event.target.files[0]);
                        outputbanner.onload = function() {
                          URL.revokeObjectURL(outputbanner.src) // free memory
                        }
                      };
                    </script>
                  </div>
                </div>
                  <div class="col-md-9">
                    <div class="form-group row">
                      <label class="control-label col-sm-2 align-self-center" for="name">Link:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="linkbanner" name="linkbanner" placeholder="Enter link">
                        <span class="text-danger field_error" id="linkbanner_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-2 align-self-center" for="business-name">Sort Order:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="sort_order_banner" id="sort_order_banner" placeholder="Enter Sort Order">
                        <span class="text-danger field_error" id="sort_order_banner_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-2 align-self-center" for="contact-number">Expiry Date:</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" name="expiry_date_banner" id="expiry_date_banner">
                        <span class="text-danger field_error" id="expiry_date_banner_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-sm-2 align-self-center" for="business-email">Status:</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="statusbanner">
                          <option value="">Select Status</option>
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>
                        </select>
                        <span class="text-danger field_error" id="statusbanner_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                        <input type="submit" value="Submit" class="btn btn-success">
                        <span class="text-danger" id="errorbanner_msg"></span>
                        <span class="text-success" id="successbanner_msg"></span>
                    </div>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--Edit Modal -->
    </div>
    <!-- Page end  -->
    <!-- Wrapper End-->
    @include('footer');
    @include('script');
    <script>
      $(document).ready(function() {
        $('.slider').submit(function(e){
          e.preventDefault();
          $('.field_error').html('');
          $.ajax({
            url:'addSlider',
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            cache:false,
            contentType: false,
            processData: false,
            success: function(result){
              // console.log(result);
              if (result.status == 'error') {
                $('#error_msg').html(result.error);
                $.each(result.error,function(key,val){
                  // console.log(key);
                  // console.log(val);
                  $('#'+key+'_error').html(val[0]);
                })
              }else if(result.status == 'success'){
                $('.slider')[0].reset();
                $('#success_msg').html(result.msg);
                window.location.href="add-setup";
              }
            }
          });
        });
        $('.sponsor_position').submit(function(ee){
          ee.preventDefault();
          $('.field_error').html('');
          $.ajax({
            url:'addSponsorPosition',
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            cache:false,
            contentType: false,
            processData: false,
            success: function(result){
              // console.log(result);
              if (result.status == 'error') {
                $('#error_msgs').html(result.error);
                $.each(result.error,function(key,val){
                  // console.log(key);
                  // console.log(val);
                  $('#'+key+'_error').html(val[0]);
                })
              }else if(result.status == 'success'){
                $('.sponsor_position')[0].reset();
                $('#success_msgs').html(result.msg);
                window.location.href="add-setup";
              }
            }
          });
        });
        $('.banner').submit(function(eee){
          eee.preventDefault();
          $('.field_error').html('');
          $.ajax({
            url:'addBanner',
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            cache:false,
            contentType: false,
            processData: false,
            success: function(result){
              // console.log(result);
              if (result.status == 'error') {
                $('#errorbanner_msg').html(result.error);
                $.each(result.error,function(key,val){
                  // console.log(key);
                  // console.log(val);
                  $('#'+key+'_error').html(val[0]);
                })
              }else if(result.status == 'success'){
                $('.banner')[0].reset();
                $('#successbanner_msg').html(result.msg);
                window.location.href="add-setup";
              }
            }
          });
        });
        $('.sliderstatus').change(function(){
           var id = $(this).attr('id');
           $.ajax({
            url:'changesliderstatus',
            method:"POST",
            data:{id:id},
            dataType:'JSON',
            headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			      },
            success: function(result){
              
            }
          });
        });
        $('.sponsorstatus').change(function(){
           var id = $(this).attr('id');
          //  alert(id);
           $.ajax({
            url:'changesponsorstatus',
            method:"POST",
            data:{id:id},
            dataType:'JSON',
            headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			      },
            success: function(result){
              
            }
          });
        });
        $('.bannerstatus').change(function(){
           var id = $(this).attr('id');
          //  alert(id);
           $.ajax({
            url:'changebannerstatus',
            method:"POST",
            data:{id:id},
            dataType:'JSON',
            headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			      },
            success: function(result){
              
            }
          });
        });
      });
    </script>
    	<script>
        $(function () {
          var table = $('.slidertable').DataTable({});
          var table = $('.sponsortable').DataTable({});
        });
      </script>
</body>

</html>
