<div class="row">
        <div class="col-lg-8">
          <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">

                                              
                    @if(count($posts)>0)
                            @foreach($posts as $post )
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">{{$post->title}}</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> written on {{$post->created_at}} by {{{ $post->user }}}</small>
                                            </p>
                                        </div>
                                         @endforeach
                                         {{$posts->links()}} <!-- Help in giving out links for paginated data-->
                                        <div class="timeline-body">
                                        <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>
                                            <p>  </p>
                                            <i class="fa fa-quote-right fa-3x fa-pull-right fa-border" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </li>
 @else 
            <p class="info">No post found</p>
    @endif
</div>
  

                          </ul>
                          </div>
                          </div>
                          </div>
                          </div>
