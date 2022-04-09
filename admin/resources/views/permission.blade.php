<!doctype html>
<html lang="en">

	@include('head')
<head>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"/> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
</head>
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
						
						<div class="row py-3" id="pending">
							<div class="col-lg-12">
								<div class="card card-block card-stretch">
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table data-table mb-0 table-bordered table-striped ">
                                                <thead class="table-color-heading">
                                                    <tr>
                                                        <!-- <th data-field="RecordID" class="datatable-cell-center datatable-cell datatable-cell-check"><span style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input type="checkbox">&nbsp;<span></span></label></span></th> -->
                                                        <th style="width:10%">SI No</th>
                                                        <th style="width:70%">Page Name</th>
                                                        <th style="width:5%">Add</th>
                                                        <th style="width:5%">Edit</th>
                                                        <th style="width:5%">Delete</th>
                                                        <th style="width:5%">View</th>
                                                    </tr>
                                                </thead>
												<tbody>
                                                    <?php $a = 1;?>
                                                    @foreach($data as $value)
                                                    <tr class="white-space-no-wrap">
                                                        <td>{{$a++}}</td>
                                                        <td>
                                                            {{$value->page_name}} 
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch mx-5">
                                                                <input class="form-check-input add_check" id="{{$value->id}}" type="checkbox" {{$value -> add =='yes' ? 'checked' : '' }}>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch mx-5">
                                                                <input class="form-check-input edit_check" id="{{$value->id}}" type="checkbox" {{$value -> edit =='yes' ? 'checked' : '' }}>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch mx-5">
                                                                <input class="form-check-input delete_check" id="{{$value->id}}" type="checkbox" {{$value -> delete =='yes' ? 'checked' : '' }}>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch mx-5">
                                                                <input class="form-check-input view_check" id="{{$value->id}}" type="checkbox" {{$value -> view =='yes' ? 'checked' : '' }}>
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
    <script>
        $(document).ready(function(){

		  $(".add_check").click(function () {
		    var rowid = $(this).attr('id');
			var eid = "<?php echo $id; ?>";
			// alert(rowid);
		    $.ajax({
		      url: "{{url('addcheck')}}",
		      method: "POST",
		      data : {id : rowid,emp_id : eid},
		      headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		      success: function (data) {
                // window.location.href = '../permission'; 
		      }
		    });
		  });

		  $(".edit_check").click(function () {
		    var rowid = $(this).attr('id');
			var eid = '<?php echo $id; ?>';
		    // alert(rowid);
		    $.ajax({
		      url: "{{url('editcheck')}}",
		      method: "POST",
			  data : {id : rowid,emp_id : eid},
		      headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		      success: function (data) {
                // window.location.href = '../permission'; 
		      }
		    });
		  });

		  $(".delete_check").click(function () {
		    var rowid = $(this).attr('id');
			var eid = '<?php echo $id; ?>';
		    // alert(rowid);
		    $.ajax({
		      url: "{{url('deletecheck')}}",
		      method: "POST",
			  data : {id : rowid,emp_id : eid},
		      headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		      success: function (data) {
                // window.location.href = '../permission'; 
		      }
		    });
		  });

		  $(".view_check").click(function () {
		    var rowid = $(this).attr('id');
			var eid = '<?php echo $id; ?>';
		    // alert(rowid);
		    $.ajax({
		      url: "{{url('viewcheck')}}",
		      method: "POST",
			  data : {id : rowid,emp_id : eid},
		      headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		      success: function (data) {
                // window.location.href = '../permission'; 
		      }
		    });
		  });

		});
    </script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
</body>

</html>