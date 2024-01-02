@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card">
                <div class="card-header custom-header">
                    Selamat Datang di Donat Kawan Mamak
                </div>

                <div class="card-body custom-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-message" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="welcome-message">
                        Selamat datang di donat kawan mamak. Kami mengucapkan terima kasih atas kepercayaan Anda menikmati donat kami. Kami berkomitmen untuk menyediakan donat yang lezat dan berkualitas untuk kebahagiaan Anda.
                        Kami berupaya terus meningkatkan kualitas donat kami demi kepuasan pelanggan.
                        Semoga pengalaman Anda menikmati donat kami memberikan kebahagiaan dan kelezatan dalam setiap gigitannya.
                    </p>

                    <p class="donut-info">
                        Untuk informasi lebih lanjut tentang berbagai varian donat dan promo terbaru, silakan jelajahi situs web kami atau hubungi pusat layanan pelanggan kami.
                        Kami siap membantu Anda dengan segala pertanyaan atau kebutuhan yang mungkin Anda miliki. Terima kasih atas dukungan Anda dalam mendukung penyediaan donat yang lezat dan memuaskan.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
