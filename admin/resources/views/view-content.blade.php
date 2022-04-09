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
              <h4 class="font-weight-bold">View Content</h4>
              <div class="row" style="padding:10px 0">
                <div class="d-inline-block w-100">
                  <button type="button" class="btn btn-outline-primary mt-2" onclick="showfeeds()">Feeds</button>
                  <button type="button" class="btn btn-outline-primary mt-2" onclick="showservices()">Services</button>
                  <button type="button" class="btn btn-outline-primary mt-2" onclick="showoffers()">Offers</button>
                  <button type="button" class="btn btn-outline-primary mt-2" onclick="showpackage()">Package</button>
                  <button type="button" class="btn btn-outline-primary mt-2" onclick="showprofile()">Profiles</button>
                  <button type="button" class="btn btn-outline-primary mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20" style="padding-bottom:3">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Add
                  </button>
                </div>
              </div>
              <div class="container-fluid">
                <!-- feeds -->
                <div class="row" style="padding:5px 0" id="feeds">
                  <!-- feed -->
                  <div class="col-sm-12 col-md-3 col-lg-3"></div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card" style="padding:10px">
                      <h4 class="card-title">Vari Tech</h4>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, ea.</p>
                      <img src="assets/images/page-img/card.jpg" class="card-img-top" alt="#" style="height:100%;">
                      <div class="card-body">
                        <a href="#" class="btn btn-success float-left btn-sm" style="margin:5px">
                          Likes 
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:5px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                          </svg>
                          : 40
                        </a>
                        <a href="comments.php" class="btn btn-primary float-left btn-sm" style="margin:5px" target="_blank">
                          Comments
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                          </svg>
                        </a>
                        <a href="#" class="btn btn-danger float-right btn-sm" style="margin:5px" onclick="return confirm('Are you sure you want to Block this feed?')">
                          Block
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
                  <!-- feed -->
                  <div class="col-sm-12 col-md-3 col-lg-3"></div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card" style="padding:10px">
                      <h4 class="card-title">Vari Tech</h4>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, ea.</p>
                      <img src="assets/images/page-img/card.jpg" class="card-img-top" alt="#" style="height:100%;">
                      <div class="card-body">
                        <a href="#" class="btn btn-success float-left btn-sm" style="margin:5px">
                          Likes 
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:5px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                          </svg>
                          : 40
                        </a>
                        <a href="comments.php" class="btn btn-primary float-left btn-sm" style="margin:5px" target="_blank">
                          Comments
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                          </svg>
                        </a>
                        <a href="#" class="btn btn-danger float-right btn-sm" style="margin:5px" onclick="return confirm('Are you sure you want to Block this feed?')">
                          Block
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
                  <!-- feed -->
                  <div class="col-sm-12 col-md-3 col-lg-3"></div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card" style="padding:10px">
                      <h4 class="card-title">Vari Tech</h4>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, ea.</p>
                      <img src="assets/images/page-img/card.jpg" class="card-img-top" alt="#" style="height:100%;">
                      <div class="card-body">
                        <a href="#" class="btn btn-success float-left btn-sm" style="margin:5px">
                          Likes 
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:5px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                          </svg>
                          : 40
                        </a>
                        <a href="comments.php" class="btn btn-primary float-left btn-sm" style="margin:5px" target="_blank">
                          Comments
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                          </svg>
                        </a>
                        <a href="#" class="btn btn-danger float-right btn-sm" style="margin:5px" onclick="return confirm('Are you sure you want to Block this feed?')">
                          Block
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
                              <span class="font-weight-bold"><a href="{{url('view-customer')}}">Christian Bale</a></span>
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
                              <span class="font-weight-bold"><a href="{{url('view-customer')}}">Christian Bale</a></span>
                            </div>
                          </div>
                        </div>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    </div>
                  </div>
                  <!-- feed -->
                  <div class="col-sm-12 col-md-3 col-lg-3"></div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card" style="padding:10px">
                      <h4 class="card-title">Vari Tech</h4>
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, ea.</p>
                      <img src="assets/images/page-img/card.jpg" class="card-img-top" alt="#" style="height:100%;">
                      <div class="card-body">
                        <a href="#" class="btn btn-success float-left btn-sm" style="margin:5px">
                          Likes 
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:5px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                          </svg>
                          : 40
                        </a>
                        <a href="comments.php" class="btn btn-primary float-left btn-sm" style="margin:5px" target="_blank">
                          Comments
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                          </svg>
                        </a>
                        <a href="#" class="btn btn-danger float-right btn-sm" style="margin:5px" onclick="return confirm('Are you sure you want to Block this feed?')">
                          Block
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
                              <span class="font-weight-bold"><a href="{{url('view-customer')}}">Christian Bale</a></span>
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
                              <span class="font-weight-bold"><a href="{{url('view-customer')}}">Christian Bale</a></span>
                            </div>
                          </div>
                        </div>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    </div>
                  </div>
                </div>
                <!-- services -->
                <div class="row" style="padding:5px 0" id="services">
                  <div class="col-lg-12">
                    <div class="card card-block card-stretch">
                      <div class="card-body p-0">
                        <div class="d-flex justify-content-between align-items-center p-3">
                          <h5 class="font-weight-bold">Services</h5>
                        </div>
                        <div class="table-responsive">
                          <table id="datatable-1" class="table data-table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>S_No.</th>
                                <th>Service_Title</th>
                                <th>M_P</th>
                                <th>Our_Price</th>
                                <th>Desc.</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td class="">
                                  <div class="active-project-1 d-flex align-items-center mt-0 ">
                                    <div class="h-avatar is-medium">
                                      <img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
                                    </div>
                                    <div class="data-content">
                                      <div>
                                        <span class="font-weight-bold">Barbeque in a Box</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td>1200</td>
                                <td>1000</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td>Food</td>
                                <td>Active</td>
                                <td class="d-flex" style="vertical-align:top;">
                                  <!-- <button type="button" class="btn btn-info btn-sm mr-1 align-content-center" data-toggle="modal" data-target="#editmodal">Edit</button> -->
                                  <button type="button" class="btn btn-danger btn-sm mr-1 align-content-center" onclick="return confirm ('Are You sure you want to delete?')">Delete</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Add Modal -->
                  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addmodalTitle">Add a City</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- state -->
                          <div class="header-title">
                            <h6 class="card-title">Select State</h6>
                          </div>
                          <select class="form-control choicesjs" id="state" name="state">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                          <!-- city -->
                          <div class="header-title">
                            <h6 class="card-title">Select City</h6>
                          </div>
                          <select class="form-control choicesjs" id="city" name="city">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Edit Modal -->
                  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editmodalTitle">Edit a City</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- state -->
                          <div class="header-title">
                            <h6 class="card-title">Select State</h6>
                          </div>
                          <select class="form-control choicesjs" id="state" name="state">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                          <!-- city -->
                          <div class="header-title">
                            <h6 class="card-title">Select City</h6>
                          </div>
                          <select class="form-control choicesjs" id="city" name="city">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- offers -->
                <div class="row" style="padding:5px 0" id="offers">
                  <div class="col-lg-12">
                    <div class="card card-block card-stretch">
                      <div class="card-body p-0">
                        <div class="d-flex justify-content-between align-items-center p-3">
                          <h5 class="font-weight-bold">Offers</h5>
                        </div>
                        <div class="table-responsive">
                          <table id="datatable-1" class="table data-table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>S_No.</th>
                                <th>Offer_Title</th>
                                <th>M_P</th>
                                <th>Offer</th>
                                <th>Our_Price</th>
                                <th>Desc.</th>
                                <th>Expiry_Date</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td class="">
                                  <div class="active-project-1 d-flex align-items-center mt-0 ">
                                    <div class="h-avatar is-medium">
                                      <img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
                                    </div>
                                    <div class="data-content">
                                      <div>
                                        <span class="font-weight-bold">Barbeque in a Box</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td>1200</td>
                                <td>200 off</td>
                                <td>1000</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td>12/12/21</td>
                                <td>Active</td>
                                <td class="d-flex" style="vertical-align:top;">
                                  <!-- <button type="button" class="btn btn-info btn-sm mr-1 align-content-center" data-toggle="modal" data-target="#editmodal">Edit</button> -->
                                  <button type="button" class="btn btn-danger btn-sm mr-1 align-content-center" onclick="return confirm ('Are You sure you want to delete?')">Delete</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Add Modal -->
                  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addmodalTitle">Add a City</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- state -->
                          <div class="header-title">
                            <h6 class="card-title">Select State</h6>
                          </div>
                          <select class="form-control choicesjs" id="state" name="state">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                          <!-- city -->
                          <div class="header-title">
                            <h6 class="card-title">Select City</h6>
                          </div>
                          <select class="form-control choicesjs" id="city" name="city">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Edit Modal -->
                  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editmodalTitle">Edit a City</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- state -->
                          <div class="header-title">
                            <h6 class="card-title">Select State</h6>
                          </div>
                          <select class="form-control choicesjs" id="state" name="state">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                          <!-- city -->
                          <div class="header-title">
                            <h6 class="card-title">Select City</h6>
                          </div>
                          <select class="form-control choicesjs" id="city" name="city">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- package -->
                <div class="row" style="padding:5px 0" id="package">
                  <div class="col-lg-12">
                    <div class="card card-block card-stretch">
                      <div class="card-body p-0">
                        <div class="d-flex justify-content-between align-items-center p-3">
                          <h5 class="font-weight-bold">Package</h5>
                        </div>
                        <div class="table-responsive">
                          <table id="datatable-1" class="table data-table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>S_No.</th>
                                <th>Package_Title</th>
                                <th>Desc.</th>
                                <th>T&c</th>
                                <th>Price</th>
                                <th>Our Price</th>
                                <th>Selected_S/P</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php $a=1; @endphp
                              @foreach ($vendor_package as $val)
                              <tr>
                                <td>{{$a++}}</td>
                                <td class="">
                                  <div class="active-project-1 d-flex align-items-center mt-0 ">
                                    <div class="h-avatar is-medium">
                                      <img class="avatar rounded-circle" alt="user-icon" src="{{url('upload_image')}}/{{$val->package_image}}">
                                    </div>
                                    <div class="data-content">
                                      <div>
                                        <span class="font-weight-bold">{{$val->name}}</span>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td>{{$val->description}}</td>
                                <td>
                                  <li>Lorem ipsum dolor.</li>
                                  <li>Lorem ipsum dolor.</li>
                                </td>
                                <td>{{$val->market_price}}</td>
                                <td>{{$val->our_price}}</td>
                                <td>
                                  <li>Food</li>
                                  <li>Food</li>
                                </td>
                                <td>{{$val->package_status}}</td>
                                <td>
                                  <!-- <button type="button" class="btn btn-info btn-sm mr-1 align-content-center" data-toggle="modal" data-target="#editmodal">Edit</button> -->
                                  <a href="{{url('delete_package')}}/{{$val->id}}" type="button" class="btn btn-danger btn-sm mr-1 align-content-center" onclick="return confirm ('Are You sure you want to delete?')">Delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Add Modal -->
                  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addmodalTitle">Add a City</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- state -->
                          <div class="header-title">
                            <h6 class="card-title">Select State</h6>
                          </div>
                          <select class="form-control choicesjs" id="state" name="state">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                          <!-- city -->
                          <div class="header-title">
                            <h6 class="card-title">Select City</h6>
                          </div>
                          <select class="form-control choicesjs" id="city" name="city">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Edit Modal -->
                  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editmodalTitle">Edit a City</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- state -->
                          <div class="header-title">
                            <h6 class="card-title">Select State</h6>
                          </div>
                          <select class="form-control choicesjs" id="state" name="state">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                          <!-- city -->
                          <div class="header-title">
                            <h6 class="card-title">Select City</h6>
                          </div>
                          <select class="form-control choicesjs" id="city" name="city">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- profile -->
                <div class="row" style="padding:5px 0" id="profile">
                  <div class="card card-block card-stretch">
                    <div class="card-body p-0">
                      <div class="d-flex justify-content-between align-items-center p-3">
                        <h5 class="font-weight-bold">Profile</h5>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="card">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                <div>
                                  <ul class="list-style-1 mb-0">
                                    <li class="list-item d-flex justify-content-start align-items-center">
                                      <div class="avatar">
                                        <img src="{{url('upload_image')}}/{{$data->profile_pic}}"  class="avatar avatar-img avatar-60 rounded-circle" alt="01.jpg" />                        
                                      </div>
                                      <div class="list-style-detail ml-4 mr-2">
                                        <h5 class="font-weight-bold">{{$data->name}}</h5>
                                        <p class="mb-0 mt-1 text-muted">{{$data->shop_name}}</p>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="row mt-3">
                                  <div class="col-6 text-center mb-2">
                                    <button class="btn btn-block btn-sm btn-primary">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                      </svg>
                                      <span class="">Message</span>
                                    </button>
                                  </div>
                                  <div class="col-6 text-center">
                                    <a href="{{url('edit-vendors/')}}/{{$data->id}}" class="btn btn-block btn-sm btn-secondary">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                      </svg>
                                      <span class="">Edit Profile</span>
                                    </a>
                                  </div>
                                </div>
                              </li>
                              <li class="list-group-item">
                                <table class="table table-borderless mb-0">
                                  <tr>
                                    <td class="p-0">
                                      <p class="mb-0 text-muted">Email ID</p>
                                    </td>
                                    <td>
                                      <p class="mb-0 "><a href="https://templates.iqonic.design/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80ebe1f4e5c0f9e1e8efefaee3efed">{{$data->email}}</a></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="p-0">
                                      <p class="mb-0 text-muted">Birthday</p>
                                    </td>
                                    <td>
                                      <p class="mb-0 ">01 Feb 1990</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="p-0">
                                      <p class="mb-0 text-muted">Phone</p>
                                    </td>
                                    <td>
                                      <p class="mb-0 ">{{$data->contact}}</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="p-0">
                                      <p class="mb-0 text-muted">Country</p>
                                    </td>
                                    <td>
                                      <p class="mb-0 ">{{$data->email}}</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="p-0">
                                      <p class="mb-0 text-muted">State/Region</p>
                                    </td>
                                    <td>
                                      <p class="mb-0 ">{{$data->city}}</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="p-0">
                                      <p class="mb-0 text-muted">Address</p>
                                    </td>
                                    <td>
                                      <p class="mb-0 ">{{$data->city}}</p>
                                    </td>
                                  </tr>
                                </table>
                              </li>
                              <li class="list-group-item">
                                <h6 class="font-weight-bold">Total Spending</h6>
                                <div id="chart-apex-column-001" style="height: 250px" class="custom-chart"></div>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="card">
                            <div class="card-body p-0">
                              <ul class="nav tab-nav-pane nav-tabs pt-2 mb-0">
                                <li class="pb-2 mb-0 nav-item"><a data-toggle="tab" class="font-weight-bold text-uppercase px-5 py-2 active" href="#invoice">Invoices</a></li>
                                <li class="pb-2 mb-0 nav-item"><a data-toggle="tab" class="font-weight-bold text-uppercase px-5 py-2" href="#activity">Activity</a></li>
                              </ul>
                              <div class="tab-content">
                                <div id="invoice" class="tab-pane fade show active">
                                  <div class="d-flex justify-content-between align-items-center p-3">
                                    <h5>Invoice List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                      </svg>
                                      Export
                                    </button>
                                  </div>
                                  <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                      <thead class="table-color-heading">
                                        <tr class="text-muted">
                                          <th scope="col">ID</th>
                                          <th scope="col">Date </th>
                                          <th scope="col">Description</th>
                                          <th scope="col">Status</th>
                                          <th scope="col" class="text-right">Total</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>IN-902559</td>
                                          <td>12 Jan 2020</td>
                                          <td>
                                            Order OR-561488
                                          </td>
                                          <td>
                                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                              </svg>
                                              Paid
                                            </p>
                                          </td>
                                          <td class="text-right">$104.98</td>
                                        </tr>
                                        <tr>
                                          <td>IN-552149</td>
                                          <td>15 Jan 2020</td>
                                          <td>
                                            Order OR-568842
                                          </td>
                                          <td>
                                            <p class="mb-0 text-warning d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                              </svg>
                                              Pending
                                            </p>
                                          </td>
                                          <td class="text-right">$99.98</td>
                                        </tr>
                                        <tr>
                                          <td>IN-941529</td>
                                          <td>12 Jan 2020</td>
                                          <td>
                                            Order OR-598550
                                          </td>
                                          <td>
                                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                              </svg>
                                              Paid
                                            </p>
                                          </td>
                                          <td class="text-right">$966.12</td>
                                        </tr>
                                        <tr>
                                          <td>IN-125623</td>
                                          <td>16 Jan 2020</td>
                                          <td>
                                            Order OR-325548
                                          </td>
                                          <td>
                                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                              </svg>
                                              Completed
                                            </p>
                                          </td>
                                          <td class="text-right">$65.00</td>
                                        </tr>
                                        <tr>
                                          <td>IN-911211</td>
                                          <td>18 Jan 2020</td>
                                          <td>
                                            Order OR-125475
                                          </td>
                                          <td>
                                            <p class="mb-0 text-danger d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                              </svg>
                                              Cancelled
                                            </p>
                                          </td>
                                          <td class="text-right">$108.99</td>
                                        </tr>
                                        <tr>
                                          <td>IN-902210</td>
                                          <td>19 Jan 2020</td>
                                          <td>
                                            Order OR-595508
                                          </td>
                                          <td>
                                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                              </svg>
                                              Paid
                                            </p>
                                          </td>
                                          <td class="text-right">$199.99</td>
                                        </tr>
                                        <tr>
                                          <td>IN-902445</td>
                                          <td>20 Jan 2020</td>
                                          <td>
                                            Order OR-884155
                                          </td>
                                          <td>
                                            <p class="mb-0 text-warning d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                              </svg>
                                              Pending
                                            </p>
                                          </td>
                                          <td class="text-right">$99.99</td>
                                        </tr>
                                        <tr>
                                          <td>IN-901020</td>
                                          <td>22 Jan 2020</td>
                                          <td>
                                            Order OR-500008
                                          </td>
                                          <td>
                                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                              </svg>
                                              Paid
                                            </p>
                                          </td>
                                          <td class="text-right">$449.00</td>
                                        </tr>
                                        <tr>
                                          <td>IN-9036510</td>
                                          <td>22 Jan 2020</td>
                                          <td>
                                            Order OR-489523
                                          </td>
                                          <td>
                                            <p class="mb-0 text-danger d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                              </svg>
                                              Cancelled
                                            </p>
                                          </td>
                                          <td class="text-right">$1,299.05</td>
                                        </tr>
                                        <tr>
                                          <td>IN-120010</td>
                                          <td>23 Jan 2020</td>
                                          <td>
                                            Order OR-965508
                                          </td>
                                          <td>
                                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                              </svg>
                                              Paid
                                            </p>
                                          </td>
                                          <td class="text-right">$6,325.99</td>
                                        </tr>
                                        <tr>
                                          <td>IN-302240</td>
                                          <td>15 Jan 2020</td>
                                          <td>
                                            Order OR-654412
                                          </td>
                                          <td>
                                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                              </svg>
                                              Paid
                                            </p>
                                          </td>
                                          <td class="text-right">$699.00</td>
                                        </tr>
                                        <tr>
                                          <td>IN-662210</td>
                                          <td>26 Jan 2020</td>
                                          <td>
                                            Order OR-965508
                                          </td>
                                          <td>
                                            <p class="mb-0 text-danger d-flex justify-content-start align-items-center">
                                              <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                              </svg>
                                              Cancelled
                                            </p>
                                          </td>
                                          <td class="text-right">$150.03</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <div id="activity" class="tab-pane fade p-3">
                                  <h3 class="mb-3">Activity</h3>
                                  <div class="iq-timeline0 m-0 d-flex align-items-center justify-content-between position-relative">
                                    <ul class="list-inline p-0 m-0">
                                      <li>
                                        <div class="pt-3">
                                          <p class="mb-0 text-muted font-weight-bold text-uppercase">13, September 2020</p>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                        <h6 class="float-left mb-1 font-weight-bold">Signed Out</h6>
                                        <div class="d-inline-block w-100">
                                          <p class="mb-0">Santander crea una sociedad para gestionar las sucursales que cierra</p>
                                          <div class="d-inline-block w-100">
                                            <p>Probablemente, la bodega más sostenible de españa</p>
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                        <h6 class="float-left mb-1 font-weight-bold">Create Invoice IN-302240</h6>
                                        <div class="d-inline-block w-100">
                                          <p>Repsol sopesa elegir primero un socio para su área de renovables y después sacarla a Bolsa</p>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                        <h6 class="float-left mb-1 font-weight-bold">Signed In</h6>
                                        <div class="d-inline-block w-100">
                                          <p>El Ibex busca nuevos máximos en la última jornada de abril</p>
                                        </div>
                                        <div class="pt-3">
                                          <p class="mb-0 text-muted font-weight-bold text-uppercase">14, September 2020</p>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                        <h6 class="float-left mb-1 font-weight-bold">Signed Out</h6>
                                        <div class="d-inline-block w-100">
                                          <p>Ecoener se atreve con la Bolsa y se estrenará con una valoración de 336 millones</p>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                        <h6 class="float-left mb-1 font-weight-bold">Create Invoice IN-662210</h6>
                                        <div class="d-inline-block w-100">
                                          <p class="mb-0">BBVA supera la crisis del Covid y gana 1.210 millones en el primer trimestre</p>
                                        </div>
                                        <div class="d-inline-block w-100">
                                          <p>Probablemente, la bodega más sostenible de españa</p>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="timeline-dots timeline-dot1 border-primary text-primary"></div>
                                        <h6 class="float-left mb-1 font-weight-bold">Signed In</h6>
                                        <div class="d-inline-block w-100">
                                          <p class="mb-0">El mercado se prepara para una corrección en mayo tras el rally bursátil</p>
                                        </div>
                                        <div class="d-inline-block w-100">
                                          <p>Repsol sopesa elegir primero un socio para su área de renovables y después sacarla a Bolsa</p>
                                        </div>
                                      </li>
                                    </ul>
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
      $('#services').hide();
      $('#offers').hide();
      $('#package').hide();
      $('#profile').hide();
      })
      
      // $(document).ready(function() {
      // $('#blocked').hide();
      // })
      function showfeeds()
      {
      	$('#feeds').show();
				$('#services').hide();
				$('#offers').hide();
				$('#package').hide();
				$('#profile').hide();
      }
      function showservices()
      {
      	$('#feeds').hide();
				$('#services').show();
				$('#offers').hide();
				$('#package').hide();
				$('#profile').hide();
      }
      function showoffers()
      {
      	$('#feeds').hide();
				$('#services').hide();
				$('#offers').show();
				$('#package').hide();
				$('#profile').hide();
      }
      function showpackage()
      {
      	$('#feeds').hide();
				$('#services').hide();
				$('#offers').hide();
				$('#package').show();
				$('#profile').hide();
      }
      function showprofile()
      {
      	$('#feeds').hide();
				$('#services').hide();
				$('#offers').hide();
				$('#package').hide();
				$('#profile').show();
      }
    </script>
  </body>
</html>