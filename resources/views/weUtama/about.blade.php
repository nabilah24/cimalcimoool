@extends('layout.master')

@section('content')
    {{-- hero --}}
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>About Us</h1>
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item text-decoration-none"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/menu">Menu</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- hero end --}}

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
                    <h1 class="mb-4">Welcome to Cimal Cimol<i class="bi bi-emoji-heart-eyes-fill me-2"
                            style="color: var(--dark)"></i></h1>
                    <p class="mb-4">Selamat datang di Cimalcimol, tempatnya mencari dan menemukan berbagai macam makanan ringan khas Indonesia yang lezat dan menggugah selera. Kami bangga menjadi salah satu penyedia terkemuka produk makanan ringan di Indonesia, menghadirkan pengalaman kuliner yang unik dan tak terlupakan bagi pelanggan kami.</p>
                    <p class="mb-4">Di Cimalcimol, kami berkomitmen untuk memberikan produk berkualitas tinggi dengan rasa yang autentik dan inovatif. Setiap produk kami dibuat dengan cinta dan dedikasi, menggunakan bahan-bahan pilihan dan proses produksi yang terjaga kualitasnya. Dari cimol, cibak, aci, seblak, bojot, hingga makaroni, kami menawarkan berbagai varian yang memanjakan lidah dan menjelajahi kekayaan kuliner Indonesia.</p>
                    <p class="mb-4">Kami tidak hanya menjual makanan ringan, tetapi juga menghadirkan sebuah pengalaman. Cimalcimol adalah lebih dari sekadar sebuah merek; kami adalah cermin dari keberagaman, kreativitas, dan kehangatan budaya Indonesia. Kami percaya bahwa setiap gigitan adalah sebuah petualangan, dan setiap produk yang kami tawarkan membawa cerita dan kegembiraan.</p>
                    <p class="mb-4">Kami berterima kasih kepada seluruh pelanggan dan mitra kami yang telah mendukung perjalanan kami. Kami berjanji untuk terus berinovasi dan memberikan yang terbaik bagi Anda. Bergabunglah dengan kami di Cimalcimol, dan mari bersama-sama menikmati kelezatan dan keindahan kuliner Indonesia.</p>
                    <p class="mb-4">Terima kasih atas kunjungan Anda dan selamat menikmati pengalaman berbelanja di Cimalcimol!</p>
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
                </div>
            </div>
        </div>
    </div>
    {{-- about end --}}

@section('scripts')
@endsection
