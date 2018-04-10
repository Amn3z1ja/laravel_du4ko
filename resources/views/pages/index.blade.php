@extends('layout')

@section('content')

<main>
<div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://hdwallsbox.com/wallpapers/l/1920x1080/26/nature-paradise-boats-thailand-1920x1080-25648.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://hdwallsbox.com/wallpapers/l/1920x1080/63/hills-islands-komodo-dragons-turquoise-waters-beach-1920x1080-62681.jpg" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://hdwallsbox.com/wallpapers/l/1920x1080/87/islands-landscapes-paradise-sea-1920x1080-86701.jpg" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        
            <div class="row articles-row">
                <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                    <div class="row">
                        <div class="col-sm-4 hidden-xs">
                            <a href="/article">
                                <img src="https://fthmb.tqn.com/2OSoD83OQ1hMOr_imXV98NvaRYQ=/2560x1440/filters:no_upscale()/starfish-free-beach-wallpapers-wallpapers-land-587fb9825f9b584db31e4473.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <h4>
                                <a href="/article">
                                    Title
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                    <div class="row">
                        <div class="col-sm-4 hidden-xs">
                            <a href="/article">
                                <img src="https://i.pinimg.com/originals/cf/21/4b/cf214bf92210df8c52a468529c7ac70e.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <h4>
                                <a href="/article">
                                    Title
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 small-article">
                    <div class="row">
                        <div class="col-sm-4 hidden-xs">
                            <a href="/article">
                                <img src="https://cdn.wallpapersafari.com/34/37/GutARc.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <h4>
                                <a href="index.php?page=article">
                                    Title
                                </a>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </body>
</html>
@endsection