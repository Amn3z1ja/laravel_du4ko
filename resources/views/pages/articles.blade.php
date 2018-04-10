@extends('layout')

@section('content')

<main>
        <div class="container">
            <div class="row breadcrumbs">
                <div class="col-sm-12">
                    <a href="/">Home</a>
                    <span class="seperator">></span>
                    <span class="current-page">Articles</span>
                </div>
            </div> <!-- .breadcrumbs -->
            

            <div class="row medium-article">
                <div class="col-xs-12 col-sm-3">
                    <a href="/article">
                        <img src="https://wallpaperscraft.com/image/thailand_tropical_beach_boats_90874_1920x1080.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <h4>
                        <a href="/article">
                            Thailand
                        </a>
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                    </p>
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>
            </div> <!-- medium-article -->
            <div class="row medium-article">
                <div class="col-xs-12 col-sm-3">
                    <a href="/article">
                        <img src="https://wallpaperscraft.com/image/indonesia_island_java_volcano_bromo_hills_altitude_blue_pink_sky_clouds_90613_2048x1365.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <h4>
                        <a href="index.php?page=article">
                            Indonesia
                        </a>
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                    </p>
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>
            </div> <!-- medium-article -->
            <div class="row medium-article">
                <div class="col-xs-12 col-sm-3">
                    <a href="/article">
                        <img src="https://wallpaperscraft.com/image/greece_falls_rocks_guy_back_stones_60899_2600x1600.jpg" alt="">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <h4>
                        <a href="/article">
                           Greece
                        </a>
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                    </p>
                </div>
                <div class="col-xs-12">
                    <hr>
                </div>
            </div> <!-- medium-article -->
            <div class="row paging-row">
                <div class="col-md-12">
                    <ul class="paging">
                        <li>
                            <a href="/articles"><<</a>
                        </li>
                        <li>
                            <a href="/articles">1</a>
                        </li>
                        <li>
                            <a href="/articles">2</a>
                        </li>
                        <li class="active">
                            <a href="/articles">3</a>
                        </li>
                        <li>
                            <a href="/articles">4</a>
                        </li>
                        <li>
                            <a href="/articles">5</a>
                        </li>
                        <li>
                            <a href="/articles">>></a>
                        </li>

                    </ul>
                </div>
            </div><!-- paging-row -->
            
        </div>
    </main>
</body>
</html>
@endsection