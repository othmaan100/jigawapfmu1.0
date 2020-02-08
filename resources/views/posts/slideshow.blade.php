<script src="{{ asset('vendor/assets/js/custome.js') }}"></script>
<link href="{{ asset('vendor/assets/css/custome.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/assets/css/custome.css') }}" rel="stylesheet">
@extends('layout.app')

@section('content')  
    
<div style="margin-top:50px;">
    <!-- Carousel
               ================================================== -->
               <div id="myCarousel" class="  carousel slide" data-ride="carousel">
                   <!-- Indicators -->
                   <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                     <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                     <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                     <li data-target="#myCarousel" data-slide-to="4" class=""></li>
                   </ol>
                   <div class="carousel-inner" role="listbox">
                     <div class="item">
                         <img class="first-slide " src="images/imgs/1.jpg" alt="First slide">
                       <div class="container">
                         <div class="carousel-caption">
                           <h1 style=" color:#fff;">PSALM 84:5</h1>
                                   <p style=" color:#fff;">How happy are those whose strength comes from you, who are eager to make the pilgrimage to Mount zion, as they pass through the dry valley of Baca, it becomes a place of springs the autumn rain fills it with pools. They go stronger as they go; they will go they will see the God of gods on zion.</p>
                                   <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Sign up Free today </a></p>
                         </div>
                       </div>
                     </div>
                     <div class="item active">
                       <img class="second-slide" src="images/imgs/2.jpg" alt="Second slide">
                       <div class="container">
                         <div class="carousel-caption">
                           <h1 style=" color:#000;">ZECHARIAH 14:16-17</h1>
                                                       <div  style="transition: none 0s ease 0s ; line-height: 32px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: -1px; font-weight: 300; font-size: 24px;"> Do you want to know where to meet us and readily get one on one talk to our <br/> wherever you are in the whole country?
                                                       <br/>
                                                       </div>
                           <p><a class="btn btn-lg btn-primary" href="#" role="button">Contact Us</a></p>
                         </div>
                       </div>
                     </div>
                     <div class="item">
                       <img class="third-slide" src="images/imgs/3.jpg" alt="Third slide">
                       <div class="container">
                         <div class="carousel-caption">
                           
                                                       <div  style="transition: none 0s ease 0s ; line-height: 32px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: -1px; font-weight: 300; font-size: 24px;"></div>
                           
                          
                         </div>
                       </div>
                     </div>
                     <div class="item">
                         <img class="first-slide " src="images/imgs/4.jpg" alt="First slide">
                       <div class="container">
                         <div class="carousel-caption">
                           <h1 style=" color:#fff;">PSALM 84:5</h1>
                                                       <p style=" color:#fff;">How happy are those whose strength comes from you, who are eager to make the pilgrimage to Mount zion, as they pass through the dry valley of Baca, it becomes a place of springs the autumn rain fills it with pools. They go stronger as they go; they will go they will see the God of gods on zion
                                                       </p>
                                                       <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Sign up Free today </a></p>
                         </div>
                       </div>
                     </div>
                     <div class="item">
                         <img class="first-slide " src="images/imgs/5.jpg" alt="First slide">
                       <div class="container">
                         <div class="carousel-caption">
                           <h1 style=" color:#fff;">ZECHARIAH 14:16-17</h1>
                                                       <p style=" color:#000;">Then all the survivors from the nations that have attacked Jerusalem will go there each year to worship the Lord Almighty as King and to celebrate the festival of shelters. If any nation refuses to go and worship the Lord Almighty as king, then rain will not fall on their land.  </p>
                                                       <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Sign up Free today </a></p>
                         </div>
                       </div>
                     </div>
                     <div class="item">
                         <img class="first-slide " src="images/imgs/2s.jpg" alt="First slide">
                       <div class="container">
                         <div class="carousel-caption">
                           <h1 style=" color:#fff;">ZECHARIAH 8:20-22</h1>
                                                       <p style=" color:#337AB7;">The Lord Almighty says, "The time is coming when people from many cities will come to Jerusalem. Those from one city will say to those from another, "We are going to worship the Lord Almighty and pray for his blessing. Come peoples and powerful nations will come to Jerusalem to worship the Lord Almighty, and to pray for his blessing</p>
                                                       <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Click to register </a></p>
                         </div>
                       </div>
                     </div>
                   </div>
                   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                   </a>
                   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                   </a>
                 </div><!-- /.carousel -->
</div>    
@endsection
<script >
    (function($) {
    $(function() {
        $('.carousel').jcarousel({
            wrap: 'circular'
        });
    });
})(jQuery)
</script>


  
    