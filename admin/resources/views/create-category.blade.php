<!doctype html>
<html lang="en">
  
  @include('head')
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
              <h4 class="font-weight-bold">Add Category</h4>
            </div>
            <div class="col-lg-12">
              <div class="card">
              <form enctype="multipart/form-data" class="form">
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
                            <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">Category Name</label>
                            <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name">
                            <span class="text-danger" id="category_name_error"></span>
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
                      <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary">
                        Add Category
                        </button>
                        <br>
                       
                      </div>
                      <div class="row justify-content-center">
                         <div class="col-md-6">
                          <span id="error_msg" class="text-danger"></span>
                          <span id="success_msg" class="text-success"></span>
                         </div>
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
            url : "addCategory",
            method: 'POST',
            data: new FormData(this),
            dataType : 'json',
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
                $('.form')[0].reset();
                // alert(result.msg);
                $('#success_msg').html(result.success);
                window.location.href="category";
              }
            }
          });
        });
       
      });
    </script>
  </body>
</html>