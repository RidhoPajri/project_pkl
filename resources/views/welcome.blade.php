@extends('layouts.frontend')

@section('content')
<section class="hero hero-style-two pos-rel pb-55">
                <div class="hero-bg wow fadeInUp" data-wow-delay="500ms" data-wow-duration=".5s" data-background="{{asset('frontend/assets/img/bg/hero_bg.png')}}"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero__content style-3 text-center">
                               <h1 class="title wow fadeInUp" data-wow-delay="0ms" data-wow-duration=".5s">Selamat Datang Di Habits Hive
                                <span class="xb-title--typewriter">
                                    <span class="xb-item--text is-active">Nyaman</span>
                                    <span class="xb-item--text">Mudah</span>
                                    <span class="xb-item--text">Gratis</span>
                                </span>
                            </h1>
                               <div class="shape mb-30 wow fadeInUp" data-wow-delay="100ms" data-wow-duration=".5s">
                                    <img src="{{asset('frontend/assets/img/shape/h_line_shape.png')}}" alt="">
                               </div>
                                <p class="mb-30 wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".5s">Aplikasi Yang Membuat Jadwal Agar Lebih Teratur Dan Membaik <br> Ayo Jelajahi Tentang Kami</p>
                                <div class="btns wow fadeInUp" data-wow-delay="300ms" data-wow-duration=".5s">
                                    {{-- <a class="thm-btn thm-btn--gradient style-2" href="#!">Get a demo</a>
                                    <a class="thm-btn thm-btn--outline style-2" href="#!">View pricing</a> --}}
                                </div>
                                <br>
                                <br>
                                <div class="hero-image mt-90 wow fadeInUp" data-wow-delay="400ms" data-wow-duration=".5s">
                                    <img src="{{asset('frontend/assets/img/hero/moal.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="crm-hero__shape">
                    <div class="shape shape--1" data-parallax='{"y" : 80}'>
                        <img class="wow fadeInLeft" src="{{asset('frontend/assets/img/shape/h_shape6.png')}}" alt="">
                    </div>
                    <div class="shape shape--2">
                        <img src="{{asset('frontend/assets/img/shape/h_shape7.png')}}" alt="">
                    </div>
                    <div class="shape shape--3" data-parallax='{"y" : 70}'>
                        <img class=" wow fadeInRight" src="{{asset('frontend/assets/img/shape/h_shape8.png')}}" alt="">
                    </div>
                    <div class="shape shape--4">
                        <img src="{{asset('frontend/assets/img/shape/h_shape9.png')}}" alt="">
                    </div>
                </div>
            </section>
            <!-- hero start -->

            <!-- feature start -->
            {{-- <section id="feature" class="crm-feature pos-rel pt-70 pb-140">
                <div class="container">
                    <div class="crm-feature__title text-center mb-60">
                        Powerful features
                    </div>
                    <div class="row justify-content-center mt-none-20">
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{asset('frontend/assets/img/icon/ft_01.svg')}}" alt="">
                                </div>
                                <h3>User Information</h3>
                                <p>Hey there, fellow employees! Welcome to our</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{asset('frontend/assets/img/icon/ft_02.svg')}}" alt="">
                                </div>
                                <h3>Deal Tracking</h3>
                                <p>Hey there, fellow employees! Welcome to our</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{asset('frontend/assets/img/icon/ft_03.svg')}}" alt="">
                                </div>
                                <h3>Pipeline Management</h3>
                                <p>Hey there, fellow employees! Welcome to our</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{asset('frontend/assets/img/icon/ft_04.svg')}}" alt="">
                                </div>
                                <h3>Reporting Dashboard</h3>
                                <p>Hey there, fellow employees! Welcome to our</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{asset('frontend/assets/img/icon/ft_05.svg')}}" alt="">
                                </div>
                                <h3>Meeting Scheduling</h3>
                                <p>Hey there, fellow employees! Welcome to our</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{asset('frontend/assets/img/icon/ft_06.svg')}}" alt="">
                                </div>
                                <h3>Email Tracking</h3>
                                <p>Hey there, fellow employees! Welcome to our</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mt-20">
                            <div class="crm-feature__item">
                                <div class="icon mb-40">
                                    <img src="{{asset('frontend/assets/img/icon/ft_07.svg')}}" alt="">
                                </div>
                                <h3>Deal and Tech Data Tracking</h3>
                                <p>Hey there, fellow employees! Welcome to our</p>
                                <div class="ft_icon">
                                    <img src="{{asset('frontend/assets/img/icon/ft_icon.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="crm-feature__shape">
                    <div class="shape shape--1" data-parallax='{"y" : 70}'>
                        <img src="{{asset('frontend/assets/img/shape/ft_shape1.png')}}" alt="">
                    </div>
                    <div class="shape shape--2" data-parallax='{"y" : 80}'>
                        <img src="{{asset('frontend/assets/img/shape/ft_shape2.png')}}" alt="">
                    </div>
                </div>
            </section> --}}
            <!-- feature end -->

            <!-- process start -->
            <section id="process" class="process pos-rel pb-120">
                <div class="process__shape">
                    <div class="shape shape--1" data-parallax='{"x" : 70}'>
                        <img src="{{asset('frontend/assets/img/shape/pr_shape1.png')}}" alt="">
                    </div>
                    <div class="shape shape--2">
                        <img src="{{asset('frontend/assets/img/shape/pr_shape2.png')}}" alt="">
                    </div>
                    <div class="shape shape--3" data-parallax='{"y" : 80}'>
                        <img src="{{asset('frontend/assets/img/shape/pr_shape3.png')}}" alt="">
                    </div>
                </div>
                <div class="container">
                    <div class="crm-title text-center mb-60">
                        <h2 class="crm-title__heading">Tentang Waktu <br></h2>
                    </div>
                    <div class="process__wrap ul_li_between">
                        <div class="process__title mt-30">
                            <h3 class="title">Apa Itu Waktu? <br></h3>
                            <p>Waktu atau masa menurut Kamus Besar Bahasa Indonesia (1996) adalah seluruh rangkaian yang berproses dengan keadaan dalam kehidupan.[1] Dalam hal ini, skala waktu merupakan interval antara dua buah keadaan/kejadian, atau bisa merupakan lama berlangsungnya suatu kejadian</p>
                            {{-- <div class="mt-35">
                                <a class="thm-btn thm-btn--gradient style-2" href="#!">Learn More</a>
                            </div> --}}
                        </div>
                        <div class="process__ss mt-30">
                            <img src="{{asset('frontend/assets/img/process/baleg.png')}}" alt="">
                        </div>
                    </div>
                    <div class="row g-38 mt-10">
                        <div class="col-lg-5 mt-30">
                            <div class="process__app-item">
                                <div class="text-center">
                                    <img src="{{asset('frontend/assets/img/process/pikir.jpg')}}" alt="">
                                </div>
                                <div class="process__title mt-40">
                                    <h3 class="title">Mengapa Kita Harus Menggatur Jadwal Dan Waktu?</h3>
                                    <p>Salah satu alasan penting memiliki jadwal harian adalah membuat hidup lebih terstruktur. Dengan jadwal harian, PP Professional dapat amemahami alur yang harus dikerjakan setiap harinya, dari pagi hingga malam. Dapat mengatur dari yang terpenting hingga yang paling tidak penting</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt-30">
                            <div class="process__app-item style-2">
                                <div class="process__title mb-30">
                                    <h3 class="title">Tujuan</h3>
                                    <p>Manajemen waktu yang baik dapat membantumu menyelesaikan lebih banyak pekerjaan dalam waktu singkat. Kamu pun akan lebih fokus pada pekerjaan penting dan mendelegasikan tugas yang kurang penting. </p>
                                </div>
                                <div class="text-center">
                                    <img src="{{asset('frontend/assets/img/process/lol.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="process__button mt-60">
                        <div class="btns text-center">
                            <a class="thm-btn thm-btn--gradient style-2" href="#!">Get Started Today</a>
                            <a class="thm-btn thm-btn--outline style-2" href="#!">Browse all Features</a>
                        </div>
                    </div> --}}
                    {{-- <div class="row pt-150 pt-xs-90">
                        <div class="col-12">
                            <div class="process__area">
                                <div class="process__top ul_li_between mt-none-30">
                                    <div class="crm-title mt-30">
                                        <h2 class="crm-title__heading mb-15">Transparent, audited, and open source</h2>
                                        <p>Torem ipsum dolor sit amet consectetur. scelerisque eget quis. </p>
                                        <div class="mt-40">
                                            <a class="thm-btn thm-btn--gradient style-2" href="#!">Browse all feature</a>
                                        </div>
                                    </div>
                                    <div class="image mt-30">
                                        <img src="{{asset('frontend/assets/img/process/img_04.png')}}" alt="">
                                    </div>
                                </div> --}}
                                <div class="row g-26 mt-10">
                                    <div class="col-lg-6 mt-30">
                                        <div class="process__app-item style-3">
                                            <div class="process__title process__title--lg mb-30">
                                                <h3 class="title">Mudah</h3>
                                                <p>Mudah Dalam Membuat jadwal Dan Waktu<br>Agar Lebih Baik</p>
                                            </div>
                                            {{-- <div class="text-center">
                                                <img src="{{asset('frontend/assets/img/process/img_05.png')}}" alt="">
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-30">
                                        <div class="process__app-item style-3">
                                            <div class="process__title process__title--lg mb-30">
                                                <h3 class="title">Nyaman</h3>
                                                <p>Nyaman Dalam Menggunakan Web Ini<br> </p>
                                            </div>
                                            {{-- <div class="text-center">
                                                <img src="{{asset('frontend/assets/img/process/img_06.png')}}" alt="">
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-30">
                                        <div class="process__app-item style-3">
                                            <div class="process__title process__title--lg mb-30">
                                                <h3 class="title">Aman</h3>
                                                <p>Aplikasi ini Terjamin Aman Bagi Pengguna<br> </p>
                                            </div>
                                            {{-- <div class="text-center">
                                                <img src="{{asset('frontend/assets/img/process/img_06.png')}}" alt="">
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-30">
                                        <div class="process__app-item style-3">
                                            <div class="process__title process__title--lg mb-30">
                                                <h3 class="title">Cepat</h3>
                                                <p>Aplikasi Ini Cepat Dan Tidak Ngeleg Atau Bag<br> </p>
                                            </div>
                                            {{-- <div class="text-center">
                                                <img src="{{asset('frontend/assets/img/process/img_06.png')}}" alt="">
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- process end -->

            {{-- artikel --}}
            

            {{-- end --}}

            <!-- testimonial start -->
            <section class="crm-testimonial pos-rel pb-80">
                <div class="container">
                    <div class="crm-title text-center mb-60">
                        <h2 class="crm-title__heading">Our happy customer <br> feedback</h2>
                    </div>
                </div>
                <div class="crm-testimonial__slide swiper-container">
                    <div class="swiper-wrapper">
                        <div class="crm-testimonial__item swiper-slide">
                            <div class="rating mb-40">
                                <img src="{{asset('frontend/assets/img/icon/rating.png')}}" alt="">
                            </div>
                            <p>Since implementing ABC CRM service in our organization, we have experienced a remarkable transformation in our customer management practices. The platform's intuitive interface and powerful automation tools have revolutionized the way we interact</p>
                            <div class="crm-testimonial__author ul_li_center text-start mt-45">
                                <div class="avatar">
                                    <img src="{{asset('frontend/assets/img/avatar/tm_avatar1.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Florida Campain</h4>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                            <div class="quote">
                                <img src="{{asset('frontend/assets/img/icon/quote-2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="crm-testimonial__item swiper-slide">
                            <div class="rating mb-40">
                                <img src="{{asset('frontend/assets/img/icon/rating.png')}}" alt="">
                            </div>
                            <p>I have been using XYZ CRM service for over a year now, and I am extremely satisfied with the results. The platform is user-friendly, making it easy for me and my team to manage our customer relationships efficiently way of this ways. </p>
                            <div class="crm-testimonial__author ul_li_center text-start mt-45">
                                <div class="avatar">
                                    <img src="{{asset('frontend/assets/img/avatar/tm_avatar2.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Florida Campain</h4>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                            <div class="quote">
                                <img src="{{asset('frontend/assets/img/icon/quote-2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="crm-testimonial__item swiper-slide">
                            <div class="rating mb-40">
                                <img src="{{asset('frontend/assets/img/icon/rating.png')}}" alt="">
                            </div>
                            <p>I cannot imagine running my business without PQR CRM service. It has become an indispensable tool in managing our customer relationships. The ability to centralize all customer data and communication in one place has saved us countless.</p>
                            <div class="crm-testimonial__author ul_li_center text-start mt-45">
                                <div class="avatar">
                                    <img src="{{asset('frontend/assets/img/avatar/tm_avatar3.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Florida Campain</h4>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                            <div class="quote">
                                <img src="{{asset('frontend/assets/img/icon/quote-2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="crm-testimonial__item swiper-slide">
                            <div class="rating mb-40">
                                <img src="{{asset('frontend/assets/img/icon/rating.png')}}" alt="">
                            </div>
                            <p>I have been using XYZ CRM service for over a year now, and I am extremely satisfied with the results. The platform is user-friendly, making it easy for me and my team to manage our customer relationships efficiently way of this ways. </p>
                            <div class="crm-testimonial__author ul_li_center text-start mt-45">
                                <div class="avatar">
                                    <img src="{{asset('frontend/assets/img/avatar/tm_avatar1.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4>Florida Campain</h4>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                            <div class="quote">
                                <img src="{{asset('frontend/assets/img/icon/quote-2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="crm-testimonial__shape">
                    <div class="shape shape--1">
                        <img src="{{asset('frontend/assets/img/shape/tm_shape1.png')}}" alt="">
                    </div>
                    <div class="shape shape--2" data-parallax='{"y" : 80}'>
                        <img src="{{asset('frontend/assets/img/shape/tm_shape2.png')}}" alt="">
                    </div>
                </div>
            </section>
            @endsection