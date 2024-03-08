<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
<style>
div.carousel-inner , div.fill{
    height:226.6px!important;
}
    </style>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="fill" src="{{asset('../images/slider1.jpg')}}">
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
            <img class="fill" src="{{asset('../images/slider2.jpg')}}">
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
            <img class="fill" src="{{asset('../images/slider3.jpg')}}">
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span style="direction:ltr" class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span style="direction:ltr" class="icon-next"></span>
        </a>
    </header>
