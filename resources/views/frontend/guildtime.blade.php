@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxi, 時間表')
@section('meta_description', '顯示 ffxi 合成工會（含漁師）商店及天晶堂商店營業時間表')
@section('title', '工會商店營業時間表')
@section('nav_timetable', 'active')
@section('content')
<!-- Content Start -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">
        <h4 align="center">以下是合成工會（含漁師）商店的營業時間，天晶堂商店物品許多與合成相關一併列入。</h4>
        <livewire:guildtime />
    </div>
</section><!-- End About Us Section -->


<!-- Content End -->
@endsection
