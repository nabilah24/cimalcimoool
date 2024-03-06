@extends('layout.master')

@section('content')

    {{-- hero start --}}
    <div class="banner">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>About Us</h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                        <p><a href="" class="btn btn-light me-2">Shop Now</a><a href="#"
                                class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{asset('assets/images/logo.png')}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- hero end --}}

    {{-- about --}}
    <section class="about pt-3 pt-lg-5 pb-6 pb-lg-8" style="margin-top: -25px;" id="about">
        <div class="-testimonial-xxl py-5">
            <div class="-testimonial">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="{{ asset('assets/images/img5.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="{{ asset('assets/images/img2.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="{{ asset('assets/images/img3.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="{{ asset('assets/images/img1.jpg') }}">
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
