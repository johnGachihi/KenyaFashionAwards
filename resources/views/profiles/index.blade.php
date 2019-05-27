@extends('layouts.app')

@section('content')
<h4 >PROFILES</h4>
<div class="container">
	<div class="row">
		<div class="col-2" style="border-right: 1px solid; padding-right: 5px;">
			<a href="profiles/create">Add Profile</a>
		</div>
    <!-- Main Content Containing the Cards--> <div class="col-10" style="margin-left: 20%">
     @if(count($profiles) >= 1 )
    @foreach($profiles as $profile)
      @if($profile->category == 'Model')
             <h4>MODELS</h4>
      <div class="row align-items-centre"> 
            <div class="card-group" style="overflow-x: scroll; min-width: 100%">
            <div class="card" style="width: 18rem;">
             <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">{{$profile->fname}} {{$profile->lname}}</h5>
                <p class="card-text">{{$profile->description}}</p>
              </div>
            </div>
          </div>
      </div>
      <br><br>
      @elseif($profile->category == 'Photographer')
              <h4>PHOTOGRAPHERS</h4>
      <div class="row">
            <div class="card-group" style="overflow-x: scroll; min-width: 100%">
            <div class="card" style="width: 18rem;">
             <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">{{$profile->fname}} {{$profile->lname}}</h5>
                <p class="card-text">{{$profile->description}}</p>
              </div>
            </div>
          </div>
      </div>
      <br><br>
      @else
              <h4>DESIGNERS</h4>
      <div class="row">
            <div class="card-group" style="overflow-x: scroll; min-width: 100%">
            <div class="card" style="width: 18rem;">
             <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">{{$profile->fname}} {{$profile->lname}}</h5>
                <p class="card-text">{{$profile->description}}</p>
              </div>
            </div>
          </div>       
      </div>
      @endif
      @endforeach
     @else
     <blockquote class="blockquote text-centre">
            <p>No Profiles Yet</p>
     </blockquote> 
     @endif
</div>
 </div>
</div>
@endsection