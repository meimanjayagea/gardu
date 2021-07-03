<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="{{'/'}}" class="text-decoration-none"><img class="second-slide mr-2"
                    height="30px" width="30px" src="{{asset('img/logo.jpg')}}" alt="logo">Yayasan Garam Dunia</a></h1>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{ Request::path() === '/' ? 'active' : ''}}">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="drop-down"><a href="#">About Gardu</a>
                    <ul>
                        <li><a href="{{url('/about')}}">Visi Misi</a></li>
                        <li><a href="#">Kepengurusan Gardu</a></li>
                        <li><a href="#">Program</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Dokumentasi</a>
                    <ul>
                        <li><a href="{{url('/galery')}}">Galeri</a></li>
                        <li><a href="{{url('/article')}}">Article</a></li>
                        <li><a href="#">Program</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="{{url('/event')}}">Event</a>
                    <ul>
                        <li><a href="#">Past Event</a></li>
                        <li><a href="#">Up Coming Event</a></li>
                    </ul>
                </li>
                
                <li class="{{ Request::path() === '/contact' ? 'active' : ''}}">
                    <a href="{{url('/contact')}}">Contact</a>
                </li>


            </ul>
        </nav><!-- .nav-menu -->
        <a href="https://api.whatsapp.com/send?phone=+6285328134520" class="get-started-btn scrollto">Donasi</a>
        <a class=" get-started-btn scrollto" title="Whatsapp Yayasan Gardu"
                            href="https://api.whatsapp.com/send?phone=+6285328134520">Chat</span></a>

    </div>
</header><!-- End Header -->

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{asset('img/1.jpg')}}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <img class="second-slide " height="110px" width="100px" src="{{asset('img/logo.jpg')}}"
                            alt="logo">
                        <h1>YAYASAN GARAM DUNIA</h1>
                        <p> Layanilah seorang akan yang lain, sesuai dengan karunia yang telah diperoleh
                            tiap-tiap orang sebagai pengurus yang baik dari kasih karunia Allah.<br> | I Petrus 4 : 10
                        </p>
                        <a class="btn btn-success" title="Whatsapp Yayasan Gardu"
                            href="https://api.whatsapp.com/send?phone=+6282387405917"> Chat with us!</span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{asset('img/2.jpg')}}" alt="Second slide">

            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{asset('img/3.jpg')}}" alt="Third slide">
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