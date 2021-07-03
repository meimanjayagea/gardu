@extends('website.layouts.apps')
@section('content')
<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                <img src="{{asset('img/ido.jpg')}}" class="img-fluid" alt="IDO Mentor" height="100px" width="150px">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                <img src="" class="img-fluid" alt="IDO Mentor">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                <img src="" class="img-fluid" alt="IDO Mentor">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                <img src="" class="img-fluid" alt="IDO Mentor">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                <img src="" class="img-fluid" alt="IDO Mentor">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                <img src="g" class="img-fluid" alt="IDO Mentor">
            </div>
        </div>
    </div>
</section><!-- End Clients Section -->

<div class="container mt-2">
    <div class="row" data-aos="fade-down">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"><a href="{{url('/article')}}">Article</a></strong>
                    <h5 class="mb-0">
                        <a class="text-dark" href="{{url('/view')}}">Perlindungan Tuhan begitu
                            Dahsyat</a>
                    </h5>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">Setiap manusia pasti memiliki masalah dalam hidup entah susah karena
                        ekonomi, pekerjaan, rumah-tangga, teman, sakit penyakit ataupun masalah lainnya.</p>
                    <a href="{{url('/view')}}">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="{{asset('img/ar1.jpg')}}"
                    alt="Card image cap" height="300px" width="200px">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success"><a href="{{url('/article')}}">Article</a></strong>
                    <h5 class="mb-0">
                        <a class="text-dark" href="{{url('/view')}}">Penyerahan Diri Kepada Tuhan</a>
                    </h5>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text mb-auto">Setiap manusia pasti memiliki masalah dalam hidup entah susah karena
                        ekonomi, pekerjaan, rumah-tangga, teman, sakit penyakit ataupun masalah lainnya.</p>
                    <a href="{{url('/view')}}">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="{{asset('img/ar2.jpg')}}"
                    alt="Card image cap" height="300px" width="200px">
            </div>
        </div>
    </div>
</div>

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">
        <div class="text-center">
            <h3>Mari Saling Berpegangan Tangan</h3>
            <p><em>Ibrani 13:16</em> Dan janganlah kamu lupa berbuat baik dan memberi bantuan, sebab korban-korban yang
                demikianlah yang berkenan kepada Allah.</p>
            <p><em>Lukas 6:38</em> Berilah dan kamu akan diberi: suatu takaran yang baik, yang dipadatkan, yang
                digoncang dan yang tumpah ke luar akan dicurahkan ke dalam ribaanmu. Sebab ukuran yang kamu pakai untuk
                mengukur, akan diukurkan kepadamu.</p>
            <a class="cta-btn" href="#">DONASI</a>
        </div>
    </div>
</section><!-- End Cta Section -->
<!--Kegiatan-->
<main role="main">
    <div class="album py-5 bg-light" data-aos="fade-up">
        <div class="container">

            <div class="row">
                <div class="col-md-3" >
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('img/5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('/view')}}" class="btn btn-sm btn-outline-secondary">Read
                                        more</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('img/5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('/view')}}" class="btn btn-sm btn-outline-secondary">Read
                                        more</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('img/5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('/view')}}" class="btn btn-sm btn-outline-secondary">Read
                                        more</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('img/5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('e/view')}}" class="btn btn-sm btn-outline-secondary">Read
                                        more</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('img/5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('/view')}}" class="btn btn-sm btn-outline-secondary">Read
                                        more</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('img/5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('/view')}}" class="btn btn-sm btn-outline-secondary">Read
                                        more</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('img/5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('/view')}}" class="btn btn-sm btn-outline-secondary">Read
                                        more</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('img/5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('/view')}}" class="btn btn-sm btn-outline-secondary">Read
                                        more</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kesaksian</h2>
                <p>Kesaksian adalah saksi rohani, yang diberikan oleh Roh Kudus, mengenai kebenaran Injil. Ketika kita
                    memberikan kesaksian, kita menyatakan kepada orang lain apa yang kita tahu benar melalui kuasa Roh.
                    berikut
                    kesaksian anak-anak yayasan garam dunia.
                </p>
            </div>

            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Nama saya adalah Desmil Andayanti Samaloisal, saya
                        biasa dipanggil Desmil. Saya lahir di Silaloinan, Mentawai 17
                        Desember 2003. Saya berasal dari Pulau Mentawai yang baru
                        saja menamatkan pendidikan SMP di SMP Negeri 1 Sidora.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Desmil Andayanti Samaloisal</h3>
                    <h4>Anak Asuh</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Nama saya Sarlina Saerejen biasa dipanggil Sar atau
                        Lina. Saya lahir di Stobyak 17 April 2002. Saya berasal dari
                        Mentawai. Saya menamatkan pendidikan terakhir di SMP 3
                        Siberut Utara dan masuk SMA di Jogja.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sarlina Saerejen</h3>
                    <h4>Anak Asuh</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Saya adalah seorang anak perempuan yang bernama
                        Ariana Tri Kezia Buluaro, saya biasa dipanggil dengan sebutan
                        Kezia. Saya lahir di Onaya Pulau Tello pada tanggal 01 Maret
                        2003, dan saya adalah anak ketiga dari tiga bersaudara.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Ariana Tri Kezia Buluaro</h3>
                    <h4>Anak Asuh</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Nama saya Depni Novela biasanya dipanggil Depni.
                        Tempat lahir saya di Limat, 4 November 2002. Asal saya dari
                        Kalimantan Barat, saya di ajak oleh tante saya ke Mentawai
                        makanya saya bisa bergabung dengan teman-teman dari
                        Mentawai.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Depni Novela</h3>
                    <h4>Anak Asuh</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Nama saya Sumita Taileleu biasa dipanggil Sumita.
                        Saya anak ke-5 dari 5 bersaudara. Saya dilahirkan dari keluarga
                        yang sangat sederhana, namun demikian saya sangat bersyukur,
                        karena saya memiliki orang tua yang lengkap dan yang mengajari
                        saya agar saya selalu takut akan Tuhan.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>Sumita Taileleu</h3>
                    <h4>Anak Asuh</h4>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up">2</span>
                        <p>Pengawas</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up">3</span>
                        <p>Pembina</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up">8</span>
                        <p>Pengurus</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-toggle="counter-up">27</span>
                        <p>Anak Asuh</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counts Section -->

</main>
<!-- /.Kegiatan -->
@endsection
