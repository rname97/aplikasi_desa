@extends('user.layouts.master')

@section('content')

 <!-- Header -->
 {{-- <div class="header d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="fw-semibold" data-aos="fade-up">Sistem Informasi Desa Wanakerta</h1>
                <p class="text-white-50" data-aos="fade-up" data-aos-delay="300">Sistem Pelayanan Masyarakat Desa
                    Wanakerta</p>
            </div>
        </div>
    </div>
</div> --}}
{{-- <img style="height: 150px;width: 150px;" class="rounded" src="{{URL::asset('images/user/image_empty.jpg')}}"> --}}
<div class="mb-5">
<div id="home" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ URL::asset('images/bg.png')}}');height: 500px; background-position: center; background-repeat: no-repeat; background-size: 100%; padding-top: 7.75rem;">
    <div class="container text-white">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h1>Sistem Informasi Desa Wanakerta</h1>
                    <p>Sistem Pelayanan Masyarakat Desa Wanakerta</p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>

<!-- Header -->
 <!-- Visi dan Misi -->
 <div class="my-5" id="visi_misi">
    <div class="container">
            <div class="text-center">
                <h1>Visi dan Misi</h1>
                <p class="border-bottom">Berikut adalah Visi dan Misi Desa Wanakerta</p>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="card">
                        <img src="{{ URL::asset('images/visimisi.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="">
                        <h5 class="fw-bold"><u>Visi Desa Wanakerta</u></h5>
                        <br>
                        <p>
                            “Melayani Masyarakat Desa Wanakerta Secara Menyeluruh Demi Terwujudnya Desa Wanakerta Yang
                            Maju, Mandiri, Sehat Dan Sejahtera Berlandaskan Iman Dan Takwa”
                        </p>
                        <br>
                        <br>

                        <h5 class="fw-bold"><u>Misi Desa Wanakerta</u></h5>
                        <br />
                        <ol>
                            <li>Mengoptimalkan kinerja Perangkat Desa secara maksimal sesuai tugas pokok dan fungsi
                                Perangkat Desa demi tercapainya pelayanan yang baik bagi masyarakat.</li>
                            <li>Melaksanakan koordinasi antar mitra kerja.</li>
                            <li>Meningkatkan Sumber Daya Manusia dan memanfaatkan Sumber Daya Alam untuk mencapai
                                Kesejahteraan Masyarakat.</li>
                            <li>Meningkatkan Kapasitas kelembagaan yang ada di Desa Wanakerta.</li>
                            <li>Meningkatkan kualitas kesehatan Masyarakat.</li>
                            <li>Meningkatkan kesejahteraan masyarakat Desa Wanakerta dengan melibatkan secara langsung
                                masyarakat Desa Wanakerta dalam berbagai bentuk kegiatan.</li>
                            <li>Melaksanakan kegiatan pembangunan yang jujur, baik, dan transparan dan dapat
                                dipertanggungjawabkan.</li>
                        </ol>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- Visi dan Misi -->

