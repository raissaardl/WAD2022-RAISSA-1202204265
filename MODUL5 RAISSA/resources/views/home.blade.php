@extends('layouts.layout')

@section('content')
<!-- Jumbotron -->
<section id="home">
    <div class="container">
        <div class="d-flex gap-5 wrap justify-content-center align-items-center">
            <div>
                <h1>Selamat Datang di Show Room Raissa</h1>
                <p class="mt-3">Show room Raissa Menyediakan Mobil Mewah <br>dengan harga terjangkau dan kualiatas terjamin</p>
                <div class="d-flex  justify-content-lg-start mt-2">

                </div>
                <div class="d-flex align-items-center gap-5 mt-5">
                    <img src="assets/img/logo-ead.png" alt="logoead" style="width:100px;">
                    <p style="margin-top: 20px; font-size:14px;">Raissa Ardelia_1202204265</p>
                </div>
            </div>
            {{-- display image from assets/img --}}
            <img src="assets/img/mercy.png" alt="" style="width: 700px;height: 400px;">
        </div>
    </div>
</section>
<!-- Jumbotron End -->
@endsection