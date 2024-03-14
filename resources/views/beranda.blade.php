@extends('layout.master')

@section('content')
    {{-- hero --}}
    <div class="-testimonial-xxl py-5 hero-header mb-5">
        <div class="-testimonial my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                    <p class="animated slideInLeft mb-4 pb-2">Selamat datang di Cimalcimol, tempat di mana kenikmatan bertemu dengan kreasi! Nikmati berbagai macam camilan lezat dan inovatif kami yang pasti akan memanjakan lidah Anda. Selamat menikmati!
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/images/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- end hero --}}

    {{-- order start --}}
    <div class="-marketplace py-9">
        <div class="-marketplace">
            <div class="row g-2">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" style="height: auto;">
                    <div class="marketplace-item rounded pt-3">
                        <a href="https://g.co/kgs/z5gqR3H" target="_blank" rel="noopener noreferrer" style="color: black; text-decoration: none;">
                            <div class="p-4 text-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle"
                                    src="{{ asset('assets/images/outlet.jpg') }}" alt="" width="80px" height="80px">
                                <h4 style="margin-top: 10px">Outlet</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="marketplace-item rounded pt-3">
                        <a href="https://gofood.link/a/KLgpw5k" target="_blank" rel="noopener noreferrer" style="color: black; text-decoration: none;">
                            <div class="p-4 text-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle"
                                    src="{{ asset('assets/images/gofood.png') }}" alt="" width="80px" height="80px">
                                <h4 style="margin-top: 10px">Go Food</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="marketplace-item rounded pt-3">
                        <a href="https://r.grab.com/g/6-20240312_162107_abee3d6021eeb716_MEXMPS-6-C2B3MCN2VKXXHE" target="_blank" rel="noopener noreferrer" style="color: black; text-decoration: none;">
                            <div class="p-4 text-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle"
                                    src="{{ asset('assets/images/grabfood.png') }}" alt="" width="80px" height="80px">
                                <h4 style="margin-top: 10px">Grab Food</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="marketplace-item rounded pt-3">
                        <a href="https://shopee.co.id/universal-link/now-food/shop/1283940?deep_and_deferred=1&shareChannel=copy_link" target="_blank" rel="noopener noreferrer" style="color: black; text-decoration: none;">
                            <div class="p-4 text-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle"
                                    src="{{ asset('assets/images/shopee.png') }}" alt="" width="80px" height="80px">
                                <h4 style="margin-top: 10px">Shopee Food</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- order end --}}

    {{-- popular menu --}}
    {{--  <section class="about pt-3 pt-lg-5 pb-6 pb-lg-8" style="margin-top: -25px;" id="about">
        <div class="-popularmenu py-5">
            <div class="-popularmenu">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-80 wow zoomIn" data-wow-delay="0.1s"
                                    src="{{ asset('assets/images/img9.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="{{ asset('assets/images/img1.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="{{ asset('assets/images/img3.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="{{ asset('assets/images/img2.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}
    {{-- pop --}}

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
                <a class="btn rounded-pill py-3 px-5 text-light" href="./menu" style="background-color: #800020">Lihat semua
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
                    <i class="bi bi-quote"></i>
                    <p>
                        Makanan ringan dari Cimalcimol adalah pilihan terbaik untuk memuaskan selera. Cimol dan aci gulung mereka selalu renyah dan lezat. Varian lainnya seperti makaroni dan basreng juga tidak kalah menggugah selera. Terima kasih Cimalcimol, sudah menyajikan camilan terbaik!
                    </p>
                    <div class="details">
                        <span class="name">Talitha Najwa</span>
                        <span class="job">Mahasiswa</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <i class="bi bi-quote"></i>
                    <p>
                        Cimalcimol selalu menjadi solusi ketika saya ingin camilan yang nikmat dan memuaskan. Dari cimol hingga basreng, semuanya memiliki rasa yang enak dan tekstur yang pas. Terima kasih Cimalcimol, sudah menjadi teman setia saat lapar!
                    </p>
                    <div class="details">
                        <span class="name">Rizky Puspita</span>
                        <span class="job">Mahasiswa</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <i class="bi bi-quote"></i>
                    <p>
                        Rasa camilan dari Cimalcimol tidak pernah mengecewakan. Cimol, aci gulung, dan makaroni mereka selalu menjadi pilihan favorit saya. Dorodok dan basreng juga tidak kalah lezat. Terima kasih Cimalcimol, telah menyediakan camilan yang sempurna!
                    </p>
                    <div class="details">
                        <span class="name">Satria Cahya</span>
                        <span class="job">Mahasiswa</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    {{-- testimonial end --}}

{{--  @section('scripts')  --}}

@endsection
