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
        <div class="row">
          <div class="col-md-12 mb-4 mt-1">
            <h4 class="font-weight-bold">Feeds</h4>
            <div class="row" style="padding:10px 0">
              <div class="d-inline-block w-100">
                <button type="button" class="btn btn-outline-primary mt-2" onclick="showfeeds()">Feeds</button>
                <button type="button" class="btn btn-outline-danger mt-2" onclick="showtable()">Reported</button>
              </div>
            </div>
						<div class="container-fluid">
							<div class="row" style="padding:5px 0" id="feeds">
								<!-- feed -->
								<div class="col-sm-12 col-md-3 col-lg-3"></div>
							@foreach ($data as $value)
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="card" style="padding:10px">
										<h4 class="card-title">{{$value->feed_title}}</h4>
										<p class="card-text">{{$value->feed_description}}</p>
										<img src="assets/images/page-img/card.jpg" class="card-img-top" alt="#" style="height:100%;">
										<div class="card-body">
											<a href="#" class="btn btn-success float-left btn-sm" style="margin:5px">Likes 
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:5px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
												</svg> : 40
											</a>
											<a href="comments.php" class="btn btn-primary float-left btn-sm" style="margin:5px" target="_blank">Comments
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
												</svg>
											</a>
											<a href="#" class="btn btn-danger float-right btn-sm" style="margin:5px" onclick="return confirm('Are you sure you want to Block this feed?')">Block
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
												</svg>
											</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3"></div>
								<!-- comment -->
								<div class="list-group" style="margin:10px; width:100%;">
									<div class="list-group-item list-group-item-action" style="border-bottom:1px dotted #eeeeee">
										<div class="d-flex w-100 justify-content-between">
											<div class="active-project-1 d-flex align-items-center" style="margin-bottom:10px">
												<div class="h-avatar is-medium">
													<img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
												</div>
												<div class="data-content">
													<div>
														<span class="font-weight-bold"><a href="{{url('view-customer')}}" target="blank">Christian Bale</a></span>
													</div>
												</div>
											</div>
											<small>3 days ago</small>
										</div>
										<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</div>
									<div class="list-group-item list-group-item-action" style="border-bottom:1px dotted #eeeeee">
										<div class="d-flex w-100 justify-content-between">
											<div class="active-project-1 d-flex align-items-center" style="margin-bottom:10px">
												<div class="h-avatar is-medium">
													<img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
												</div>
												<div class="data-content">
													<div>
														<span class="font-weight-bold"><a href="{{url('view-customer')}}" target="blank">Christian Bale</a></span>
													</div>
												</div>
											</div>
											<small>3 days ago</small>
										</div>
										<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</div>
								</div>
							@endforeach
							</div>
							<div class="row" style="padding:5px 0;" id="table">
								<div class="col-sm-12">
									<div class="card">
									<div class="card-header d-flex justify-content-between">
										<div class="header-title">
											<h4 class="card-title">Reported Feeds</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
										<table id="datatable-1" class="table data-table table-striped table-bordered">
											<thead>
											<tr>
												<th>SNo.</th>
												<th>Feed_ID</th>
												<th>Vendor</th>
												<th>Post</th>
												<th>Comment</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>1</td>
												<td>#12121</td>
												<td>Lorem, ipsum.</td>
												<td></td>
												<td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, modi.</td>
												<td>
													<button type="button" class="btn btn-primary btn-sm mt-2"><a href="{{url('single-reported-feeds')}}" style="color:white" target="_blank">View</a></button>
												</td>
											</tr>
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
      </div>
    </div>
  </div>
  <!-- Page end  -->
  <!-- Wrapper End-->
  @include('footer')
  @include('script')
  <script>
	  $(document).ready(function() {
		$('#table').hide();
	  })
	  function showfeeds()
		{
			$('#feeds').show();
			$('#table').hide();
		}
	  function showtable()
		{ 
			$('#feeds').hide();
			$('#table').show();
		}
  </script>
</body>

</html>