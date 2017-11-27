
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
                  <li><a href="{{url('logout')}}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="adoptme/images/logo.jpg" alt="User Image"></div>
            <div class="pull-left info">
              <p>Adopt Me</p>
              <p class="designation">Admin</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li><a href="{{url('dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
            <li class="active"><a href="{{url('article')}}"><i class="fa fa-pencil"></i><span>Article</span></a></li>
            <li><a href="{{url('pusat-adoptreq')}}"><i class="fa fa-envelope"></i><span>Adoption Request</span></a></li>
            <li class="treeview"><a href="{{url('pusatanimal')}}"><i class="fa fa-paw"></i><span>Animal</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{url('pusat-cat')}}"><img src="admin/images/whitecat.png" class="cats">Cat</a></li>
                <li><a href="{{url('pusat-dog')}}"><img src="admin/images/whitedog.png" class="cats">Dog</a></li>
              </ul>
            </li>
            <li><a href="{{url('pusat-report')}}"><i class="fa fa-exclamation-circle"></i><span>Report</span></a></li>
            <li><a href="{{url('pusat-donate')}}"><i class=" fa fa-handshake-o"></i><span>Donation</span></a></li>
            <li><a href="{{url('pusat-shelter')}}"><i class="fa fa-home"></i><span>Shelter</span></a></li>
            <li><a href="{{url('pusat-message')}}"><i class="fa fa-comment"></i><span>Message</span></a></li>
          </ul>
        </section>
      </aside>
    <!-- END sidenav -->
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h2><i class="fa fa-pencil"></i> Article</h2>
          </div>
        </div>

        
        <div class="pull-right" style="margin-bottom: 10px">
          <a href="{{route('article.create')}}" class="btn btn-primary" >+ Article</a>
        </div>
        
        <div class="row">

          <div class="col-md-12">
              <div class="card-body">

                <table class="table table-hover table-bordered" id="sampleTable">

                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Contents</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{!!$value->judul!!}</td>
                      <td>{!!$value->isi!!}</td>
                      <td>
                        <a class="btn btn-primary" href="{{route('article.edit',$value->id)}}">Edit </a>
                        <a class="btn btn-danger" href="{{url('article/'.$value->id.'/delete')}}">Delete </a>
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
<!-- Javascripts-->
    <script src="{{ asset('admin/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/js/plugins/pace.min.js')}}"></script>
    <script src="{{ asset('admin/js/main.js')}}"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>
