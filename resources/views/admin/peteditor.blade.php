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
    <title>Adopt Me Admin</title>
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
            <div class="pull-left image"><img class="img-circle" src="{{asset('adoptme/images/apollo.png')}}" alt="User Image"></div>
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
                <li class="active"><a href="{{url('admin-cat')}}"><img src="{{asset('admin/images/whitecat.png')}}" class="cats">Cat</a></li>
                <li><a href="{{url('admin-dog')}}"><img src="{{asset('admin/images/whitedog.png')}}" class="cats">Dog</a></li>
              </ul>
            </li>
           <li><a href="{{url('admin-profile')}}"><i class="fa fa-user"></i><span>Profile</span></a></li>
          </ul>
        </section>
      </aside>
      <!-- END sidenav -->
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h2><img src="{{asset('admin/images/catdog.png')}}" class="adminanimal">Animal</h2>
          </div>
        </div>
    

  <div class="row">
    
          @if(collect(request()->segments())->last()=='edit')
              <form class="form-horizontal" method="post" action="{{url('peteditor/'.$data->id.'/update')}}" enctype="multipart/form-data">
                @else
                <form class="form-horizontal" action="{{route('peteditor.store')}}" method="post" enctype="multipart/form-data">
                @endif
                {{csrf_field()}}
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img class="peteditor" src="{{asset('$data->image')}}" alt="Image not found">
          <p type="upload image:"><input type="file" name="image" accept="image/*" class="form-control"></input></p>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        

          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" value="{{(isset($data->name))?$data->name:''}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Category:</label>
            <div class="col-lg-8">
              <select class="form-control nav" name="category" value="{{(isset($data->category))?$data->category:''}}">
                      <option value="cat">Cat</option>
                      <option value="dog">Dog</option></select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Sex:</label>
            <div class="col-lg-8">
              <select class="form-control nav" name="gender" value="{{(isset($data->gender))?$data->gender:''}}">
                      <option value="Female">Female</option>
                      <option value="Male">Male</option></select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Age (in Months):</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="age" value="{{(isset($data->age))?$data->age:''}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Vaccinated:</label>
            <div class="col-lg-8">
          <select class="form-control nav" name="vaccinated" value="{{(isset($data->vaccinated))?$data->vaccinated:''}}">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option></select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Neutered/Spayed:</label>
            <div class="col-md-8">
              <select class="form-control nav" name="spayed" value="{{(isset($data->spayed))?$data->spayed:''}}">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option></select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Medical Note & Consideration:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="health" value="{{(isset($data->health))?$data->health:''}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Story:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="story" value="{{(isset($data->story))?$data->story:''}}">
            </div>
          </div>   
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" class="btn btn-primary">Save</button>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
        </form>
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