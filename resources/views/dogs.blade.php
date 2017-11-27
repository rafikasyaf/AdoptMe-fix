@extends('layouts.template')

@section('content')
<!-- catslogo Section --> 
<div id="catslogo">
<center><img class="catslogo" src="adoptme/images/portfolio/dogs.jpg" class="img-responsive" alt="logo kucing" /></center>
<h2>WOOF</h2>
</div>

<!-- cats section -->
<section id="cats" class="section cats">
  <div class="container-fluid">
  	@foreach($data as $v)
    <div class="row">
      <div class="col-sm-4 cats-item">
        <div class="cats-content">
		<center><img class="catsrow" src="{{asset($v->image)}}" alt="Image not found"></center>
		<center>
		<h3> {{$v->name}} </h3>
		<p> {{$v->shelter}}</p></center>
		</center>
		<h4>{{$v->gender}} - {{$v->age}} months </h4>
		<ul class="actions">
			<li><center><a href="{{route('viewadopt.show',$v->id)}}" class="button">Adopt Me!</a></center></li>
		</ul>
		</div>
	</div>
		@endforeach
	</div>
</section>

@endsection