<!-- Kelembagaan -->
<div class="my-5" id="kelembagaan_desa">
    <div class="container ">
            <div class="text-center">
                <h1>Kelembagaan Desa</h1>
                <hr>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <div class="card shadow-sm bg-white rounded">
                        <div class="card-header">
                            <span>Bagan Perangkat Desa Wanakerta</span>
                        </div>
                        <div id="baganDesaWanakerta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{ URL::asset('images/BaganPerangkatDesaWanakerta.png')}}'); background-position: center; background-repeat: no-repeat; background-size: 100%; height: 15vw;">
                            <div class="d-flex justify-content-center pt-5">
                                <button type="button" class="btn btn-primary btn-sm mt-5" onclick="$('#modalBaganPerangkatDesa').modal('show');">View Gambar</button>
                            </div>
                        </div>
                        {{-- <img class="card-img-top"  style="width: 100%; height: 15vw; object-fit: cover;" src="{{ URL::asset('images/BaganPerangkatDesaWanakerta.png')}}" alt="Card image cap" onblur="functionHover()"> --}}
                        <div class="card-body">
                            <p class="card-text">Bagan Perangkat Desa Wanakerta</p>
                            <span></span>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow-sm bg-white rounded">
                        <div class="card-header">
                            <span>Bagan BPD Wanakerta</span>
                        </div>
                        <div id="baganBPDWanakerta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{ URL::asset('images/BaganBPDWanakerta.png')}}'); background-position: center; background-repeat: no-repeat; background-size: 100%; height: 15vw;">
                            <div class="d-flex justify-content-center pt-5">
                                <button type="button" class="btn btn-primary btn-sm mt-5" onclick="$('#modalBaganBPD').modal('show');">View Gambar</button>
                            </div>
                        </div>
                        {{-- <img class="card-img-top" style="width: 100%; height: 15vw; object-fit: cover;" src="{{ URL::asset('images/BaganBPDWanakerta.png')}}" alt="Card image cap"> --}}
                        <div class="card-body">
                            <p class="card-text">Bagan Badan Permusyawaratan Desa (BPD) Wanakerta</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow-sm bg-white rounded">
                        <div class="card-header">
                            <span>Bagan LPMD Wanakerta</span>
                        </div>
                        <div id="baganLPMDWanakerta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{ URL::asset('images/BaganLPMDWanakerta.png')}}'); background-position: center; background-repeat: no-repeat; background-size: 100%; height: 15vw;">
                            <div class="d-flex justify-content-center pt-5">
                                <button type="button" class="btn btn-primary btn-sm mt-5" onclick="$('#modalBaganLPMD').modal('show');">View Gambar</button>
                            </div>
                        </div>
                        {{-- <img class="card-img-top" style="width: 100%; height: 15vw; object-fit: cover;" src="{{ URL::asset('images/BaganLPMD.png')}}" alt="Card image cap"> --}}
                        <div class="card-body">
                            <p class="card-text">Bagan Lembaga Pemberdayaan Masyarakat Desa (LPMD) Wanakerta</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5 d-flex justify-content-center">
                
                <div class="col-sm-4">
                    <div class="card shadow-sm bg-white rounded">
                        <div class="card-header">
                            <span>Bagan PSMD Wanakerta</span>
                        </div>
                        <div id="baganPSMDWanakerta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{ URL::asset('images/BaganPSMDWanakerta.png')}}'); background-position: center; background-repeat: no-repeat; background-size: 100%; height: 15vw;">
                            <div class="d-flex justify-content-center pt-5">
                                <button type="button" class="btn btn-primary btn-sm mt-5" onclick="$('#modalBaganPSMD').modal('show');">View Gambar</button>
                            </div>
                        </div>
                        {{-- <img class="card-img-top" style="width: 100%; height: 15vw; object-fit: cover;" src="{{ URL::asset('images/BaganPSMDWanakerta.png')}}" alt="Card image cap"> --}}
                        <div class="card-body">
                            <p class="card-text"> Bagan Pekerja Sosial Masyarakat Desa (PSMD) Wanakerta</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow-sm bg-white rounded">
                        <div class="card-header">
                            <span>Bagan PKKD Wanakerta</span>
                        </div>
                        <div id="baganPKKWanakerta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{ URL::asset('images/BaganPKKDWanakerta.png')}}'); background-position: center; background-repeat: no-repeat; background-size: 100%; height: 15vw;">
                            <div class="d-flex justify-content-center pt-5">
                                <button type="button" class="btn btn-primary btn-sm mt-5" onclick="$('#modalBaganPKKD').modal('show');">View Gambar</button>
                            </div>
                        </div>
                        {{-- <img class="card-img-top" style="width: 100%; height: 15vw; object-fit: cover;" src="{{ URL::asset('images/BaganPKKDWanakerta.png')}}" alt="Card image cap"> --}}
                        <div class="card-body">
                            <p class="card-text">Bagan Pemberdayaan Kesejahteraan Keluarga (PKK) Desa Wanakerta</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- Kelembagaan -->

