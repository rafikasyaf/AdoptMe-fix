@extends('layouts.template')

@section('content')
<!-- catslogo Section --> 
<div id="catslogo">
<center><img class="catslogo" src="adoptme/images/portfolio/cats.jpg" class="img-responsive" alt="logo kucing" /></center>
<h2>MEOW</h2>
</div>

<!-- cats section -->
<section id="cats" class="section cats">
  <div class="container-fluid">
  	<div class="row">
  	@foreach($data as $v)

    <div class="row">
      <div class="col-sm-4 cats-item">
        <div class="cats-content">
		<center><img class="catsrow" src="{{asset($v->image)}}" alt="No Image"></center>
		<center>
		<h3> {{$v->name}} </h3> 
		<p> {{$v->shelter}}</p></center>
		<h4>{{$v->gender}} - {{$v->age}} months </h4>
		<ul class="actions">
			<li><center><a href="{{route('viewadopt.show',$v->id)}}" class="button">Adopt Me!</a></center></li>
		</ul>
		</div>
	</div>
		@endforeach
	</div>

	<style>
		.cats-item{
			position: relative;
			padding-right: 18px;
			padding-left: 18px;
			width: 423.683px;
		}
	</style>

@endsection