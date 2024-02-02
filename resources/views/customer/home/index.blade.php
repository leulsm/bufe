@extends('customer.layouts.master')

@section('content')
    <!--======= BANNER ======= -->
    @include('customer.home.components.slider')

    <!--====== WHY CHOOSE START =======-->
    @include('customer.home.components.why-choose')

    <!--========   OFFER ITEM START =========-->
    @include('customer.home.components.offer')

    <!--========CART POPUT START======== -->
    @include('customer.home.components.cart-popup')

    <!--=====   MENU ITEM START =====-->
    @include('customer.home.components.menu-item')

    <!--=======      ADD SLIDER START =======-->
    @include('customer.home.components.ad-slider')

    <!--======     TEAM START =========-->
    @include('customer.home.components.team')

    <!--===== DOWNLOAD APP START ======-->
    @include('customer.home.components.download-app')

    <!--=====  TESTIMONIAL  START ===========-->
    @include('customer.home.components.testimonial')

    <!--====== COUNTER START  ===========-->
    @include('customer.home.components.counter')

    <!--=======   BLOG 2 START==========-->
    @include('customer.home.components.blog')
@endsection
