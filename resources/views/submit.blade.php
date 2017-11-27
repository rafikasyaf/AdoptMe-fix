@extends('layouts.template')

@section('content')
<!-- Header Section --> 

<!-- contact section -->
<section id="report" class="section report">
	<div class="content">
		<h2> Submit your form</h2>
		
		
		<form class="form" method="post" action="{{route('pusat-adoptreq.store')}}" enctype="multipart/form-data">
			{{csrf_field()}}
		<p type="Pet Name:"><input name="adoptfor" placeholder="Write the name of the dog/cat you want to adopt here.." required></input></p>
		<p type="Shelter Name:" required>
				<div class="container">
					<div class="row">
						<div class="col-sm-3 nav-container">
		    				<div class="form-group">
		        				<select class="form-control nav" name="originshelter">
		            			<option value="Apollo Shelter">Apollo Shelter</option>
		            			<option value="Ares Shelter">Ares Shelter</option>
		            			<option value="Athena Shelter">Athena Shelter</option>
		            			<option value="Persephone Shelter">Persephone Shelter</option>
		        			</select>
		    				</div>
		 				</div>
					</div>
				</div>
		</p>
		<p type="Upload File:"><input type="file" name="adoptionform" accept=".docx" required></input></p>
		
		<div style="text-align:center;"><button type="submit">Submit</button></div>
		<div style="text-align:center;"><center><button><a href="profil">Back</a></button></center></div>
		</form>
	</div>
</section>

@endsection