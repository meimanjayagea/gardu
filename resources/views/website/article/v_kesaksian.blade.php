@extends('website.layouts.apps')
@section('content')
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="row">
                <div class="col-md-12 blog-main">
                    <h3 class="pb-3 mb-4 font-italic border-bottom">
                        Article
                    </h3>
                    <div class="col-md-12 blog-post">
                        <h2 class="blog-post-title">Dalam Kesesakan Pertolongan Tuhan Sangat Terbukti.</h2>
                        <p>Sabtu, 30 Juni 2018 | 06:51</p><br>
                        <div class="d-block justify-content-center pb-2 text-center">
                            <img height="420px" width="700px" src="{{asset('img/5.jpg')}}" alt="logo">
                        </div>
                        <b>
                            <p></p>
                        </b>
                        <p class="text-justify">Nama saya adalah Desmil Andayanti Samaloisal, saya
                            biasa dipanggil Desmil. Saya lahir di Silaloinan, Mentawai 17
                            Desember 2003. Saya berasal dari Pulau Mentawai yang baru
                            saja menamatkan pendidikan SMP di SMP Negeri 1 Sidora. Puji
                            Tuhan saya sangat berterimakasih dan bersyukur karena saya
                            bisa sekolah di Jogja. Saya memiliki kedua orang tua. Keluarga
                            saya tinggal di mentawai dalam keadaan hidup yang biasa-biasa
                            saja dan sangat sederhana. Ibu saya bekerja sebagai ibu rumah tangga sedangkan ayah saya
                            bekerja sebagai seorang petani. Tetapi saya selalu berusaha untuk yang terbaik dan tidak
                            putus asa agar saya bisa menjadi yang berguna. Terlebih khusus saya sangat berterimakasih
                            kepada orang tua saya mereka selalu membimbing dan menasehati saya dengan baik agar
                            jadi orang yang berguna. Orang tua saya selalu berusaha memberikan semangat kepada
                            saya untuk bersekolah di Jogja agar saya bisa lebih berubah dan yang lebih baik lagi serta
                            bisa menyelesaikan sekolah di Jogja ini. Inilah kesaksian hidup saya, sekian dan terimakasih
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        @include('website.article.sidebar')
    </div>
</main>




@endsection
