@extends('layouts.template')

@section('content')
<!-- Slider Section -->
<section id="header-slider" class="section">
  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img src="adoptme/images/slider/dogs.jpg" alt="Chania">
      </div>
      <div class="item"> <img src="adoptme/images/slider/cats.jpg" alt="Chania">
      </div>
    </div>
    <!-- Controls --> 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span></a></div>
</section>
<!-- Slider Section --> 
 <h1 style="font-family : Digory Doodles;"> Read Our Blog </h1>
 


<!-- blog section -->
<section id="blog" class="section blog">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 blog-item">
        <div class="blog-content">
		<h2> Misconceptions About Adoption </h2>
		<p> 	<strong>Myth #1: I don’t know what I’m getting</strong>
		There may in fact be more information available about an adoptable pet than one from a breeder or pet store. Many of the pets posted on Petfinder are in foster care. Foster parents live with their charges 24-7 and can often tell you, in detail, about the pet’s personality and habits If the pet is at a shelter, the staff or volunteers may be able to tell you what he or she is like. At the very least, you can ask the staff if the pet was an owner surrender (rather than a stray) and . . .
 </p>
		<ul class="actions">
								<li><center><a href="blog" class="button">Read More</a></center></li>
							</ul>
		</div>
		</div>
		<div class="col-sm-6 blog-item">
        <div class="blog-content">
		<h2> Why Adopt Instead of Buying A Pet </h2>
		<p> 	Extending your family is an important decision that you want to do right, which is why there’s no better place for making an addition to your family than at an animal shelter. Most people think animal shelters are full of animals that aren’t purebred, healthy, or they’re all old. However, that is not the case at all because shelters are full of animals that are healthy, friendly, and just waiting to live in their forever, loving home – don’t rule out the mixed breeds and older pets. If you’re one of the people who still believe that buying fro . . . </p>
		<ul class="actions">
								<li><center><a href="#" class="button">Read More</a></center></li>
							</ul>
		</div>
		</div>
		<div class="col-sm-6 blog-item">
        <div class="blog-content">
		<h2> Why You Should Adopt</h2>
		<p> 	Thinking about taking home a new furry friend? Here's why you should head to a local animal shelter to adopt during Clear the Shelters on August 19.
		Pets can help you maintain an active lifestyle. It's important to take good care of a pet, but pets can also take care of their owners, providing both physical and mental health benefits. Because pets require a lot of attention, especially dogs, who need to go outside every few hours, owners have a reason to get off the couch and be active. What Kind of Dog Should You Adopt? . . . </p>
		<ul class="actions">
								<li><center><a href="#" class="button">Read More</a></center></li>
							</ul>
		</div>
		</div>
		<div class="col-sm-6 blog-item">
        <div class="blog-content">
		<h2> Kittens or Puppies? </h2>
		<p> 	At first glance, those roly-poly balls of love known as kittens and puppies seem very similar. But, as your furbabies grow, you'll experience some critical differences, especially in behavior, grooming and potty training.
		<strong>Behavior</strong>
		Cats and dogs are different: It's part of our everyday language. People "fight like cats and dogs" and are "cat people" or "dog people." What this comes down to is basic behavioral differences programmed by millions of years of evolution. Dogs are social animals. As descendants of wolves, dogs are . . .  	 </p>
		<ul class="actions">
								<li><center><a href="#" class="button">Read More</a></center></li>
							</ul>
		</div>
		</div>
		
	</div>
	</div>
</section>


<!-- footer section --> 

@endsection