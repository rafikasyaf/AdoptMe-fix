@extends('layouts.template')

@section('content')
<!-- Header Section --> 

<!-- qna section -->
<section id="qna" class="section qna">
<h2> Q n A </h2>
<ul class="faq">
  <li>
    <div class="titulo"><label for="question1">How to adopt a cat or a dog?</label></div>
    <input type="checkbox" id="question1" name="question1">
    <div class="resposta">Just click 'adopt me!' section on menu and then you choose cats or dogs category, click adopt to download the adoption form (you must logged in first). After you filled the adoption form you could upload it on your profile and waiting for us to validate your form. You could see the progress on your profile!:)</div>
  </li>
  <li>
    <div class="titulo"><label for="question2">Is there any fee for adoption?</label></div>
    <input type="checkbox" id="question2" name="question2">
    <div class="resposta">No, its 100% free! :)</div>
  </li>
  <li>
    <div class="titulo"><label for="question3">I found some stray dogs/cats what should I do?</label></div>
    <input type="checkbox" id="question3" name="question3">
    <div class="resposta">You could report a case to us by clicking 'report' section on menu and fill the form, you must logged in so we could respond your request! :)</div>
  </li>
  <li>
    <div class="titulo"><label for="question4">Can I directly come to office without making an arrangement first?</label></div>
    <input type="checkbox" id="question4" name="question4">
    <div class="resposta">Yes you can just come to our office. We are open from 9-5pm, our location is on Jln. Kusuma no 48, Yogyakarta. Don't forget bring your treats for the dogs and cats! :)</div>
  </li>
  <li>
    <div class="titulo"><label for="question5">I live outside of Yogyakarta, how I adopt a cat or dog?</label></div>
    <input type="checkbox" id="question5" name="question5">
    <div class="resposta">We're sorry we can't accept adoption outside of Yogyakarta City, but thanks for your amazing support to adopt animal! :)</div>
  </li>
</ul>

</section>
<div class="qnah2"><h2> Couldn't find your question? <a href="{{url('contact')}}">Contact us</a>!</h2></div>


@endsection