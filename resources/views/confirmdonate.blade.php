@extends('layouts.template')

@section('content')
<section id="report" class="section report">
	<div class="content">
		<h2> Confirm your donate</h2>
		
		
		<form class="form" method="post" action="{{route('pusat-donate.store')}}" enctype="multipart/form-data">
			{{csrf_field()}}
		<p type="Bank account number:"><input name="bank_number" placeholder="Write your bank account number here.." required></input></p>
		<p type="Bank account name:"><input name="bank_name" placeholder="Write your bank account name here.." required></input></p>
		<p type="Amount:"><input name="amount" placeholder="Write the transfer amount.." required></input></p>
		<p type="Upload image:"><input type="file" name="image" accept="image/*" required></input></p>
		
		<div style="text-align:center;"><button type="submit">submit</button></div>
		<div style="text-align:center;"><center><button><a href="profil">Back</a></button></center></div>
		</form>
	</div>
</section>

@endsection