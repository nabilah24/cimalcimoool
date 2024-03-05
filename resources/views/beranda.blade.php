@extends('layout.master')

@section('content')
    {{-- hero --}}
    <div class="-testimonial-xxl py-5 hero-header mb-5">
        <div class="-testimonial my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                    <p class="animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                        magna dolore erat amet</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/images/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- end hero --}}

    {{-- order start --}}
    <div class="-testimonial-xxl py-5">
        <div class="-testimonial">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4 text-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('assets/images/outlet.jpg') }}" alt="" width="100px" height="100px">
                            <h2 style="margin-top: 10px">Outlet</h2>
                            <h5 class="fw-normal">Senin - Minggu</h5>
                            <p>11.30 - 21.30</p>
                            <h5 class="fw-normal">Jumat</h5>
                            <p>13.00 - 21.30</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4 text-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('assets/images/gofood.png') }}" alt="" width="100px" height="100px">
                            <h2 style="margin-top: 10px">Go Food</h2>
                            <h5 class="fw-normal">Cimal Cimol, Lowokwaru</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4 text-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('assets/images/grabfood.png') }}" alt="" width="100px"
                                height="100px">
                            <h2 style="margin-top: 10px">Grab Food</h2>
                            <h5 class="fw-normal">Cimal Cimol, Jatimulyo</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4 text-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('assets/images/shopee.png') }}" alt="" width="100px" height="100px">
                            <h2 style="margin-top: 10px">Shopee Food</h2>
                            <h5 class="fw-normal">Cimal Cimol-Lowokwaru</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- order end --}}

    {{-- about --}}
    <section class="about pt-3 pt-lg-5 pb-6 pb-lg-8" style="margin-top: -25px;" id="about">
        <div class="-testimonial text-center">
            <div class="row mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="col">
                    <div class="overflow-hidden">
                        <h2 class="fs-sm-5 mb-2" data-zanim-xs='{"duration":1.5,"delay":0}'>TENTANG KAMI
                        </h2>
                    </div>
                    <div class="overflow-hidden">
                        <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                    </div>
                </div>
            </div>
        </div>
        <div class="-testimonial-xxl py-5">
            <div class="-testimonial">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="{{ asset('assets/images/about-1.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="{{ asset('assets/images/about-2.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="{{ asset('assets/images/about-3.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="{{ asset('assets/images/about-4.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-4">Halo, selamat datang</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et
                            eos erat ipsum et lorem et sit, sed stet lorem sit. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Numquam dolores harum at reiciendis officiis dolore tenetur laudantium facilis
                            placeat recusandae natus labore aperiam illo earum doloribus voluptatibus consequuntur impedit,
                            nobis eos ducimus! Illum similique, nobis deleniti assumenda ullam, tempora eius reprehenderit
                            adipisci eum, non eligendi ducimus ab ea veniam perferendis?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about end --}}

    {{-- menu start --}}
    <section id="tranding">
        <div class="-testimonial-tranding">
            <h1 class="text-center section-heading">Menu Populer</h1>
        </div>
        <div class="container-tranding">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-food-1.jpg') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">10k</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Cimol
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-food-2.jpg') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">10k</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Cibak
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-food-3.jpg') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">12k</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Cimol Banjir
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-food-4.jpg') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">3k</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Bojot
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-food-5.jpg') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">10k</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Aci
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-food-6.jpg') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$20</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Makaroni
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-food-7.jpg') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$8</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Snack
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                </div>

                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                <a class="btn rounded-pill py-3 px-5 text-light" href="" style="background-color: #800020">Lihat semua
                    menu</a>
            </div>
        </div>
    </section>
    {{-- menu end --}}

    {{-- testimonial start --}}
    <section class="container-testimonial">
        <div class="testimonial mySwiper">
            <div class="testi-content swiper-wrapper">
                <div class="slide swiper-slide">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                        saepe provident dolorem a quaerat quo error facere nihil deleniti
                        eligendi ipsum adipisci, fugit, architecto amet asperiores
                        doloremque deserunt eum nemo.
                    </p>
                    <i class="bi bi-quote"></i>
                    <div class="details">
                        <span class="name">Marnie Lotter</span>
                        <span class="job">Web Developer</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                        saepe provident dolorem a quaerat quo error facere nihil deleniti
                        eligendi ipsum adipisci, fugit, architecto amet asperiores
                        doloremque deserunt eum nemo.
                    </p>
                    <i class="bi bi-quote"></i>
                    <div class="details">
                        <span class="name">Marnie Lotter</span>
                        <span class="job">Web Developer</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                        saepe provident dolorem a quaerat quo error facere nihil deleniti
                        eligendi ipsum adipisci, fugit, architecto amet asperiores
                        doloremque deserunt eum nemo.
                    </p>
                    <i class="bi bi-quote"></i>
                    <div class="details">
                        <span class="name">Marnie Lotter</span>
                        <span class="job">Web Developer</span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    {{-- testimonial end --}}

    {{-- contact start --}}
    <section id="contact" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h2 class="fs-md-5 text-uppercase" data-zanim-xs='{"duration":1.5,"delay":0}'>Contact Us</h2>
                    </div>
                    <div class="overflow-hidden">
                        <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>
                            we are happy to listen from you anytime</p>
                    </div>
                    <div class="overflow-hidden">
                        <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                    </div>
                </div>
            </div>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4894405374253!2d112.62180907443569!3d-7.948266579182089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629d96cb83ab3%3A0xaf7f420d67935f0c!2sJl.%20Dewandaru%20No.7%2C%20Jatimulyo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1709088591891!5m2!1sid!2sid"
                    width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jl. Dewandaru No.7 Malang</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>cimalcimoool@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 </p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>
    {{-- contact end --}}

@section('scripts')

@endsection
