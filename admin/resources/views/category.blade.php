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
    <div class="content-page">
      <div class="container-fluid">
		        <div class="row justify-content-center">
					<span class="text-danger">{{Session::get('error')}}</span>
					<span class="text-success">{{Session::get('msg')}}</span>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card card-block card-stretch">
							<div class="card-body p-0">
								<div class="d-flex justify-content-between align-items-center p-3">
									<h5 class="font-weight-bold">Category</h5>
									@if($res[0]->add == 'yes')
                  <button class="btn btn-secondary btn-sm">
										<a href="{{url('create-category')}}" style="color:white;">
                                            <i class="fas fa-folder-plus" aria-hidden="true"></i>
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
                            Category Name
                          </th>
                          <th scope="col">
                            Category Icon
                          </th>
                          <th scope="col">
                            Link
                          </th>
                          <th scope="col">
                            Status
                          </th>
                          <th scope="col">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
						@php $a = 1; @endphp
                        @foreach ($data as $value)
                        <tr class="white-space-no-wrap">
                          <td class="pr-0 ">
                            {{$a++}}
                          </td>
                          <td class="">
                            <div class="active-project-1 d-flex align-items-center mt-0 ">
                              <div class="data-content">
								<span class="font-weight-bold">{{$value->category_name}}</span>
                              </div>
                            </div>
                          </td>
                          <td>
                            <img src="{{$value->link}}" height="50px" width="50px" alt="">
                          </td>
                          <td>
                            <a href="{{$value->link}}" target="_blank">Link</a>
                          </td>
                          <td>
                            {{$value->status}}
                          </td>
                          <td>
                            <div class="d-flex justify-content-end align-items-center">
                              @if($res[0]->edit == 'yes')
                              <button type="button" class="btn btn-info btn-sm mr-1"><a href="{{url('edit-category')}}/{{$value->id}}" style="color:white">Edit</a></button>
                              @endif
                              @if($res[0]->delete == 'yes')
                              <a type="button" href="{{url('delete-category')}}/{{$value->id}}" class="btn btn-danger btn-sm mr-1" onclick="return confirm ('Are you sure you want to delete?')">Delete</a>
                              @endif
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
    </div>
  </div>
  <!-- Page end  -->
  <!-- Wrapper End-->
  @include('footer')
  @include('script')
    <script>
      $(document).ready(function() {
      $('#responded').hide();
      })
      function showpending()
      {
      	$('#pending').show();
      	$('#responded').hide();
      }
      function showresponded()
      {
      	$('#pending').hide();
      	$('#responded').show();
      }
    </script>
</body>

</html>
