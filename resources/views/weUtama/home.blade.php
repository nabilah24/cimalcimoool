@extends('layout.master')

@section('content')
    {{-- hero --}}
    <div class="container-xxl py-5 hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 animated slideInLeft" style="color: #000000; text-shadow: 2px 2px 4px #ffb75d;">Enjoy Our Delicious Meal</h1>
                    <p class="animated slideInLeft mb-4 pb-2" style="color: #000000;">Selamat datang di Cimalcimol, tempat di mana kenikmatan bertemu dengan kreasi! Nikmati berbagai macam camilan lezat dan inovatif kami yang pasti akan memanjakan lidah Anda. Selamat menikmati!</p>
                    {{--  <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft" style="background-color: #000000; border-color: #000000; color: #ffb75d; text-shadow: 2px 2px 4px #ffb75d;">Book A Table</a>  --}}
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/images/hero/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- hero end --}}

    {{-- information --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="text-decoration-none">
                        <div class="information-item rounded pt-3">
                            <a href="https://maps.app.goo.gl/9KmycXGWo85YwLQg8" target="_blank" rel="noopener noreferrer" style="color: black; text-decoration: none;">
                            <div class="p-4 text-center">
                                <h5><img class="img-fluid flex-shrink-0 rounded-circle"
                                        src="{{ asset('assets/images/information/outlet.png') }}" alt=""width="70px"
                                        height="70px">&nbsp; <b>Outlet</b></h5>
                                <p>Jl. Dewandaru No.7 Malang</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="text-decoration-none">
                        <div class="information-item rounded pt-3">
                            <a href="https://gofood.link/a/KLgpw5k" target="_blank" rel="noopener noreferrer" style="color: black; text-decoration: none;">
                            <div class="p-4 text-center">
                                <h5><img class="img-fluid flex-shrink-0 rounded-circle"
                                        src="{{ asset('assets/images/information/gofood.png') }}" alt=""width="70px"
                                        height="70px">&nbsp;<b>Go Food</b></h5>
                                <p>Cimal Cimol, Lowokwaru</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="text-decoration-none">
                        <div class="information-item rounded pt-3">
                            <a href="https://r.grab.com/g/6-20240312_162107_abee3d6021eeb716_MEXMPS-6-C2B3MCN2VKXXHE" target="_blank" rel="noopener noreferrer" style="color: black; text-decoration: none;">
                            <div class="p-4 text-center">
                                <h5><img class="img-fluid flex-shrink-0 rounded-circle"
                                        src="{{ asset('assets/images/information/grabfood.png') }}"
                                        alt=""width="70px" height="70px">&nbsp;<b>Grab Food</b></h5>
                                <p>Cimal Cimol - Jatimulyo</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="text-decoration-none">
                        <div class="information-item rounded pt-3">
                            <a href="https://shopee.co.id/universal-link/now-food/shop/1283940?deep_and_deferred=1&shareChannel=copy_link" target="_blank" rel="noopener noreferrer" style="color: black; text-decoration: none;">
                            <div class="p-4 text-center">
                                <h5><img class="img-fluid flex-shrink-0 rounded-circle"
                                        src="{{ asset('assets/images/information/shopee.png') }}" alt=""width="70px"
                                        height="70px">&nbsp;<b>Shopee Food</b></h5>
                                <p>Cimal Cimol - Lowokwaru</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- information end --}}

    {{-- about --}}
    <div class="container-xxl py-5 about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('assets/images/about/about-1.png') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                src="{{ asset('assets/images/about/about-2.png') }}" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('assets/images/about/about-3.png') }}">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                src="{{ asset('assets/images/about/about-4.png') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-black">
                    <h3 class="section-title ff-secondary text-start fw-normal">About Us</h3>
                    <h1 class="mb-4">Welcome to Cimal Cimol<i class="bi me-2"
                            style="color: var(--dark)"></i></h1>
                    <p class="mb-4">Cimalcimol adalah destinasi utama untuk menemukan berbagai macam makanan ringan khas Indonesia yang lezat dan unik. Dari cimol, cibak, aci, seblak, bojot, hingga makaroni, kami menawarkan berbagai varian produk yang memanjakan lidah dan menjelajahi kekayaan kuliner Indonesia. Di Cimalcimol, kami bangga menyajikan produk berkualitas tinggi yang dibuat dengan cinta dan dedikasi, menggunakan bahan-bahan pilihan serta proses produksi yang terjaga kualitasnya. Bergabunglah dengan kami di Cimalcimol dan temukan pengalaman berbelanja yang tak terlupakan!</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-warning px-3">
                                <h1 class="flex-shrink-0 display-5 mb-0" style="color: var(--dark)"
                                    data-toggle="counter-up">3</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 class="text-uppercase mb-0">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-warning px-3">
                                <h1 class="flex-shrink-0 display-5 mb-0" style="color: var(--dark)"
                                    data-toggle="counter-up">20</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Popular</p>
                                    <h6 class="text-uppercase mb-0">Menu's</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn py-3 px-5 mt-2 text-white" style="background: var(--dark)" href="/about">Read More</a>
                </div>
            </div>
        </div>
    </div>
    {{-- about end --}}

    {{-- inform --}}
    <div class="container-xxl py-5 px-0 wow fadeInUp inform" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="section-title ff-secondary text-start fw-normal" style="color: var(--primary)">Information</h3>
                    <h1 class="text-white mb-4">Let's Join Us!</h1>
                    <h2 class="text-center">We Are Hiring</h2>
                    <center>
                        <h1 class="badge text-center text-wrap" style="font-size: 2em; padding:10px 20px; background-color: var(--primary)">
                            Booth <br> Crew</h1>
                    </center>
                    <div class="col-12">
                        <div class="container">
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Laki-laki</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Usia Max 28 Tahun</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Berpengalaman di dapur</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Lulusan SMA/Mahasiswa tigkat akhir</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Bisa bekerja dalam tekanan</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Teliti, jujur, dan tanggung jawab</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Domisili Malang</h5><br>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=cimalcimoool@gmail.com" class="btn w-100 py-3" target="_blank" style="background: var(--primary)">Send Your CV</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="image">
                    <img src="{{ asset('assets/images/information/inform.png') }}" alt=""
                        style="height: 100%; width:100%">
                </div>
            </div>
        </div>
    </div>
    {{-- inform end --}}

    {{-- tranding menu --}}
    <section id="tranding">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title ff-secondary text-center fw-normal">Food Menu</h3>
            <h1 class="mb-5 text-black">Most Popular Items</h1>
        </div>
        <div class="container tranding-container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-1.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Cimol Ori
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-2.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Cibak Ori
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-3.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Cimol Banjir
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-4.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Sambel Bojot
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-5.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Aci Gulung
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-6.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Makaroni
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-7.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Dorodok
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                </div>

                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <i class="bi bi-arrow-left" style="font-size: 15"></i>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <i class="bi bi-arrow-right" style="font-size: 15"></i>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </section>
    {{-- tranding menu end --}}

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
                        <span class="job">Owner Club E-Sport</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <i class="bi bi-quote"></i>
                    <p>
                        Cimalcimol selalu menjadi solusi ketika saya ingin camilan yang nikmat dan memuaskan. Dari cimol hingga basreng, semuanya memiliki rasa yang enak dan tekstur yang pas. Terima kasih Cimalcimol, sudah menjadi teman setia saat lapar!
                    </p>
                    <div class="details">
                        <span class="name">Rizky Puspita</span>
                        <span class="job">Winner Fashion Show Muslimah Mandalika 2024</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <i class="bi bi-quote"></i>
                    <p>
                        Rasa camilan dari Cimalcimol tidak pernah mengecewakan. Cimol, aci gulung, dan makaroni mereka selalu menjadi pilihan favorit saya. Dorodok dan basreng juga tidak kalah lezat. Terima kasih Cimalcimol, telah menyediakan camilan yang sempurna!
                    </p>
                    <div class="details">
                        <span class="name">Satria Baja Hitam</span>
                        <span class="job">CEO PT Pencari Cinta</span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    {{-- testimonial end --}}

    {{-- contact --}}
    <section id="contact" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="section-title ff-secondary text-center fw-normal">Find Us</h3>
                    </div>
                </div>
            </div>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4894405374253!2d112.62180907443569!3d-7.948266579182089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629d96cb83ab3%3A0xaf7f420d67935f0c!2sJl.%20Dewandaru%20No.7%2C%20Jatimulyo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1709088591891!5m2!1sid!2sid"
                    width="100%" height="270px" style="border:0; border-radius: 6px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    {{-- contact end --}}

@section('scripts')
@endsection
