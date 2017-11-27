<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Adopt Me</title>
<link rel="stylesheet" href="{{ asset('adoptme/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/css/flexslider.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/css/main2.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/css/responsive.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/css/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}">
</head>

<body>
<!-- Header Section -->
<section class="tophead" role="tophead"> 
  <!-- Navigation Section -->
  <header id="header">
    <img class="header-logo" id="img_logo" src="{{asset('adoptme/images/logo.jpg')}}">
    <div class="header-content clearfix">
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('adoptsme')}}">Adopt me!</a></li>
          <li><a href="{{url('qna')}}">Q n A</a></li>
          <li><a href="{{url('report')}}">Report</a></li>
          <li><a href="{{url('donation')}}">Donation</a></li>
          <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
      </nav>
<!-- HERE -->
      <nav class="nav-login" role="navigation" >
        @if(!(\Auth::check()))
        <li><a href="#" role="button" data-toggle="modal" data-target="#login-modal">Log In</a></li>
        @else
        <a href="{{url('profil')}}">{{\Auth::user()->name}}</a> <a href="{{url('logout')}}">Logout</a>
        @endif
      </nav>
  </header>
  <!-- Navigation Section --> 
</section>

        @yield('content')

<!-- login -->
<div class="modal fade" id="login-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <img class="img-circle" id="img_logo" src="adoptme/images/logo.jpg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" action="{{url('postlogin')}}" method="post">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <input id="login_username" name="username" class="form-control" type="text" placeholder="Username" required>
                            <input id="login_password" name="password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            
                                <center>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </center>
                            </div>
                        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;" >
                        <div class="modal-body">
                            <div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">We'll send password to your email</span>
                            </div>
                            <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <center>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                                </center>
                            </div>
                        </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;" method="post" action="{{url('postregister')}}">
                        {{csrf_field()}}
                        <div class="modal-body">



                            <input id="register_username" name="name" class="form-control" type="text" placeholder="Name" required>
                            <input id="register_email" name="email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_phone" name="phonenumb" class="form-control" type="text" placeholder="Phone Number" required>
                            <input id="register_phone" name="address" class="form-control" type="text" placeholder="Address" required>
                            <input id="register_email" name="username" class="form-control" type="text" placeholder="Username" required>
                            <input id="register_password" name="password" class="form-control" type="password" placeholder="Password" required>
                            
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                        </div>
                            <div>
                                <div class="modal-footer">

                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                            </div>
                            <div>
                                <center>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </center>
                            </div>
                        
                        </center>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->

<!-- footer section -->
<footer id="contact" class="footer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="container-fluid">
    <div class="col-md-2 left">
      <h8>Office Location</h8>
      <p> Jln Kusuma No. 45 Yogyakarta</p>
    </div>
    <div class="col-md-2 left">
      <h8>Keepin' Touch</h8>
      <p>Call: +62827861826 <br>
        Email : <a href="mailto:hello@agency.com"> hello@adoptme.com </a></p>
    </div>
    <div class="col-md-2 left">
      <h8>Social Presence</h8>
      <ul class="footer-share">
        <li><a href="instagram.com"><i class="fa fa-instagram" style="font-size:17px"> @adoptme</i></a></li>
        <li><a href="facebook.com"><i class="fa fa-twitter"style="font-size:20px"></i> @adoptme</a></li>
        <li><a href="twitter.coms"><i class="fa fa-facebook"style="font-size:20px"></i> Adopt Me!</a></li> 
      </ul>
    </div>
  </div>
</footer>
<!-- footer section --> 

<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="{{ asset('adoptme/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('adoptme/js/jquery.flexslider-min.js')}}"></script> 
<script src="{{ asset('adoptme/js/retina.min.js')}}"></script> 
<script src="{{ asset('adoptme/js/modernizr.js')}}"></script> 
<script src="{{ asset('adoptme/js/main.js')}}"></script>
<script>
    
/* #####################################################################
   #
   #   Project       : Modal Login with jQuery Effects
   #   Author        : Rodrigo Amarante (rodrigockamarante)
   #   Version       : 1.0
   #   Created       : 07/29/2015
   #   Last Change   : 08/04/2015
   #
   ##################################################################### */
   
$(function() {
    
    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;
/*
    $("form").submit(function () {
        switch(this.id) {
            case "login-form":
                var $lg_username=$('#login_username').val();
                var $lg_password=$('#login_password').val();
                if ($lg_username == "ERROR") {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
                } else {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                }
                return false;
                break;
            case "lost-form":
                var $ls_email=$('#lost_email').val();
                if ($ls_email == "ERROR") {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Email's not registered");
                } else {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "We sent the password!");
                }
                return false;
                break;
            case "register-form":
                var $rg_username=$('#register_username').val();
                var $rg_email=$('#register_email').val();
                var $rg_password=$('#register_password').val();
                if ($rg_username == "ERROR") {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
                } else {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
                }
                return false;
                break;
            default:
                return false;
        }
        return false;
    });

    */
    
    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }
    
    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }
    
    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
        }, $msgShowTime);
    }
});
</script>
</body>
</html>