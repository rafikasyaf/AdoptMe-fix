@extends('layouts.template')

@section('content')
<!-- Header Section --> 

<!-- profil2 section -->
<section id="profil2" class="section profil2">
    <h2> DONATION HISTORY </h2>
  <div class="container">


    <div class="row col-md-7 col-md-offset-2 custyle">
    <!-- <div class="row style_featured"> -->


    <table>
  <tr>
    <th>Bank Account Name</th>
    <th>Bank Account Number</th>
    <th>Amount</th>
    <th>Status</th>
  </tr>
   @php($value=\App\ConfirmDonate::where('id_user',\Auth::user()->id)->get())
        @foreach($value as $v)
  <tr>
    <td>{{$v->bank_name}}</td>
    <td>{{$v->bank_number}}</td>
    <td>Rp. {{$v->amount}}</td>
    <td>{{$v->status}}</td>
  </tr>
  @endforeach 
</table>

	
   <!--  </div> -->
<!-- </div>

</div> -->
<ul>
    <br>
        <li><center><a href="profil" class="button">back</a></center></li>
    </ul>

</section>


<style>
table {
    border-collapse: collapse;
    width: 100%;
    float: center;
    margin-left:7%; 
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #6c7279;
    color: white;
}
.button {
margin-left:10%;
}

</style>




@endsection