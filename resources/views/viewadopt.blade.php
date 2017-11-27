@extends('layouts.template')

@section('content')

<!-- viewblog section -->


<section id="viewadopt" class="section viewadopt">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3" class= "caption1"> 
		<img src="{{asset($data->image)}}" class="img-responsive" alt="no picture" /></div>
		<div class="col-sm-9" class="caption2">
			<h2> {{$data->name}} </h2>
			<h3> {{$data->gender}} </h3>
			<h3> {{$data->age}} months </h3></br>
			<ul class="actions">
				<li><a href="{{url('tc')}}" class="button">Adopt Me!</a></li>
			</ul>
		</div>

        </div>
	
    </div>
</section>

		<div class="caption3">
			<table>
				<col width="25%">
				<col width="75%">
				<tr>
					<th>ORIGIN SHELTER:</th>
					<th>{{$data->shelter}}</th>
				</tr>
				<tr>
					<th>VACCINATED:</th>
					<th>{{$data->vaccinated}}</th>
				</tr>
				<tr>
					<th>NEUTERED/SPAYED:</th>
					<th>{{$data->spayed}}</th>
				</tr>
				<tr>
					<td colspan="2"><strong>MEDICAL NOTE & CONSIDERATION</strong></br>
					{{$data->health}}
					</td>
				</tr>
				<tr>
					<td colspan="2"><strong>STORY</strong></br>
					{{$data->story}}
					</td>
				</tr>
			</table>
			
		</div>

@endsection