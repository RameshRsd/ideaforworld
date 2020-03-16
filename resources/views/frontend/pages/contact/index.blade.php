@extends('frontend.layouts.front')
@section('content')

    <div id="content" class="site-content">
        <div class="page-header" style="background: url('https://via.placeholder.com/1920x450.png') no-repeat center center;">
            <div class="container">
                <div class="breadc-box no-line">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title">Contact Us</h2>
                            <ul id="breadcrumbs" class="breadcrumbs none-style">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-contact-info">
            <div class="container">
                <div class="row">
                    @if(session('success'))
                        <div class="col-sm-12">
                            <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                                <span class="btn btn-success btn-xs">Success</span> {{session('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    @endif
                    @if(session('error'))
                        <div class="col-sm-12">
                            <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                                <span class="btn btn-danger btn-xs">Error</span> {{session('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    @endif
                    @if($errors->any())
                        <div class="col-sm-12">
                            <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                                @foreach($errors->all() as $error)
                                    <span class="btn btn-danger btn-xs">Error</span> {{$error}}<br>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    @endif

                    <div class="col-md-6 col-sm-12">

                        <h4 class="text-primary">CONTACT INFO</h4>
                        <div class="contact-info">
                            <h2>Hotline : <span class="text-primary">+84 1900 8198</span> </h2>
                            <p><i class="icon ion-md-mail"></i> Info.industris@gmail.com</p>
                            <p><i class="icon ion-md-pin"></i> Crows Nest Apt 69 Sydney, Australia (<a href="#" class="text-primary">View map</a>)</p>
                        </div>
                        <div class="space-industris" style="height: 40px;"></div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <form class="form-contact" action="" method="post">
                            {{csrf_field()}}
                            <h3>Contact form</h3>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <input type="text" name="full_name" id="your-name" value="{{old('full_name')}}" class="form-control" placeholder="Your name" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="text" name="phone_number" id="phone-number" value="{{old('phone_number')}}" class="form-control" placeholder="Phone number" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="text" name="email_address" id="your-email" value="{{old('email_address')}}" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea type="text" rows="6" name="message" id="your-message" class="form-control" placeholder="your message" required>{{old('message')}}</textarea>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">Subscribe Us?</label>
                                    <input type="radio" name="subscribe" value="yes" @if(old('subscribe')=='yes') checked @endif id="subscribe" required>Yes
                                    <input type="radio" name="subscribe" value="no"  @if(old('subscribe')=='no') checked @endif id="subscribe" required>No
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="wpcf7-form-control wpcf7-submit btn btn-primary">Submit</button>
                                    {{--<input type="submit" value="Subcribe" class="wpcf7-form-control wpcf7-submit btn btn-border">--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>View map:</h3>
                        <div class="map">
                            <img src="https://via.placeholder.com/1170x500?text=google+map" alt="">
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary btn-m-r">Get derection</a>
                            <a href="#" class="btn btn-border">Google Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


@endsection