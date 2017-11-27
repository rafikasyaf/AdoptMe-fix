@extends('layouts.template')

@section('content')
<!-- Header Section --> 

<!-- profil section -->
<section id="profil" class="section profil">
  <div class="container-fluid">
    <div class="row">
    	@php($value=\App\User::find(\Auth::user()->id))
      <div class="col-sm-3" class= "caption-profil"> 
      	<img class="img-box" src="{{asset('adoptme/images/kittenpuppy.jpg')}}" alt="Image not found">
		</div>	
		<div class="col-sm-9" class="caption-profil2">
			<table>
				<col width="25%">
				<col width="75%">
				<tr>
					<th> USERNAME </th>
					<th> {{$value->username}}</th>
				</tr>
				<tr>
					<th> NAME </th>
					<th> {{$value->name}}</th>
				</tr>
				<tr>
					<th> EMAIL </th>
					<th> {{$value->email}} </th>
				</tr>
				<tr>
					<th> PHONE NUMBER </th>
					<th> {{$value->phonenumb}} </th>
				</tr>
				<tr>
					<td colspan="2"><strong><a href="profil2">ADOPTION HISTORY</a></strong>
					</td>
				</tr>
				<tr>
					<td colspan="2"><strong><a href="donationhistory">DONATION HISTORY</a></strong>
					</td>
				</tr>
			</table>
		</div>
        </div>
    </div>
</section>

<div class="caption-profil3">
	<ul>
		<li><center><a href="submit" class="button">Submit Adoption Form</a></center></li>
	</ul>
	<ul>
		<li><center><a href="confirmdonate" class="button">Confirm Your Donation</a></center></li>
	</ul>
</div>



@endsection