<!-- Lokasi Desa -->
<div class="my-5" id="lokasi_desa">
    <div class="container">
        <h1 class="text-center">Lokasi Desa</h1>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    {{-- <div class="card-body"> --}}
                        <img src="{{ URL::asset('images/petawnk.png')}}" alt="" srcset="">
                    {{-- </div> --}}
                </div>
                
            </div>
            <div class="col-sm-6">
                <div class="card">
                    {{-- <div class="card-body"> --}}
                        <iframe height="300" width="100%"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d525.1174130405382!2d107.22346297505939!3d-6.3735068332367355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699e99388f3973%3A0x2f837e4a7f0e9bee!2sKantor%20Desa%20Wanakerta!5e0!3m2!1sid!2sid!4v1690259960330!5m2!1sid!2sid"
                        allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class=" text-justify">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                Desa Wanakerta merupakan bagian dari wilayah Kecamatan Telukjambe Barat sebelah Barat
                                Kecamatan berbatasan langsung dengan wilayah Kabupaten Bekasi. Dengan luas wilayah Desa
                                Wanakerta 547,835 Hektar. Dengan batas-batas wilayah sebagai berikut:
                            </p>
                            <hr>
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 align-items-start">
                                <div class="col">
                                    <h6>Batas</h6>
                                    <p>Utara <br> Selatan <br> Timur <br> Barat</p>
                                </div>
                                <div class="col">
                                    <h6>Desa</h6>
                                    <p>Wanasari <br> Wanajaya <br> Margamulya <br> Pasirranji</p>
                                </div>
                                <div class="col">
                                    <h6>Kecamatan</h6>
                                    <p>Telukjambe Barat <br> Telukjambe Barat <br> Telukjambe Barat <br> Cikarang Pusat</p>
                                </div>
                                <div class="col">
                                    <h6>Kabupaten</h6>
                                    <p>Karawang <br> Karawang <br> Karawang <br> Bekasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Lokasi Desa -->

<!-- Demografi Desa -->
<div class="my-5" id="demografi_desa">
    <div class="container">
        <h1 class="text-center">Demografi Desa</h1>
        <hr>
        <div class="card my-3">
            <div class="card-header">
                <h5>Topografi</h5>
            </div>
            <div class="card-body">
                <p>
                    Desa Wanakerta merupakan desa yang berada di dataran tinggi, dengan ketinggian +150 Meter DPL
                    (Diatas Permukaan Laut),
                    sebagian besar wilayah desa adalah lahan pertanian/sawah/ladang dengan permukaan tanah 65% datar
                    dan 25% berbukit.
                </p>
            </div>
        </div>
        <div class="card my-3">
            <div class="card-header">
                <h5>Hidrologi dan Krimatologi</h5>
            </div>
            <div class="card-body">
                <p>
                    Desa Wanakerta terletak pada ketinggiian 150 meter dari permukaan laut dengan kontur permukaan
                    tanah 65 % datar dan 25 % berbukit,
                    Desa Wanakerta terdapat Irigasi dan Sungai Cibeet, air digunakan saat kekurangan air ke sawah
                    dengan alat pompa air disaat kemarau.
                </p>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-header">
                <h5>Luas dan Sebaran Penggunaan Lahan</h5>
            </div>
            <div class="card-body">
                <p>
                    Pada umumnya lahan yang berada atau terdapat di Desa Wanakerta digunakan secara produktif,
                    karena merupakan lahan yang subur terutama untuk lahan pertanian,
                    jadi hanya sebagian kecil saja yang tidak dimanfaatkan oleh warga, hal ini pula menunjukan bahwa
                    kawasan Desa Wanakerta adalah daerah yang memiliki sumber daya alam yang memadai.
                </p>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="{{ URL::asset('images/luasdansebaranpenggunaanlahan.png')}}" alt="" srcset="">
                        <figcaption><i>Luas wilayah Penggunaan Lahan</i></figcaption>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Demografi Desa -->

