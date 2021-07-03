@extends('website.layouts.apps')

@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                About
            </h3>
        </div>
        <div class="col-md-12 blog-post">
            <div class="d-block justify-content-center pb-2 text-center">
                <img height="120px" width="100px" src="{{asset('img/logo.jpg')}}" alt="logo">
                <p class="py-3">Logo Yayasan Garam Dunia</p>
            </div>
            <h2 class="blog-post-title">Yayasan Garam Dunia</h2>
            <p class="text-justify">Yayasan Garam Dunia merupakan yayasan non profit yang bergerak dibidang sosial
                dan pendidikan. Bermula dari kegiatan mahasiswa Universitas Kristen Immanuel dibidang
                kerohanian yang berkonsentrasi pada pemuridan mahasiswa baru, dibawah organisasi
                Immanuel Discipleship Outreach (IDO). Dengan Visi dan Misi sebagai berikut :</p>
            <hr>
            <h2 class="blog-post-title">Visi</h2>
            <p class="text-justify">“Bersatu padu dengan Masyarakat untuk mewujudkan kehidupan yang damai dan
                sejahtera.”</p>
            <h2 class="blog-post-title">Misi</h2>
            <Ol>
                <li>
                    <p class="text-justify">Memberdayakan masyarakat untuk mengembangkan potensi dan sumber daya yang
                        ada bagi kesejahteraan masyarakat.</p>
                </li>
                <li>
                    <p class="text-justify">Memfasilitasi generasi muda untuk mengembangkan diri supaya menjadi pribadi
                        yang
                        unggul dan berintegritas..</p>
                </li>
                <li>
                    <p class="text-justify">Membentuk generasi muda yang bertumbuh, berkarakter, dan berbuah.</p>
                </li>
                <li>
                    <p class="text-justify">Memberdayakan masyarakat untuk mengembangkan potensi dan sumber daya yang
                        ada bagi kesejahteraan masyarakat.</p>
                </li>
            </Ol>

            <p class="text-justify">Seiring berjalannya waktu, Yayasan Gardu menjalin kerjasama dengan SMA Immanuel
                Yogyakarta dalam bidang pendidikan dan pengembangan diri siswa. Kerjasama tersebut
                diwujudkan dengan pelayanan berupa panti asuhan, dengan tujuan agar SMA Immanuel
                Yogyakarta tidak kekurangan peserta didik. Dengan adanya tambahan siswa dari luar Pulau
                Jawa diharapkan para siswa SMA Immanuel dapat dilayani secara rohani dan jasmani melalui
                panti asuhan tersebut.</p>
            <hr>
            <h2 class="blog-post-title">Tujuan</h2>
            <p class="text-justify">Dalam membina dan mengembangkan generasi muda memerlukan adanya perhatian
                khusus agar semua dapat berjalan dengan baik. Dalam pelaksanaannya, kami merasa masih
                sangat terbatas untuk memenuhi semua kebutuhan demi berjalannya panti asuhan tersebut,
                mulai dari tempat pembinaan dan juga biaya akomodasi tiap harinya. Maka dari itu, proposal
                ini dibuat dengan tujuan untuk menjalin kerjasama dengan pihak-pihak yang dapat membantu
                pelayanan panti asuhan tersebut.</p>
        </div>
    </div>
</div>

<hr>
<!-- profile Pengurus -->
    <div class="container marketing py-5">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center py-3">
            <h2 class="blog-post-title">
                Struktural Kepengurusan Yayasan Garam Dunia
            </h2>
            </div>
            <div class="col-md-12 d-flex justify-content-center py-3">

                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/pengawas1.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Pengawas </h4>
                    <p>Maryam Agus Purwanti, Amd.Kep. </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/default.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Pengawas </h4>
                    <p>Chelsea Geordinansea, SE. </p>
                </div><!-- /.col-lg-4 -->
            </div>

            <div class="col-md-12 d-flex justify-content-center py-3">
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/Pembina1.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Pembina</h4>
                    <p>Dafid Siswo Hariyono, SST.Par., M.Pd.K.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/pembina2.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Pembina</h4>
                    <p>Liefson Jacobus, S.Si., M.Sc.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/default.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Pembina</h4>
                    <p>Handra Siagian, SE., M.Th.</p>
                </div><!-- /.col-lg-4 -->
            </div>

            <div class="row d-flex justify-content-center py-3">
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/ketua.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Ketua</h4>
                    <p> Agusteli Lahagu, S.Si.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/wakilketua.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Wakil Ketua</h4>
                    <p>Pieter Very Setiawan, S.Sn.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle" src="{{asset('img/sekretaris.jpg')}}" 
                    alt="Generic placeholder image"
                        width="140" height="140">
                    <h4>Sekretaris</h4>
                    <p>Meiman Jaya Gea, S.Kom. </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/bendahara1.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Bendahara</h4>
                    <p>Grecella Ovelya Saselah, SE.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/default.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                        <h4>Bendahara</h4>
                    <p>Fian Martino Widiantoro,SE.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/SieKerohaniandanPembinaAsrama.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                        <h4>Sie Kerohanian dan Pembina Asrama</h4>
                    <p>Kevin Satoko</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/SiePerlengkapandanlain-lain.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Sie Perlengkapan dan lain-lain</h4>
                    <p>Aktor Juang Laowo, ST.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3 text-center">
                    <img class="rounded-circle"
                        src="{{asset('img/default.jpg')}}"
                        alt="Generic placeholder image" width="140" height="140">
                    <h4>Sie Perlengkapan dan lain-lain</h4>
                    <p>Best Pakpahan </p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div><!-- /.row -->
    </div>
<!-- /.profile Pengurus -->
@endsection
