 @extends('layouts.app')

@section('content')
	<div class="container">
	<h3> {{$profile->fname}} {{$profile->lname}}</h3>
	<br><br>
		<h6 class="text-muted">{{$profile->category}}</h6>
	<div>
		{{$profile->description}}
	</div>

	</div>
	<hr>
			<a href="{{$profile->id}}/edit" class="btn btn-primary">Edit</a></hr>
			{!!Form::open(['action' =>['ProfilesController@destroy', $profile->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
			{!!Form::close()!!}
@endsection