@extends('frontend.layouts.master')
@section('meta_keywords', 'ffxi, 飛空艇')
@section('meta_description', '顯示 ffxi 飛空艇班表')
@section('title', '飛空艇時間表')
@section('nav_timetable', 'active')
@section('content')
<!-- Content Start -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">
        <livewire:airship />
    </div>
</section><!-- End About Us Section -->


<!-- Content End -->
@endsection
