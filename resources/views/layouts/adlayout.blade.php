<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('Dashboard')</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{url('/admin_temp/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{url('/admin_temp/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{url('/admin_temp/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{url('/admin_temp/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{url('/admin_temp/css/matrix-media.css')}}" />
<link href="{{url('/admin_temp/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{url('/admin_temp/css/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{url('/admin_temp/css/bootstrap-wysihtml5.css')}}" />
<link rel="stylesheet" href="{{url('/admin_temp/css/custom.css')}}" />

<script src="{{url('/admin_temp/js/jquery.min.js')}}"></script>

<script src="{{url('/admin_temp/js/excanvas.min.js')}}"></script>  
<script src="{{url('/admin_temp/js/jquery.ui.custom.js')}}"></script> 
<script src="{{url('/admin_temp/js/bootstrap.min.js')}}"></script> 
<script src="{{url('/admin_temp/js/jquery.flot.min.js')}}"></script> 
<script src="{{url('/admin_temp/js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{url('/admin_temp/js/jquery.peity.min.js')}}"></script> 
<script src="{{url('/admin_temp/js/fullcalendar.min.js')}}"></script> 
<script src="{{url('/admin_temp/js/matrix.js')}}"></script> 
<script src="{{url('/admin_temp/js/matrix.dashboard.js')}}"></script> 
<script src="{{url('/admin_temp/js/jquery.gritter.min.js')}}"></script> 
<script src="{{url('/admin_temp/js/matrix.interface.js')}}"></script> 
<script src="{{url('/admin_temp/js/matrix.chat.js')}}"></script> 
<script src="{{url('/admin_temp/js/jquery.validate.js')}}"></script> 
<script src="{{url('/admin_temp/js/matrix.form_validation.js')}}"></script> 
<script src="{{url('/admin_temp/js/jquery.wizard.js')}}"></script> 
<script src="{{url('/admin_temp/js/jquery.uniform.js')}}"></script> 
<script src="{{url('/admin_temp/js/select2.min.js')}}"></script> 
<script src="{{url('/admin_temp/js/matrix.popover.js')}}"></script> 
<script src="{{url('/admin_temp/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{url('/admin_temp/js/matrix.tables.js')}}"></script> 
<script src="{{url('/admin_temp/js/wysihtml5-0.3.0.js')}}"></script> 
<script src="{{url('/admin_temp/js/jquery.peity.min.js')}}"></script> 
<script src="{{url('/admin_temp/js/bootstrap-wysihtml5.js')}}"></script> 
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="/dashboard">admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome {{ Auth::user()->name }}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-key"></i> Log Out</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </li>
    <li class=""><a target="_blank" href="/"><i class="icon icon-share-alt"></i> <span class="text">Visit site</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->


<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="#"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <li class="submenu @yield('activeSidebar')"> <a href="#"><i class="icon icon-list-ul"></i> <span>Project</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{url('/dashboard/project')}}">List project</a></li>
        <li><a href="{{url('/dashboard/project/add')}}">Add new</a></li>
      </ul>
    </li>

    <li class="submenu @yield('activeSidebarSketch')"> <a href="#"><i class="icon icon-edit"></i> <span>Sketch</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="">List Sketch</a></li>
        <li><a href="">Add new</a></li>
      </ul>
    </li>

    <li><a href=""><i class="icon icon-user"></i> <span>Edit profile</span></a></li>

    <li class="submenu"> <a href="#"><i class="icon icon-picture"></i> <span>Upload images</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="">List Images</a></li>
        <li><a href="">Upload new</a></li>
      </ul>
    </li>

    <li><a href="#"><i class="icon icon-envelope"></i> <span>Contact to webmaster</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    <h1>@yield('page-title')</h1>
    <a href="@yield('addlink')" class="@yield('isHidden') btn btn-large btn-info"><i class="icon-plus"></i> Add new</a>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">
    <hr>
    @yield('content')
  </div>
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Kon Admin. Develope by <a href="http://facebook.com/ziczacsolutions">Ziczac Solutions</a> </div>
</div>

<!--end-Footer-part-->

<script>
        $('.textarea_editor').wysihtml5();
</script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
