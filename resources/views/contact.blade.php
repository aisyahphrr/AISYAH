@extends('layout.main')

@section('title', 'Contact')
@section('main')
<section class="hero-wrap hero-wrap-2" style="background-image:url(images/dok4.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 pt-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Contact <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Contact us</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3>Contact us</h3>
                                <p class="mb-4">Mari berkontribusi bersama kami</p>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="text">
                                                <p><span>Address:</span>  Jl. Pecantingan, Sekardangan Indah, Sekardangan, Kabupaten Sidoarjo, Jawa Timur 61215</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="text">
                                                <p><span>Email:</span> <a
                                                        href="https://preview.colorlib.com/cdn-cgi/l/email-protection#2f464149406f56405a5d5c465b4a014c4042"><span
                                                            class="__cf_email__"
                                                            data-cfemail="3a53545c557a43554f4849534e5f14595557">[email&#160;protected]</span></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="text">
                                                <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30"
                                                    rows="4" placeholder="Create a message here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="w-100 social-media mt-5">
                                    <h3>Follow us here</h3>
                                    <p>
                                        <a href="#">@osisskomda</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <div id="map" class="bg-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
