@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxitoolbox')
@section('meta_description', 'ffxitoolbox 是收集整理 Final Fantasy XI 合成相關資料的網站。')
@section('title', 'ffxitoolbox 首頁')
@section('nav_home', 'active')
@section('content')
<!-- Content Start -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2">
                {{-- 圖片輪撥區 --}}
                <section id="portfolio-details" class="portfolio-details">
                    <div class="portfolio-details-container">
                        <div class="owl-carousel portfolio-details-carousel">
                            <img src="{{ asset('img/slide/alchemy.png') }}" class="img-fluid" alt="Abonie for alchemy">
                            <img src="{{ asset('img/slide/bonecraft.png') }}" class="img-fluid" alt="Svandia for bonecraft">
                            <img src="{{ asset('img/slide/clothcraft.png') }}" class="img-fluid" alt="Larya for clothcraft">
                            <img src="{{ asset('img/slide/cooking.png') }}" class="img-fluid" alt="Abokuo for cooking">
                            <img src="{{ asset('img/slide/fishing.png') }}" class="img-fluid" alt="Abokuo for fishing">
                            <img src="{{ asset('img/slide/goldsmithing.png') }}" class="img-fluid" alt="Duc for goldsmithing">
                            <img src="{{ asset('img/slide/leathercraft.png') }}" class="img-fluid" alt="Fima for leathcraft">
                            <img src="{{ asset('img/slide/smithing.png') }}" class="img-fluid" alt="Elim for smithing">
                            <img src="{{ asset('img/slide/woodworking.png') }}" class="img-fluid" alt="Cael for woodworking">
                        </div>
                    </div>
                </section>
                {{-- 圖片輪撥區 --}}

            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h2>歡迎來到 ffxitoolbox</h2>
                <p>你好，我是李順能 (A-Bo Lee)，<a href="https://play.google.com/store/books/details?id=NFVBCgAAQBAJ" target="_blank">Joomla! 3.x素人架站計畫</a>的作者。</p>
                <p>這個網站是我學習 PHP 程式設計的作品，參考網路上 Final Fantasy XI 遊戲資料網站內容製作的 POC 網站，
                    感謝<a href="https://www.facebook.com/goblinlab" target="_blank">哥布林工程師</a>的<a href="https://webinar.pandalab.org/laravel-millionaire" target="_blank">Laravel百萬年薪課程</a>，讓我得以順利完成這個作品。</p>
                <p>網站資料部分參考：</p>
                <ul>
                    <li><i class="icofont-check-circled"></i> <a href="http://wiki.ffo.jp" target="_blank">FF11用語辞典 ～
                            ウィンダスの仲間たち版</a></li>
                    <li><i class="icofont-check-circled"></i> <a href="http://lamhirh00.web.fc2.com/index.html"
                            target="_blank">ある合成職人の覚書</a></li>
                    <li><i class="icofont-check-circled"></i> <a href="http://www.great-blue.jp" target="_blank">Great
                            Blue</a></li>
                    <li><i class="icofont-check-circled"></i> <a href="http://ff11db.sakura.ne.jp/database/"
                            target="_blank">FFXI Database</a></li>
                    <li><i class="icofont-check-circled"></i> <a href="https://www.koji27.com/soft/ft/time/"
                            target="_blank">えふえふじゅういち時間</a></li>
                </ul>
                <!-- 載入社群按鈕 -->
                <p>
                @include('components.socialButtons')
                </p>
                <h3>更新日誌</h3>
                    <ul>
                        <li>2021/07/03：V2 版上線，使用新框架改寫，加入飛空艇及渡船資料。</li>
                        <li>2021/03/31：V1 版上線，新增留言板功能，導入資料庫運作。</li>
                        <li>2021/01/31：運作程式碼改寫。</li>
                        <li>2021/01/18：beta 版上線，測試連線速度。</li>
                    </ul>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->


<!-- Content End -->
@endsection
