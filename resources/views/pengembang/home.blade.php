@extends('pengembang.partials.master')
@section('content')
<div class="hero-section">
    <div class="wave">

        <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path
                        d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                        id="Path"></path>
                </g>
            </g>
        </svg>

    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 hero-text-image">
                <div class="row">
                    <div class="col-lg-7 text-center text-lg-left">
                        <h1 data-aos="fade-right">Banyumas Kota Cerdas 2020</h1>
                        <p class="mb-5">Selamat Datang {{$pengembang->nama}}.</p>
                        <div class="row my-1">
                            <div class="col-md-8">
                                <div class="card bg-transparent border-white">
                                    <a href="/pengembang/list-pengembangan" role="button" class="btn btn-outline-primary">
                                        <h5 class="card-title text-white">daftar pengembangan aplikasi</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card bg-transparent border-white">
                                    <a href="/pengembang/pengembangan-saya" role="button" class="btn btn-outline-primary">
                                        <h5 class="card-title text-white">pengembangan aplikasi diikuti</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 iphone-wrap mt-5">
                        <img src="{{asset('bootstrap/portal/img/smartcity.png')}}" alt="Image" class="phone-1"
                            data-aos="fade-right">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


{{-- sesi form kontak person --}}
<div class="site-section text-dark mt-3">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center border-bottom">
            <div class="col-md-5" data-aos="fade-up">
                <h2>Pengembangan Aplikasi yang diikuti</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center">
                <h3>Total</h3>
                <p>{{count($pengembang->softwares)}}</p>
            </div>
            <div class="col-md-4 text-center border-left border-right">
                <h3>Selesai</h3>
                <p>{{count($softwareSelesai)}}</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Belum selesai</h3>
                <p>{{count($softwareBelumSelesai)}}</p>
            </div>
        </div>

    </div>
</div>
<!-- .site-section -->
@endsection