<!-- Keadaan Sosial -->
<div class="my-5" id="keadaan_sosial_desa">
    <div class="container">
        <h1 class="text-center">Keadaan Sosial</h1>
        <hr>
        <div class="card my-3">
            <div class="card-header">
                <h5>Kependudukan</h5>
            </div>
            <div class="card-body">
                <p>
                    Penduduk Desa Wanakerta berdasarkan data terakhir hasil sensus Penduduk Tahun 2022 tercatat
                    sebanyak 5.398 jiwa,
                    mengenai penduduk Desa Wanakerta mengalami kenaikan untuk setiap tahunnya dengan rata-rata 0,3
                    %.
                </p>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="{{ URL::asset('images/kependudukan.png')}}" alt="" srcset="">
                        <figcaption><i>Data Kependudukan Per Tahun 2022</i></figcaption>
                        <br>
                        <img src="{{ URL::asset('images/jumlahpenduduk.png')}}" alt="" srcset="">
                        <figcaption><i>Jumlah Penduduk Desa Wanakerta</i></figcaption>
                    </div>
                </div>
            </div>
        </div>


        <div class="card my-3">
            <div class="card-header">
                <h5>Pendidikan</h5>
            </div>
            <div class="card-body">
                <p>
                    Pendidikan merupakan salah satu modal dasar pembangunan, sehingga pendidikan adalah sebuah
                    investasi (modal) dimasa yang akan datang.
                </p>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="{{ URL::asset('images/datatempatpendidikan.png')}}" alt="" srcset="">
                        <figcaption><i>Data Pendidikan/Sekolah Formal atau Non-Formal</i></figcaption>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-header">
                <h5>Kebudayaan</h5>
            </div>
            <div class="card-body">
                <p>
                    Kebudayaan yang ada di Desa Wanakerta merupakan modal dasar pembangunan yang melandasi
                    pembangunan yang akan dilaksanakan,
                    warisan budaya yang bernilai luhur merupakan dasar dalam rangka pengembangan pariwisata budaya.
                    <br>
                    <br>
                    Pemerintah terus membina kelompok dan organisasi kesenian yang ada, walupun dengan keterbatasan
                    dana yang dialokasikan,
                    namun semangat para pewaris kebudayaan di Desa Wanakerta Kecamatan Telukjambe Barat Kabupaten
                    Karawang,
                    terus merawat dan melestarikannya dengan akhir-akhir ini membentuk Ikatan Olahraga dan Seni
                    mulai dari tingkat Desa sampai Ketingkat Kabupaten Karawang.
                    Dengan memeliharanya agar kelompok-kelompok kesenian tersebut terus terpelihara.
                    <br>
                    <br>
                    Beberapa kelompok kesenian yang ada Di Desa Wanakerta yang masih eksis dan terawat adalah
                    sebagai berikut.
                </p>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="{{ URL::asset('images/budayadankesenian.png')}}" alt="" srcset="">
                        <figcaption><i>Data Budaya dan Kesenian Desa Wanakerta</i></figcaption>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-header">
                <h5>Pemuda dan Olahraga</h5>
            </div>
            <div class="card-body">
                <p>
                    Dalam hal kepemudaan, pada tahun 2022 tidak terlepas dari aktifitas dan eksistensi karang
                    taruna, baik level desa maupun level RW,
                    sedangkan jumlah anggota karang taruna aktif untuk level desa meskipun telah dibentuk sampai
                    saat ini belum memperlihatkan eksistensinya,
                    jadi hampir seluruh usia karang taruna terlibat aktif di kepengurusan tingkat RW, baik pengurus
                    aktif maupun yang tidak aktif.
                    <br>
                    <br>
                    Sedangkan organisasi keolahragaan yang ada di desa Wanakerta, cukup variatif, maupun semua
                    organisasi tersebut masih dikelola secara amatir,
                    dan hanya penyaluran kegemaran saja. Berikut ini adalah data organisasi keolahragaan Desa
                    Wanakerta.
                </p>

                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="{{ URL::asset('images/klubolahraga.png')}}" alt="" srcset="">
                        <figcaption><i>Data Klub Olahraga Desa Wanakerta</i></figcaption>
                    </div>
                </div>
            </div>
        </div>
        </div>
       
    </div>
