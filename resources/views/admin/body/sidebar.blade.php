@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp



<aside class="main-sidebar">
  <section class="sidebar">	
      
      <div class="user-profile">
          <div class="ulogo">
              <a href="index-2.html">
                <!-- logo for regular state and mobile devices -->
                  <div class="d-flex align-items-center justify-content-center">					 	
                        <img src="{{asset(app('cLogo'))}}" alt="" style="height: 100px; width:100px">
                        
                  </div>
              </a>
          </div>
      </div>
    
    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">  
        
      <li class= "{{ ($route == 'dashboard')?'active':'' }}">
        <a href="{{ route('dashboard') }}">
          <i data-feather="pie-chart"></i>
          <span>Dashboard</span>
        </a>
      </li>  
      
    
        <li class="treeview {{ ($prefix == '/users')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Manage Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view')}}"><i class="ti-more"></i>Users</a></li>
            <li><a href="{{ route('con.view')}}"><i class="ti-more"></i>Consumers</a></li>
            <li><a href="{{ route('mb.view')}}"><i class="ti-more"></i>Members</a></li>
            <li><a href="{{ route('vf.view')}}"><i class="ti-more"></i>Virtual Farmers</a></li>
          </ul>
        </li>
        
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }} ">
          <a href="#">
            <i data-feather="user-check"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          @if ('usertype' == '1')
            <ul class="treeview-menu">
              <li><a href="{{ route('profile.view')}}"><i class="ti-more"></i>Your Profile</a></li>
              <li><a href="{{ route('password.view')}}"><i class="ti-more"></i>Change Password</a></li>
              
            </ul>
              
          @else
            <ul class="treeview-menu">
              <li><a href="{{ route('prof.view')}}"><i class="ti-more"></i>Your Profile</a></li>
              <li><a href="{{ route('pass.view')}}"><i class="ti-more"></i>Change Password</a></li>
              
            </ul> 
          
          @endif
          
        </li>

        <li class="treeview {{ ($prefix == '/setup')?'active':'' }} ">
          <a href="#">
            <i data-feather="settings"></i> <span>Setup</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('details.view')}}"><i class="ti-more"></i>Company Info</a></li>
            <li><a href="{{ route('sd.view')}}"><i class="ti-more"></i>Seedlings</a></li>
            <li><a href="{{ route('nrs.view')}}"><i class="ti-more"></i>Nurseries</a></li>
            <li><a href="{{ route('ns.view')}}"><i class="ti-more"></i>Nursery Details</a></li>
            <li><a href="{{ route('sn.view')}}"><i class="ti-more"></i>Services</a></li>
            <li><a href="{{ route('srv.view')}}"><i class="ti-more"></i>Services Detail</a></li>
            <li><a href="{{ route('loc.view')}}"><i class="ti-more"></i>Locations</a></li>
            <li><a href="{{ route('pro.view')}}"><i class="ti-more"></i>Projects</a></li>
            <li><a href="{{ route('sect.view')}}"><i class="ti-more"></i>Project-Sections</a></li>
            <li><a href="{{ route('sub.sect.view')}}"><i class="ti-more"></i>Project-Sub-Sections</a></li>
            
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/order')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Manage Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('sd.ord.view')}}"><i class="ti-more"></i>Seedlings</a></li>
            <li><a href="{{ route('pro.ord.view')}}"><i class="ti-more"></i>Projects</a></li>
            <li><a href="{{ route('srv.ord.view')}}"><i class="ti-more"></i>Services</a></li>
            
          </ul>
        </li>

        <!--<li class="treeview {{ ($prefix == '/visit')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Site Visits</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('view.visit')}}"><i class="ti-more"></i>View Visits</a></li>
          </ul>
        </li>-->

        <!--<li class="treeview {{ ($prefix == '/prep')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Land Preparation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('view.prep')}}"><i class="ti-more"></i>Land Preparation Requests</a></li>
          </ul>
        </li>-->

        <!--<li class="treeview {{ ($prefix == '/extension')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Extensions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('view.ext')}}"><i class="ti-more"></i>View Extensions</a></li>
          </ul>
        </li>-->

        <li class="treeview {{ ($prefix == '/endproduct')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>End Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('add.ep')}}"><i class="ti-more"></i>Add Products</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/trees')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Trees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('add.trees')}}"><i class="ti-more"></i>Add Trees</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/sales')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Trees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('view.sales')}}"><i class="ti-more"></i>View Sales</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/account')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Chart of Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('lg.view')}}"><i class="ti-more"></i>Accounts</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/product')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('product.view')}}"><i class="ti-more"></i>Products</a></li>
            <li><a href="{{ route('plot.view')}}"><i class="ti-more"></i>Plots</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/cart')?'active':'' }} " >
          <a href="#">
            <i data-feather="user"></i>
            <span>Online Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('cart.order.view')}}"><i class="ti-more"></i>Cart Orders</a></li>
            <li><a href="{{ route('cart.project.order.view')}}"><i class="ti-more"></i>Project Orders</a></li>
          </ul>
        </li>
        

        

        
      
    </ul>
  </section>
</aside>

<div class="sidebar-footer">
    <!-- item-->
    <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
    <!-- item-->
    <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
    <!-- item-->
    <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
</div>