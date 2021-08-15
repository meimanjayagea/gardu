<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide img-fluid" src="{{asset('img/utama.jpg')}}" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <a class="btn btn-lg btn-success" title="Whatsapp Yayasan Gardu"
                            href="https://wa.link/qlqliv">Hubungi kami!</span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide img-fluid" src="{{asset('img/2.jpg')}}" alt="">
            </div>
            <div class="carousel-item">
                <img class="third-slide img-fluid" src="{{asset('img/3.jpg')}}" alt="">
            </div>
        </div>
        
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>