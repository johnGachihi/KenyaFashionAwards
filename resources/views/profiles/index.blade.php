@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-light text-dark text-center">PROFILES</div>
<div class="container">
	<div class="row">
		<div class="col-s2 shadow-sm p-3 mb-5 bg-white rounded" style="min-height: 100%; margin-right: 4%;">
			<a href="profiles/create">Add Profile</a>
		</div>
    <!-- Main Content Containing the Cards--> <div class="col-10" >
     @if(count($profiles) >= 1 )
    @foreach($profiles as $profile)
      <div class=" row d-flex justify-content-center">
            <div class="card-group" style="min-width: 100%">
            <div class="card" style="width: 18rem;">
             <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">{{$profile->fname}} {{$profile->lname}}</h5>
                <small>{{$profile->category}}</small>
                <div class="card-footer">
                  <table>
                    <tr>
                <td> <a href="profiles/{{$profile->id}}/edit" class="btn btn-secondary">Edit</a></td>
                <td>  {!!Form::open(['action' =>['ProfilesController@destroy', $profile->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
                 {{Form::hidden('_method', 'DELETE')}}
                 {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}</td>
                </tr></table> </div>
              </div>
            </div>
          </div>
      </div>
      <br><br>
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