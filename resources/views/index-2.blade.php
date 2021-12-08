@extends('layout.main')

@section('title', 'Dashboard')
@section('main')
<section class="slider-hero">
    <div class="overlay"></div>
    <div class="hero-slider">
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center js-fullheight"
                    style="background-image:url(images/49.jpg)">
                    <div class="container-xl">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-xl-6">
                                <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                    <h2>OSIS SMK Telkom Sidoarjo</h2>
                                    <p class="mb-5">OSIS SMK Telkom Sidoarjo sebagai wadah bagi peserta didik di sekolah untuk mencapai tujuan pembinaan dan 
                                        pengembangan siswa yang sesuai dengan visi-misi sekolah. Pengurus OSIS adalah peserta didik yang dipilih berdasarkan prestasi, 
                                        dan keaktifan peserta didik di lingkungan sekolah</p>
                                    <p><a href="#" class="btn btn-primary px-5 py-3">Info Selanjutnya <span
                                                class="ion ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center justify-content-center js-fullheight"
                    style="background-image:url(images/osis2.jpg)">
                    <div class="container-xl">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-xl-6">
                                <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                    <h2>OSIS &amp; SMK Telkom Sidoarjo</h2>
                                    <p class="mb-5">OSIS SMK Telkom Sidoarjo dibentuk dengan tujuan pokok : 
                                        Menghimpun ide, pemikiran, bakat, kreativitas, serta minat para siswa ke dalam salah satu wadah yang bebas
                                        dari berbagai macam pengaruh negative dari luar sekolah.</p>
                                    <p><a href="#" class="btn btn-primary px-5 py-3">Info Selengkapnya <span
                                                class="ion ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="work">
                <div class="img d-flex align-items-center justify-content-center js-fullheight"
                    style="background-image:url(images/osis3.jpg)">
                    <div class="container-xl">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-xl-6">
                                <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                    <h2>OSIS SMK Telkom Sidoajo</h2>
                                    <p class="mb-5">Apa peran OSIS di sekolah?
                                        peranan sebagai berikut: 1. Sebagai wadah , OSIS menjadi wadah dalam melatih kepemimpinan siswa melalui ektrakurikuler. 
                                        2. Sebagai penggerak dan motivator, OSIS menjadi perangsang lahirnya keinginan, partisipasi untuk berbuat,
                                         pendorong kegiatan bersama untuk mencapai tujuan.</p>
                                    <p><a href="#" class="btn btn-primary px-5 py-3">Pelajari Selengkapnya <span
                                                class="ion ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ftco-search d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap d-flex justify-content-center">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                    role="tab" aria-controls="v-pills-1" aria-selected="true">Program Kerja</a>
                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-nextgen-tab">
                                    <form action="#" class="search-property-1">
                                        <div class="row g-0">
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">Program Kerja </label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-search"></span></div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Keyword">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Jenis Proker</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="fa fa-chevron-down"></span>
                                                            </div>
                                                            <select name="" id="" class="form-control">
                                                                <option value="">Olahraga</option>
                                                                <option value="">Seni Budaya</option>
                                                                <option value="">Sosial</option>
                                                                <option value="">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">Divisi</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="fa fa-chevron-down"></span>
                                                            </div>
                                                            <select name="" id="" class="form-control">
                                                                <option value="">Badan Pengurus Harian</option>
                                                                <option value="">Kadiv Prestasi & Olahraga</option>
                                                                <option value="">Kadiv Keimanan & Ketaqwaan</option>
                                                                <option value="">Kadiv Kebangsaan & Bela Negara</option>
                                                                <option value="">Kadiv Ketertiban</option>
                                                                <option value="">Kadiv Kesehatan</option>
                                                                <option value="">Kadiv Lingkungan</option>
                                                                <option value="">Kadiv Seni Budaya</option>
                                                                <option value="">Kadiv Kewirausahaan</option>
                                                                <option value="">Kadiv TIK</option>
                                                                <option value="">Kadiv Bahasa</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">OSIS SMK Telkom Sidoarjo</span>
                <h2 class="mb-4">Explore Event Bergengsi OSIS SKOMDA</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row g-1 mb-1">
                    <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <a href="#" class="services">
                            <div class="icon"><span class="flaticon-architect"></span></div>
                            <div class="text">
                                <h2>SKOMDA ACT 2021</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <a href="#" class="services">
                            <div class="icon"><span class="flaticon-architect"></span></div>
                            <div class="text">
                                <h2>MPLS 2021</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="1000">
                        <a href="#" class="services">
                            <div class="icon"><span class="flaticon-apartment"></span></div>
                            <div class="text">
                                <h2>DIES NATALIS KE II</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="1000">
                        <a href="#" class="services">
                            <div class="icon"><span class="flaticon-factory"></span></div>
                            <div class="text">
                                <h2>FESTIVAL BULAN BAHASA</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                        <ul class="places-list">
                            <li>
                                <a href="#">
                                    Perekrutan OSIS
                                    <span>Badan Pengurus Harian</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    SKOMDA ACT
                                    <span>Kadiv Prestasi & Olahraga</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Isra' Miraj
                                    <span>Kadiv Keimanan & Keatqwaan</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    SKOMDA Berbagi
                                    <span>Badan Pengurus Harian</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <ul class="places-list">
                            <li>
                                <a href="#">
                                    SATGAS COVID
                                    <span>Kadiv Kesehatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Lingkungan Hidup
                                    <span>Kadiv Lingkungan</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    MPLS 2021
                                    <span>Badan Pengurus Harian</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Tahun Baru Islam
                                    <span>Kadiv Keimanan & Ketaqwaan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                        <ul class="places-list">
                            <li>
                                <a href="#">
                                    Peringatan Hari Kemerdekaan
                                    <span>Kadiv Prestasi & Olahraga</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Dies Natalis 2
                                    <span>Badan Pengurus Harian</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Maulid Nabi Muhammad
                                    <span>Kadiv Keimanan & Ketaqwaan</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Festival Bulan Bahasa 2021
                                    <span>Kadiv Bahasa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">Karya</span>
                <h2 class="mb-4">Karya Siswa Siswi SKOMDA</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="property-wrap">
                    <a href="#" class="img img-property"
                    style="background-image:url(images/aqsa.jfif)">
                    <p class="price"><span class="orig-price">Poster Digital</span></p>
                    </a>
                    <div class="text">
                        <div class="list-team d-flex align-items-center mb-4">
                            <div class="d-flex align-items-center">
                                <div class="img"
                                    style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                                </div>
                                <h3 class="ml-2">Aqsa Herry P</h3>
                            </div>
                            <span class="text-right">XI TJA 6</span>
                        </div>
                        <h3><a href="#">Keterangan...</a></h3>
                        <span class="location"><i class="ion-ios-pin"></i> Indonesia <span
                                class="sale">2 jam yang lalu</span></span>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="property-wrap">
                    <a href="#" class="img img-property"
                    style="background-image:url(images/rizky.jfif)"> 
                        <p class="price"><span class="orig-price">Poster Digital</span></p>
                    </a>
                    <div class="text">
                        <div class="list-team d-flex align-items-center mb-4">
                            <div class="d-flex align-items-center">
                                <div class="img"
                                    style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                                </div>
                                <h3 class="ml-2">Rizky Libradi</h3>
                            </div>
                            <span class="text-right">XI TJA 1</span>
                        </div>
                        <h3><a href="#">Keterangan....</a></h3>
                        <span class="location"><i class="ion-ios-pin"></i> Indonesia<span
                                class="sale">3 jam yang lalu</span></span>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="property-wrap">
                    <a href="#" class="img img-property"
                    style="background-image:url(images/devin.jpeg)">
                    <p class="price"><span class="orig-price">Fotografi</span></p>
                    </a>
                    <div class="text">
                        <div class="list-team d-flex align-items-center mb-4">
                            <div class="d-flex align-items-center">
                                <div class="img"
                                    style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                                </div>
                                <h3 class="ml-2">Devin Wahyu Wijaya</h3>
                            </div>
                            <span class="text-right">XI TJA 1</span>
                        </div>
                        <h3><a href="#">Keterangan...</a></h3>
                        <span class="location"><i class="ion-ios-pin"></i> Indonesia <span
                                class="sale">7 jam yang lalu</span></span>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="property-wrap">
                    <a href="#" class="img img-property" style="background-image: url(images/karya2.jpg);">
                        <p class="price"><span class="orig-price">Fotografi</span></p>
                    </a>
                    <div class="text">
                        <div class="list-team d-flex align-items-center mb-4">
                            <div class="d-flex align-items-center">
                                <div class="img"
                                    style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                                </div>
                                <h3 class="ml-2">Hana Fitria</h3>
                            </div>
                            <span class="text-right">XI TJA</span>
                        </div>
                        <h3><a href="#">Keterangann....</a></h3>
                        <span class="location"><i class="ion-ios-pin"></i> Indonesia <span
                                class="rent">2 hari yang lalu</span></span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="img vid-section" style="background-image:url(images/finalgame.jfif)">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-6 vid-height d-flex align-items-center justify-content-center text-center">
                <div class="video-wrap" data-aos="fade-up">
                    <h3>DIES NATALIS KE 2 SMK TELKOM SIDOARJO</h3>
                    <a href="https://vimeo.com/115041822"
                        class="video-icon glightbox d-flex align-items-center justify-content-center">
                        <span class="ion-ios-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-about-section">
    <div class="container-xl">
        <div class="row g-xl-5">
            <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <div class="img w-100" style="background-image:url(images/osis6.jpg)">
                </div>
            </div>
            <div class="col-md-8 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <span class="subheading">About Us</span>
                <h2 class="mb-4">OSIS SMK Telkom Sidoarjo</h2>
                <p>OSIS sebagai wadah bagi peserta didik di sekolah untuk mencapai tujuan pembinaan dan pengembangan siswa yang sesuai dengan visi-misi sekolah. 
                    Pengurus OSIS adalah peserta didik yang dipilih berdasarkan prestasi, dan keaktifan peserta didik di lingkungan sekolah.</p>
                <div class="row py-5">
                    <div class="col-md-6 col-lg-3">
                        <div class="counter-wrap" data-aos="fade-up" data-aos-duration="1000">
                            <div class="text">
                                <span class="d-block number gradient-text"><span id="count1" class="counter"
                                    data-count="2020">0</span></span>
                                    <p>Tahun Periode</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                <div class="text">
                                    <span class="d-block number gradient-text"><span id="count2" class="counter"
                                            data-count="10">0</span></span>
                                    <p>Jumlah Divisi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <div class="text">
                                    <span class="d-block number gradient-text"><span id="count2" class="counter"
                                            data-count="35"></span></span>
                                    <p>Jumlah anggota OSIS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                <div class="text">
                                    <span class="d-block number gradient-text"><span id="count2" class="counter"
                                            data-count="12">0</span></span>
                                    <p>Total Event</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img img-2" style="background-image:url(images/osis3.jpg)"
                    data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-intro ftco-no-pt ftco-no-pb img"
    style="background-image:url(images/osis2.jpg)">
    <div class="overlay"></div>
    <div class="container-xl py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <div>
                            <h1 class="mb-0">Mari Berkontribusi Bersama Kami</h1>
                            <p>Mari Berkontribusi Bersama Kami</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <p class="mb-0"><a href="#" class="btn btn-black py-3 px-4">Get in touch</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section testimony-section bg-light">
    <div class="container-xl">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Komentar & Saran Siswa</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="carousel-testimony">
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4 msg">Ketik Saran...</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                                    </div>
                                    <div class="pl-3 tx">
                                        <p class="name">Ketik Nama...</p>
                                        <span class="position">Ketik Kelas...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4 msg">Selamat pagi semuanya, aku mau bagiin informasi lomba olimpiade MTK. 
                                    Info lebih jelasnya japri aku ya.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image:url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg)">
                                    </div>
                                    <div class="pl-3 tx">
                                        <p class="name">Aak Junika Hariani</p>
                                        <span class="position">XI TJA 1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4 msg">PENGUMUMAN!. Untuk festival bulan bahasa akan ditayangkan di youtube SMK Telkom Sidoarjo. 
                                    Stay Tuned ya.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image:url(images/person_3.jpg)"></div>
                                    <div class="pl-3 tx">
                                        <p class="name">Syahwadita Kristian Atmaja</p>
                                        <span class="position">XI TJA 1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4 msg">Hai semuanya, aku dinda. Dengan website OSIS ini, 
                                    semuanya dapat saling bertukar informasi dengan mudah yaa.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                                    </div>
                                    <div class="pl-3 tx">
                                        <p class="name">Adinda Jasmine Aurelia</p>
                                        <span class="position">XI TJA 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></div>
                            <div class="text">
                                <p class="mb-4 msg">Selamat pagi rek. Bagi yang ikut serta dalam olompiade sains, 
                                    tgl 30 sore kumpul di aula ya. Terima kasih</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image:url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg)">
                                    </div>
                                    <div class="pl-3 tx">
                                        <p class="name">Nabila</p>
                                        <span class="position">XI TJA 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-agent ftco-no-pb">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section heading-section-white" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">Mading Siswa</span>
                <h2 class="mb-4">Informasi Event</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="agent">
                    <div class="img">
                        <img src="images/diesnat.png" class="img-fluid"
                        alt="Colorlib Template">
                </div>
                <div class="desc">
                    <p class="h-info"><span class="position">Eksternal</span></p> 
                    <h3><a href="properties.html">Dies Natalis 2 SMK Telkom Sidoarjo</a></h3>
                        <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-google"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="agent">
                    <div class="img">
                        <img src="images/skomdaact.png" class="img-fluid"
                        alt="Colorlib Template">
                </div>
                <div class="desc">
                    <p class="h-info"><span class="position">Eksternal</span></p>
                    <h3><a href="properties.html">SKOMDA ACT 2021</a></h3>
                        <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-google"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="agent">
                    <div class="img">
                        <img src="images/bulba.png" class="img-fluid"
                            alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Internal</span></p>
                        <h3><a href="properties.html">Festival Bulan Bahasa 2021</a></h3>
                        <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-google"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="agent">
                    <div class="img">
                        <img src="images/agustusan.png" class="img-fluid"
                            alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <p class="h-info"><span class="position">Internal</span></p>
                        <h3><a href="properties.html">Peringatan Hari Kemerdekaan</a></h3>
                        <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-google"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container-xl">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">OSIS</span>
                <h2>Tim Dibalik Website OSIS SKOMDA</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="100">
                    <a href="blog-single.html" class="block-20 img d-flex align-items-end"
                        style="background-image:url(images/ais1.jfif)">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                        <h3 class="heading mb-3"><a href="#">FRONT END</a></h3>
                        <p>Aisyah Putri  Harmelia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <a href="blog-single.html" class="block-20 img d-flex align-items-end"
                        style="background-image:url(images/seril.jfif)">
                    </a>
                    <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                        <h3 class="heading mb-3"><a href="#">BACK END</a></h3>
                        <p>Alzena Cheiryl Violney.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-gallery">
    <div class="container-xl-fluid">
        <div class="row g-0">
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <a href="images/gallery-1.jpg"
                    class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                    style="background-image: url(images/dok1.jpg);">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <a href="images/gallery-1.jpg"
                    class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                    style="background-image:url(images/dok2.jpg)">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <a href="images/gallery-3.jpg"
                    class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                    style="background-image:url(images/dok3.jpg)">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <a href="images/gallery-4.jpg"
                    class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                    style="background-image: url(images/dok4.jpg);">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                <a href="images/gallery-5.jpg"
                    class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                    style="background-image:url(images/dok5.jpg)">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></div>
                </a>
            </div>
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <a href="images/gallery-6.jpg"
                    class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                    style="background-image: url(images/dok6.jpg);">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-search"></span></div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
