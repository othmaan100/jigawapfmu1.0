@extends('layout.app')
@section('content')
    <h1>Create Post Page</h1>
    {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
    
        <div class="form-group"> 
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','Placeholder'=>'Post Title'])}}
        </div>
            <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=> 'article-ckeditor','class'=>'form-control','Placeholder'=>'Body'])}}
           
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection