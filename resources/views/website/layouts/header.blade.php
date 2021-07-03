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
                <li class="drop-down"><a href="#">Tentang Gardu</a>
                    <ul>
                        <li><a href="{{url('tentang')}}">Visi Misi</a></li>
                        <li><a href="{{url('pengurus')}}">Kepengurusan Gardu</a></li>
                        <li><a href="#">Program</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">Dokumentasi</a>
                    <ul>
                        <li><a href="{{url('galery')}}">Galeri</a></li>
                        <li><a href="{{url('article')}}">Artikel</a></li>
                        <li><a href="#">Program</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="{{url('event')}}">Event</a>
                    <ul>
                        <li><a href="#">Event yang lalu</a></li>
                        <li><a href="#">Event yang akan datang</a></li>
                    </ul>
                </li>
                
                <li class="{{ Request::path() === 'contact' ? 'active' : ''}}">
                    <a href="{{url('contact')}}">Kontak</a>
                </li>


            </ul>
        </nav><!-- .nav-menu -->
        <a href="https://wa.link/qlqliv" class="get-started-btn scrollto">Donasi</a>
     </div>
</header><!-- End Header -->
