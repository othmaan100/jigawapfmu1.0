@extends('layout.app')
@section('content')
    <a class="btn btn-secondary" href="/posts">Go back</a>
    <div class="card" style="margin:5px; padding:25px;">
        <h3>{{$pstshow->title}}</h3>
        <p> {!!$pstshow->body!!}</p>
        <hr/>
    <small>wirtten on {{$pstshow->created_at}} by {{ $pstshow->user->name}}</small>
       <hr/>

       <div class="row">

       
     <!--  <a class="btn btn-secondary btn-md  col-md-2" href="/posts/{{$pstshow->id}}/edit" >Edit</a>
       
        {!!Form::open(['action'=>['PostsController@destroy',$pstshow->id], 'method'=>'POST', 'Class'=>'ml-auto float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
       {!!Form::close()!!} -->
    </div>
    </div>
    
    
@endsection