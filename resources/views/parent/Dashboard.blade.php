<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Bootstrap 3 - Sidebar Layout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'><link rel="stylesheet" href="{{asset('dashboard/style.css')}}">
@yield('css')
</head>
<body>
<!-- partial:index.partial.html -->
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">My App</a>
    </header>
    <ul class="nav">
      <li>
        <a href="https://tc.trip.com/?allianceid=742329&sid=1621575&ppcid=ckid-9747756_adid-520294861086_akid-kwd-327677436158_adgid-128904777544&utm_source=google&utm_medium=cpc&utm_campaign=Ctrip_TW-zh+Broad&ds_cid=71700000083241128&ds_kid=43700063569783280&gclid=CjwKCAiAyfybBhBKEiwAgtB7fjdh1GASiM-pSJ1L2y0lkUcQ4TyVtOlYnyASbrfKX7dReIiFYtWBjhoCGkwQAvD_BwE&gclsrc=aw.ds">
          <i class="zmdi zmdi-view-dashboard"></i> Trip
        </a>
      </li>
      <li>
        <a href="#">

          <i class="zmdi zmdi-link"></i> Shortcuts
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-widgets"></i> Overview
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-calendar"></i> Events
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-info-outline"></i> About
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-settings"></i> Services
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-comment-more"></i> Contact
        </a>
      </li>
    </ul>
  </div>

  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
            </a>
          </li>
          <li><a href="#">Test User</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      @section('content')
      <h1>Simple Sidebar</h1>
      <p>
        Make sure to keep all page content within the 
        <code>#content</code>.
      </p>
      @show
    </div>
  </div>
</div>
@show
<!-- partial -->
  
</body>
</html>
