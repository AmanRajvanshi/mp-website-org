<?php
foreach ($parent as $pp)
{
    if(count($child) > 0){
        foreach($child as $cc)
        {
            if($pp->id==$cc->parent && $cc->page_type != 'inner' && $cc->status == 'Active' )
            {
                 $dd[$pp->id][]=$cc;
            }
        }
    }
    else{
         $dd=array(); 
    }
}
?>
<div class="iq-sidebar  sidebar-default  sidebar-light">
  <div class="iq-sidebar-logo d-flex justify-content-between">
    <a href="index" class="header-logo">
    <img src="{{url('assets/img/logos/mp.png')}}" class="img-fluid rounded-normal light-logo" alt="logo">
    <img src="{{url('assets/img/logos/mp.png')}}" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
    <span><img src="{{url('assets/img/logos/mp-name.png')}}"></span>
    </a>
    <div class="side-menu-bt-sidebar-1">
      <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </div>
  </div>
  <div class="data-scrollbar" data-scroll="1">
    <nav class="iq-sidebar-menu">
      <ul id="iq-sidebar-toggle" class="side-menu">
        @if(count($parent) > 0)
								<!--begin::Header Nav-->
								@foreach($parent as  $key => $pp)
                @if(!isset($dd[$pp->id]) )
                <li class="sidebar-layout sidebar-layout-bottom">
                  <a href="{{url($pp->page_name)}}" class="svg-icon">
                    <i class="{{$pp->sidebar_icon}} icon" aria-hidden="true"></i>
                    <span class="ml-2">	{{$pp->category_name}}</span>
                    <!--            <p class="mb-0 w-10 badge badge-pill badge-primary">6</p>-->
                  </a>
                </li>
                @else
      <li class="sidebar-layout sidebar-layout-bottom">
        <a href="#app{{$pp->id}}" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
          <i class="{{$pp->sidebar_icon}} icon" aria-hidden="true"></i>
          <span class="ml-2">	{{$pp->category_name}}</span>
          <i class="fa fa-angle-right" style="margin-left:60px;"  aria-hidden="true"></i>
        </a>
      @if(isset($dd[$pp->id]) )
        <ul id="app{{$pp->id}}" class="submenu collapse" data-parent="#iq-sidebar-toggle">
          @foreach($dd[$pp->id] as $kk=>$cc)
          <li class="sidebar-layout">
            <a href="{{url($cc->page_name)}}">
              <i class="{{$cc->icon}} icon" aria-hidden="true"></i>
              <span class="">{{$cc->category_name}}</span>
            </a>
          </li>
         
          @endforeach
        </ul>
@endif

      </li>

      @endif
									@endforeach		
									
									<!--end::Header Nav-->
								@endif
      </ul>
    </nav>
  </div>
</div>