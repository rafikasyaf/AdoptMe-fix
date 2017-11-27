<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Adopt Me</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">Adopt Me</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!-- User Menu-->
                 <li><a href="{{url('logout')}}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="adoptme/images/apollo.png" alt="User Image"></div>
            <div class="pull-left info">
              <p>{{\Auth::user()->name}}</p>
              <p class="designation">Admin</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li><a href="{{url('index')}}"><i class="fa fa-envelope"></i><span>Adoption Request</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-paw"></i><span>Animal</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{url('admin-cat')}}"><img src="admin/images/whitecat.png" class="cats">Cat</a></li>
                <li><a href="{{url('admin-dog')}}"><img src="admin/images/whitedog.png" class="cats">Dog</a></li>
              </ul>
            </li>
           <li class="active" ><a href="{{url('admin-profile')}}"><i class="fa fa-user"></i><span>Profile</span></a></li>
          </ul>
        </section>
      </aside>
      <!-- END sidenav -->

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h2><i class="fa fa-user"></i> Profile</h2>
          </div>
        <div class="row user">
          <div class="col-md-9">
            <div class="tab-content">
                <div class="card user-settings">
                  <h4 class="line-head">Edit Profile</h4>
                  <div class="container">


  @php($v=\App\User::find(\Auth::user()->id))
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
          <img src="adoptme/images/dogcat.png" style="width:250px;height:250px;">
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$v->username}}" name="username">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Shelter name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$v->name}}" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$v->phonenumb}}" name="phonenumb">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$v->email}}" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{$v->address}}" name="address">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" class="btn btn-primary">Save</button>
              <!-- <input type="button" class="btn btn-primary" value="Save Changes"> -->
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
                </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="{{ asset('admin/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/js/plugins/pace.min.js')}}"></script>
    <script src="{{ asset('admin/js/main.js')}}"></script>
  </body>
</html>