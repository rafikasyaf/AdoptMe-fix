@extends('layouts.template')

@section('content')
<!-- Header Section --> 

<!-- contact section -->
<section id="contact" class="section contact">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<div class="row">
	<div class="content">
	<div class="col-sm-4">
		<h2> Office Location </h2>
		<h4> Jln. Kusuma no.53, Yogyakarta </h4>
		</br>
		<h2> Keepin' Touch </h2>
		<h4> Email: hello@adoptme.com </h4>
		<h4> Phone: +62516436 </h4>
		</br>
		<h2> Social Media </h2>
		<ul class="footer-share">
		<li><a href="instagram.com"><i class="fa fa-instagram" style="font-size:20px"> @adoptme</i></a></li>
		<li><a href="facebook.com"><i class="fa fa-twitter"style="font-size:25px"></i> @adoptme</a></li>
        <li><a href="twitter.coms"><i class="fa fa-facebook"style="font-size:25px"></i> Adopt Me!</a></li>
	</div>
	</div>
	<div class="col-sm-8">
		<h3><center> Send Us A Hi! </center> </h3>
		<form class="form" method="post" action="{{route('pusat-message.store')}}" enctype="multipart/form-data">
			{{csrf_field()}}
		<!-- <h2>SAY SOMETHING TO US</h2> -->
		<p type="Name:"><input placeholder="Write your name here.." name="name" required></input></p>
		<p type="Email:"><input placeholder="Let us know how to contact you back.." name="email" required></input></p>
		<p type="Message:"><input placeholder="What would you like to tell/ask us.." name="message" required></input></p>
		<div style="text-align:center;"><button>Send Message</button></div>
		</form>
	</div>
	
	</div>
</section>
<!-- form section -->



@endsection