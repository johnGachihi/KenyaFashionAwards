@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="jumbotron">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container" style="padding-bottom: 10px">
                    <a href="articles/create" class="btn btn-primary">Add Article</a>
                </div>
                <div class="panel-header"> <h5 class="text-muted">My Articles</h5></div>
                    <div class="panel-body">
                        @if(count($articles) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        @foreach($articles as $article)
                        <tr>
                            <td scope="row">{{$article->title}}</td>
                            <td><a href="/articles/{{$article->id}}/edit" class="btn btn-secondary">Edit</a></td>
                            <td>{!!Form::open(['action' =>['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                            {!!Form::close()!!}</td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p>No Articles Added</p>
                    @endif
                </div>
                </div>
            
        </div>
    </div>
</div>
@endsection
