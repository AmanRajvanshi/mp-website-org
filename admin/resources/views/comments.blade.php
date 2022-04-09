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
            <h4 class="font-weight-bold">Comments</h4>
						<div class="container-fluid">
							<div class="list-group" style="margin:10px;">
								<div class="list-group-item list-group-item-action" style="border-bottom:1px dotted #eeeeee">
									<div class="d-flex w-100 justify-content-between">
										<div class="active-project-1 d-flex align-items-center" style="margin-bottom:10px">
											<div class="h-avatar is-medium">
												<img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
											</div>
											<div class="data-content">
												<div>
													<span class="font-weight-bold"><a href="view-customer.php">Christian Bale</a></span>
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
													<span class="font-weight-bold"><a href="view-customer.php">Christian Bale</a></span>
												</div>
											</div>
										</div>
										<small>3 days ago</small>
									</div>
									<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
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