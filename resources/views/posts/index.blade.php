@extends('layout.app')

    @section('content')

    
    <div class="container" style="margin-top:50px;">
<h2 style=" font-family:san-serif; font-size: 40px; text-shadow:-5px 5px 3px #666; letter-spacing:4px; ">  Project been carried out Updates
                    </h2> 
                    

     <div class="row">
        <div class="col-lg-8">
          <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- <i class="fa fa-clock-o fa-fw"></i> Journals lists
                        </div> -->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                            
    
    @if(count($posts)>0)
            @foreach($posts as $post )

            <div class="timeline-panel">
            <div class="timeline-heading">

            <div class="card " style="margin:5px; padding:25px;">
            <h3 ><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
            <small>written on {{$post->created_at}} </small>
            <div class="timeline-body">
            <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>
                <p>by {{ $post->user->name }}<hr/>  </p>
                <i class="fa fa-quote-right fa-3x fa-pull-right fa-border" aria-hidden="true"></i>
            </div>
            </div>
            @endforeach
            {{$posts->links()}}  <!-- Help in giving out links for paginated data-->
            
            </div>
            </div>
    @else 
            <p class="info">No post found</p>
    @endif
</div>
    @endsection
</div>
</div>
</div>
</div>


  
    





    