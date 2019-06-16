@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-light text-dark text-center">Articles</div>
<div class="container">
	<div class="col-s2 shadow-sm p-3 mb-5 bg-white rounded" style="min-height: 100%; margin-right: 0%;">
			<a href="articles/create">Add Articles</a>
	</div>
	<div class="col-10" >
	@if(count($articles) >= 1)
		@foreach($articles as $article)
		<div class="card">
			<div class="row">
				<!-- <div class="col-md-4 col-sm-4">
					<img style="width: 100%" src="storage/cover_image/{{$article->cover_image}}">
				</div> -->
				<div class="col-md-8 col-sm-8">
					<h3 class="my-4"><a href="articles/{{$article->id}}">{{$article->title}}</a></h3>
				<p class="lead">Written on {{$article->created_at}} by {{$article->user->name}}</p>
				</div>
			</div>
		</div>
		      <br><br>
		@endforeach
		{{$articles->links()}}
    </div>

	@else
		<p>No Articles posted</p>
	@endif
</div>   
@endsection