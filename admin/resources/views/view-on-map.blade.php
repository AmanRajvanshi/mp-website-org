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
            <h4 class="font-weight-bold">Map Location</h4>
			<hr>
            <div class="row" style="padding:10px">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13783.38174793749!2d77.98643523259456!3d30.269984808811213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092b9518933719%3A0xc25309614b33ceb1!2sBharu%20Wala%20Grant%2C%20Uttarakhand%20248002!5e0!3m2!1sen!2sin!4v1629276578804!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
</body>

</html>
