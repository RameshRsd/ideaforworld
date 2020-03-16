
@extends('backend.admin.index')
@section('body')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-image" style="background-image: url('assets/media/various/bg_dashboard.jpg');">
            <div class="bg-white-90">
                <div class="content content-full">
                    <div class="row">
                        <div class="col-md-6 d-md-flex align-items-md-center">
                            <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                                <h1 class="font-size-h2 mb-2">Dashboard</h1>
                                <h2 class="font-size-lg font-w400 text-muted mb-0">Today is a great one!</h2>
                            </div>
                        </div>
                        <div class="col-md-6 d-md-flex align-items-md-center">
                            <div class="row w-100 text-center">
                                {{--<div class="col-6 col-xl-4 offset-xl-4 invisible" data-toggle="appear" data-timeout="300">--}}
                                    {{--<a href="{{url('admin/room-booking')}}">--}}
                                        {{--<p class="font-size-h3 font-w600 text-body-color-dark mb-0">--}}
                                            {{--{{$room_book}}--}}
                                        {{--</p>--}}
                                        {{--<p class="font-size-sm font-w700 text-uppercase mb-0">--}}
                                            {{--<i class="far fa fa-bed text-muted mr-1"></i> Room Booked--}}
                                        {{--</p>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-6 col-xl-4 invisible" data-toggle="appear" data-timeout="600">--}}
                                    {{--<p class="font-size-h3 font-w600 text-body-color-dark mb-0">--}}
                                        {{--$980--}}
                                    {{--</p>--}}
                                    {{--<p class="font-size-sm font-w700 text-uppercase mb-0">--}}
                                        {{--<i class="far fa-chart-bar text-muted mr-1"></i> Earnings--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        {{--<!-- Page Content -->--}}
        <div class="content">
            <!-- Quick Stats -->
            <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.sparkline() -->
            <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
            <div class="row">
                <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-timeout="600">
                    {{--<a class="block block-rounded block-link-pop" href="{{url('admin/rooms/book-room')}}">--}}
                        {{--<div class="block-content block-content-full d-flex align-items-center justify-content-between">--}}
                            {{--<div>--}}
                                {{--<!-- Sparkline Dashboard Sales Container -->--}}
                                {{--<span class="js-sparkline" data-type="line"--}}
                                      {{--data-points="[68,25,36,62,59,80,75,89]"--}}
                                      {{--data-width="90px"--}}
                                      {{--data-height="40px"--}}
                                      {{--data-line-color="#343a40"--}}
                                      {{--data-fill-color="transparent"--}}
                                      {{--data-spot-color="transparent"--}}
                                      {{--data-min-spot-color="transparent"--}}
                                      {{--data-max-spot-color="transparent"--}}
                                      {{--data-highlight-spot-color="#343a40"--}}
                                      {{--data-highlight-line-color="#343a40"--}}
                                      {{--data-tooltip-suffix="Sales"></span>--}}
                            {{--</div>--}}
                            {{--<div class="ml-3 text-right">--}}
                                {{--<p class="text-muted mb-0">--}}
                                    {{--Room Booking--}}
                                {{--</p>--}}
                                {{--<p class="font-size-h3 font-w300 mb-0">--}}
                                    {{--<a href="{{url('admin/room-booking')}}">+{{$room_book}}</a>--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                </div>
            </div>
            <!-- END Quick Stats -->

        </div>
        {{--<!-- END Page Content -->--}}

    </main>
    <!-- END Main Container -->


@endsection
