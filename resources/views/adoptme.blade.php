@extends('layouts.template')

@section('content')
<!-- adoptme section -->
<section id="adoptme" class="section adoptme">
  <div class="container-fluid">
  <div class "content">
  <h1>WOULD YOU CHOOSE</h1> </div>
    <div class="row">
      <div class="col-sm-5 adoptme-item"> <a href="cats" class="adoptme-link">
        <div class="caption">
          <div class="caption-content">
            <h3>CATS</h3>
          </div>
        </div>
		
        <img src="adoptme/images/portfolio/cats.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-2"> 
			<div class="or">
            <h1>OR</h1>
          </div>
        </div>
      <div class="col-sm-5 adoptme-item"> <a href="dogs" class="adoptme-link">
        <div class="caption">
          <div class="caption-content">
            <h3>DOGS</h3>
          </div>
        </div>
        <img src="adoptme/images/portfolio/dogs.jpg" class="img-responsive" alt=""> </a> </div>
      
    </div>
  </div>
</section>

@endsection