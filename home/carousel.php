<div class="carousel slide" id="carousel_main" data-ride="carousel">
    <!-- indicator  -->
    <ol class="carousel-indicators">
        <li data-target="#carousel_main" data-slide-to="0" class="active"></li>
        <li data-target="#carousel_main" data-slide-to="1"></li>
        <li data-target="#carousel_main" data-slide-to="2"></li>
    </ol>
    <!-- my images -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner2.jpg" alt=""/>
            <div class="carousel-caption">
                <h3 class="animated zoomIn"> Wow. this is awesome</h3>
                <p class="animated fadeInUpBig">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pbanner.jpg" alt=""/>
            <div class="carousel-caption">
                <h3 class="animated fadeInLeftBig"> Wow. this is awesome</h3>
                <p class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/Training.jpg" alt=""/>
            <div class="carousel-caption">
                <h3 class="animated fadeInDownBig"> Wow. this is awesome</h3>
                <p class="animated bounceInRight">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <!-- my buttons -->
    <a href="#carousel_main" class="carousel-control-prev" data-slide="prev">
        <span class="fa fa-chevron-left"></span>
    </a>
    <a href="#carousel_main" class="carousel-control-next" data-slide="next">
        <span class="fa fa-chevron-right"></span>
    </a>
</div>
<style media="screen">
    img{
       
    }
    #carousel_main .carousel-caption h3{
        animation-delay: .5s;
    }
    #carousel_main .carousel-caption p{
        animation-delay: .75s;
    }
    #carousel_main .carousel-control-next,#carousel_main .carousel-control-prev{
        color: #0b97cc;
        font-size: 40px;
        opacity: 1;
    }
    #carousel_main img{
         height: 450px;
        width:100%;
            filter: grayscale(0.1) brightness(79%);
    }
    #carousel_main .carousel-caption h3{
        color: #05063c;
    }
    #carousel_main .carousel-caption p{
        color: #fff;
    }
</style>