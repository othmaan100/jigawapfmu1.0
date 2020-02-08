@extends('layout.app')
@section('content')
<h1>{{$titlea}}</h1>
        <h3> This is my Services Page</h3>
        @if(count($services) > 0)
            <ul class="list-group">
                @foreach($services as $servs)
                    <li class="list-group-item">{{$servs}}</li>
                @endforeach
            </ul>
        @endif
        
@endsection
