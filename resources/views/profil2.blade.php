@extends('layouts.template')

@section('content')
<!-- Header Section --> 

<!-- profil2 section -->
<section id="profil2" class="section profil2">
    <h2> ADOPTION HISTORY </h2>
  <div class="container">
     <div class="row style_featured">
         
         @foreach($data as $v)
    <div class="col-md-4">
                <div>
                    <img src="{{asset($v->image)}}" alt="" class="img-rounded img-thumbnail">
                    <h2>{{$v->adoptfor}}</h2>
                    <p style="text-align: left;">
                        Origin Shelter: {{$v->originshelter}}
                    </p>
                    <p style="text-align: left;">
                       Adoption Status: {{$v->status}}
                    </p>
                </div>
            </div>
            @endforeach  
            </div>



    <ul>
        <li><center><a href="profil" class="button">back</a></center></li>
    </ul>

</div>

</section>



<style>
.style_featured{
    padding: 20px 0;
    text-align: center;
}
.style_featured > div > div{
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
    transition: 0.5s;
}
.style_featured > div:hover > div{
    background: #e6e6e6;
}
</style>



@endsection