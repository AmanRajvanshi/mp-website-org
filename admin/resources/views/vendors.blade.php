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
            <h4 class="font-weight-bold">Vendors</h4>
            <span class="text-danger">{{Session::get('error')}}</span>
            <span class="text-success">{{Session::get('msg')}}</span>
            <div class="row" style="padding:10px 0">
              <div class="d-inline-block w-100">
                <button type="button" class="btn btn-outline-primary mt-2" onclick="showpending()">Pending Verifications</button>
                <button type="button" class="btn btn-outline-primary mt-2" onclick="showactive()">Active Vendors</button>
                <button type="button" class="btn btn-outline-primary mt-2" onclick="showblocked()">Blocked Vendors</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="pending">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
              <div class="card-body p-0">
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="font-weight-bold">Pending Verifications</h5>
                  @if($res[0]->add == 'yes')
                  <button class="btn btn-secondary btn-sm">
                    <a href="{{url('add-vendor')}}" style="color:white">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                      </svg>
                      Add
                    </a>
                  </button>
                  @endif
                </div>
                <div class="table-responsive">
                  <table class="table data-table mb-0 table-bordered yajra table-striped ">
                    <thead class="table-color-heading">
                      <tr class="">
                        <th scope="col">
                          S No.
                        </th>
                        <th scope="col">
                          Name
                        </th>
                        <th scope="col">
                          Contact
                        </th>
                        <th scope="col">
                          Email
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
                            <div class="h-avatar is-medium">
                              <img class="avatar rounded-circle" alt="user-icon" src="upload_image/{{$value->profile_pic}}">
                            </div>
                            <div class="data-content">
                              <div>
                                <span class="font-weight-bold">{{$value->name}}</span>
                              </div>
                              <p class="m-0 text-secondary small">
                                {{$value->shop_name}}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td>
                          {{$value->contact}}
                        </td>
                        <td>
                          {{$value->email}}
                        </td>
                        <td>
                          {{$value->status}}
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            @if($res[0]->view == 'yes')
                            <button type="button" class="btn btn-primary btn-sm mr-1"><a href="{{url('view-content')}}/{{$value->id}}" style="color:white;" target="_blank">View Content</a></button>
                            @endif
                            @if($res[0]->view == 'yes')
                            <button type="button" class="btn btn-warning btn-sm mr-1"><a href="{{url('view-on-map')}}/{{$value->id}}" style="color:white;" target="_blank">View On Map</a></button>
                            @endif
                            @if($res[0]->edit == 'yes')
                            <button type="button" class="btn btn-info btn-sm mr-1"><a href="{{url('edit-vendors')}}/{{$value->id}}" style="color:white" target="_blank">Edit</a></button>
                            @endif
                            @if($res[0]->delete == 'yes')
                            <a type="button" href="{{url('deletevendor')}}/{{$value->id}}" class="btn btn-danger btn-sm mr-1" onclick="return confirm ('Are You sure you want to delete?')">Delete</a>
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
        <div class="row" id="active">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
              <div class="card-body p-0">
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="font-weight-bold">Active Vendors</h5>
                  <button class="btn btn-secondary btn-sm">
                    <a href="{{url('add-active-vendors')}}" style="color:white">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                      </svg>
                      Add
                    </a>
                  </button>
                </div>
                <div class="table-responsive">
                  <table class="table data-table mb-0 table-bordered table-striped ">
                    <thead class="table-color-heading">
                      <tr class="">
                        <th scope="col">
                          S No.
                        </th>
                        <th scope="col">
                          Name
                        </th>
                        <th scope="col">
                          Contact
                        </th>
                        <th scope="col">
                          Email
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
                      @php $b = 1; @endphp
                      @foreach ($active as $value)
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          {{$b++}}
                        </td>
                        <td class="">
                          <div class="active-project-1 d-flex align-items-center mt-0 ">
                            <div class="h-avatar is-medium">
                              <img class="avatar rounded-circle" alt="user-icon" src="upload_image/{{$value->profile_pic}}">
                            </div>
                            <div class="data-content">
                              <div>
                                <span class="font-weight-bold">{{$value->name}}</span>
                              </div>
                              <p class="m-0 text-secondary small">
                                {{$value->shop_name}}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td>
                          {{$value->contact}}
                        </td>
                        <td>
                          {{$value->email}}
                        </td>
                        <td>
                          {{$value->status}}
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-primary btn-sm mr-1"><a href="{{url('view-content')}}/{{$value->id}}" style="color:white;" target="_blank">View Content</a></button>
                            <button type="button" class="btn btn-warning btn-sm mr-1"><a href="{{url('view-on-map')}}" style="color:white;" target="_blank">View On Map</a></button>
                            <button type="button" class="btn btn-info btn-sm mr-1"><a href="{{url('edit-vendors')}}/{{$value->id}}" style="color:white" target="_blank">Edit</a></button>
                            <a type="button" href="{{url('deletevendor')}}/{{$value->id}}" class="btn btn-danger btn-sm mr-1" onclick="return confirm ('Are You sure you want to delete?')">Delete</a>
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
        <div class="row" id="blocked">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
              <div class="card-body p-0">
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="font-weight-bold">Blocked Vendors</h5>
                  <button class="btn btn-secondary btn-sm">
                    <a href="{{url('add-active-vendors')}}" style="color:white">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                      </svg>
                      Add
                    </a>
                  </button>
                </div>
                <div class="table-responsive">
                  <table class="table data-table mb-0 table-bordered table-striped ">
                    <thead class="table-color-heading">
                      <tr class="">
                        <th scope="col">
                          S No.
                        </th>
                        <th scope="col">
                          Name
                        </th>
                        <th scope="col">
                          Contact
                        </th>
                        <th scope="col">
                          Email
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
                      @php $c = 1; @endphp
                      @foreach ($block as $value)
                      <tr class="white-space-no-wrap">
                        <td class="pr-0 ">
                          {{$c++}}
                        </td>
                        <td class="">
                          <div class="active-project-1 d-flex align-items-center mt-0 ">
                            <div class="h-avatar is-medium">
                              <img class="avatar rounded-circle" alt="user-icon" src="upload_image/{{$value->profile_pic}}">
                            </div>
                            <div class="data-content">
                              <div>
                                <span class="font-weight-bold">{{$value->name}}</span>
                              </div>
                              <p class="m-0 text-secondary small">
                                {{$value->shop_name}}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td>
                          {{$value->contact}}
                        </td>
                        <td>
                          {{$value->email}}
                        </td>
                        <td>
                          {{$value->status}}
                        </td>
                        <td>
                          <div class="d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-primary btn-sm mr-1"><a href="{{url('view-content')}}/{{$value->id}}" style="color:white;" target="_blank">View Content</a></button>
                            <button type="button" class="btn btn-warning btn-sm mr-1"><a href="{{url('view-on-map')}}" style="color:white;" target="_blank">View On Map</a></button>
                            <button type="button" class="btn btn-info btn-sm mr-1"><a href="{{url('edit-vendors')}}/{{$value->id}}" style="color:white" target="_blank">Edit</a></button>
                            <a type="button" href="{{url('deletevendor')}}/{{$value->id}}" class="btn btn-danger btn-sm mr-1" onclick="return confirm ('Are You sure you want to delete?')">Delete</a>
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
      $('#active').hide();
    })

    $(document).ready(function() {
      $('#blocked').hide();
    })

    function showpending() {
      $('#pending').show();
      $('#active').hide();
      $('#blocked').hide();
    }

    function showactive() {
      $('#pending').hide();
      $('#active').show();
      $('#blocked').hide();
    }

    function showblocked() {
      $('#pending').hide();
      $('#active').hide();
      $('#blocked').show();
    }

  </script>
  <script>
    $(function () {
      var table = $('.yajra').DataTable({});
    });
  </script>
</body>

</html>