</div>
<!-- Keadaan Sosial -->
</div>





<!-- Modal -->
<div class="modal fade" id="modalBaganPerangkatDesa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalBaganPerangkatDesa').modal('hide');">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <img class="card-img-top"  style="width: 100%;" src="{{ URL::asset('images/BaganPerangkatDesaWanakerta.png')}}" alt="Card image cap">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#modalBaganPerangkatDesa').modal('hide');">Close</button>
        </div>
    </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalBaganBPD" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalBaganBPD').modal('hide');">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <img class="card-img-top"  style="width: 100%;" src="{{ URL::asset('images/BaganBPDWanakerta.png')}}" alt="Card image cap">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#modalBaganBPD').modal('hide');">Close</button>
        </div>
    </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modalBaganLPMD" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalBaganLPMD').modal('hide');">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <img class="card-img-top"  style="width: 100%;" src="{{ URL::asset('images/BaganLPMDWanakerta.png')}}" alt="Card image cap">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#modalBaganLPMD').modal('hide');">Close</button>
        </div>
    </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalBaganPSMD" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalBaganPSMD').modal('hide');">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <img class="card-img-top"  style="width: 100%;" src="{{ URL::asset('images/BaganPSMDWanakerta.png')}}" alt="Card image cap">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#modalBaganPSMD').modal('hide');">Close</button>
        </div>
    </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalBaganPKKD" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalBaganPKKD').modal('hide');">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <img class="card-img-top"  style="width: 100%;" src="{{ URL::asset('images/BaganPKKDWanakerta.png')}}" alt="Card image cap">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#modalBaganPKKD').modal('hide');">Close</button>
        </div>
    </div>
    </div>
</div>





@endsection

@section('contentx')
<script>

    function getModalbaganDesaWanakertaModalCenter(){
        $("#baganDesaWanakertaModalCenter").modal("show");
    }

    
    
    (function($) {
    "use strict";

    /* Navbar Scripts */
    // jQuery to collapse the navbar on scroll
    $(window).on('scroll load', function() {
		if ($(".navbar").offset().top > 60) {
			$(".fixed-top").addClass("top-nav-collapse");
		} else {
			$(".fixed-top").removeClass("top-nav-collapse");
		}
    });

	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$(document).on('click', 'a.page-scroll', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 600, 'easeInOutExpo');
			event.preventDefault();
		});
    });

    // offcanvas script from Bootstrap + added element to close menu on click in small viewport
    $('[data-toggle="offcanvas"], .navbar-nav li a:not(.dropdown-toggle').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
    })

    // hover in desktop mode
    function toggleDropdown (e) {
        const _d = $(e.target).closest('.dropdown'),
            _m = $('.dropdown-menu', _d);
        setTimeout(function(){
            const shouldOpen = e.type !== 'click' && _d.is(':hover');
            _m.toggleClass('show', shouldOpen);
            _d.toggleClass('show', shouldOpen);
            $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
        }, e.type === 'mouseleave' ? 300 : 0);
    }
    $('body')
    .on('mouseenter mouseleave','.dropdown',toggleDropdown)
    .on('click', '.dropdown-menu a', toggleDropdown);


    /* Move Form Fields Label When User Types */
    // for input and textarea fields
    $("input, textarea").keyup(function(){
		if ($(this).val() != '') {
			$(this).addClass('notEmpty');
		} else {
			$(this).removeClass('notEmpty');
		}
	});


    /* Back To Top Button */
    // create the back to top button
    // $('body').prepend('<a href="body" class="back-to-top page-scroll">Back to Top</a>');
    // var amountScrolled = 700;
    // $(window).scroll(function() {
    //     if ($(window).scrollTop() > amountScrolled) {
    //         $('a.back-to-top').fadeIn('500');
    //     } else {
    //         $('a.back-to-top').fadeOut('500');
    //     }
    // });


	/* Removes Long Focus On Buttons */
	$(".button, a, button").mouseup(function() {
		$(this).blur();
	});

})(jQuery);
</script>
@endsection
