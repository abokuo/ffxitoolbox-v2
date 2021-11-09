@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxi, 渡船時間表')
@section('meta_description', '顯示 ffxi 渡船時間表')
@section('title', '渡船時間表')
@section('nav_timetable', 'active')
@section('content')
<!-- Content Start -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">
        <livewire:ship />
    </div>
</section><!-- End About Us Section -->


<!-- Content End -->
@endsection
