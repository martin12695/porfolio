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
  <h1><a href="dashboard.html">admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->


<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="#"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <li class="@yield('activeSidebar')"> <a href="{{url('/dashboard/project')}}"><i class="icon icon-signal"></i> <span>Project</span></a> </li>

    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>

    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>

    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>

    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>

    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>

    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    <h1>@yield('page-title')</h1>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">
    <hr>
    @yield('content')
  </div>
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
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
