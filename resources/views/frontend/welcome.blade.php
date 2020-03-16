@extends('frontend.layouts.front')
@section('content')
    <div class="slider">

        @foreach($sliders as $slider)
        <div>
            <div class="slider-item">
                <img src="{{url('public/uploads/slider').'/'.$slider->image}}" alt="" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider-content">
                                <h4>{{$slider->sub_title}}!</h4>
                                <h1>{{$slider->title}} </h1>
                                <a class="btn btn-primary" href="javascript:void(0)">Explore now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{--<div>--}}
            {{--<div class="slider-item">--}}
                {{--<img src="https://via.placeholder.com/1920x850.png" alt="" class="">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-9">--}}
                            {{--<div class="slider-content">--}}
                                {{--<h4>WELCOME TO INDUSTRIS...!</h4>--}}
                                {{--<h1>Leader in power Automation </h1>--}}
                                {{--<a class="btn btn-primary" href="#">Explore now</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div>--}}
            {{--<div class="slider-item">--}}
                {{--<img src="https://via.placeholder.com/1920x850.png" alt="" class="">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-9">--}}
                            {{--<div class="slider-content">--}}
                                {{--<h4>WELCOME TO INDUSTRIS...!</h4>--}}
                                {{--<h1>Best solution for Industrial &amp; Factories </h1>--}}
                                {{--<a class="btn btn-primary" href="#">Explore now</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>

    <section class="no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-primary">OUR SERVICES</h4>
                    <h2>What we do</h2>
                    <div class="industris-space-30"></div>

                    <div class="services-block-left">
                        <div class="services-slider-img-left">
                            <img src="https://via.placeholder.com/132x132.png" alt="">
                        </div>
                    </div>

                    <div class="services-slider" data-show="3" data-arrow="true">

                        <div class="services-item">
                            <div class="services-box">
                                <div class="services-icon">
                                    <img src="https://via.placeholder.com/142x174.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h3><a href="javascript:void(0)">Transportation & Distribution</a></h3>
                                    <p>By specializing in the transportation of goods in and around the Midwestern United States, we are able to...</p>
                                    <a class="view-detail" href="#">View details<i class="icon ion-md-add-circle-outline"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="services-item">
                            <div class="services-box">
                                <div class="services-icon">
                                    <img src="https://via.placeholder.com/142x174.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h3><a href="javascript:void(0)">Oil & Gas exploited</a></h3>
                                    <p>We are a leading explorer for new oil and gas fields. We do this not only to replenish the reserves we produce from current fields, but also to meet...</p>
                                    <div class="industris-space-10"></div>
                                    <a class="view-detail" href="#">View details<i class="icon ion-md-add-circle-outline"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="services-item">
                            <div class="services-box">
                                <div class="services-icon">
                                    <img src="https://via.placeholder.com/142x174.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h3><a href="javascript:void(0)">Automotive Manufacturing</a></h3>
                                    <p>The automotive industry is now undergoing the greatest upheaval in its history due to the advancement...</p>
                                    <a class="view-detail" href="#">View details<i class="icon ion-md-add-circle-outline"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="services-item">
                            <div class="services-box">
                                <div class="services-icon">
                                    <img src="https://via.placeholder.com/142x174.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h3><a href="javascript:void(0)">Industrial Construction</a></h3>
                                    <p>Diam vehicula platea blandit malesua quam hac vehicula id non leo dui et dapibu turpis quis, tempor augue duis ut justo...</p>
                                    <a class="view-detail" href="#">View details<i class="icon ion-md-add-circle-outline"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="services-item">
                            <div class="services-box">
                                <div class="services-icon">
                                    <img src="https://via.placeholder.com/142x174.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h3><a href="javascript:void(0)">Manufacture</a></h3>
                                    <p>With IoT business solutions, manufacturers have the power not only to improve and automate production, but expand their value chain...</p>
                                    <a class="view-detail" href="#">View details<i class="icon ion-md-add-circle-outline"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="services-item">
                            <div class="services-box">
                                <div class="services-icon">
                                    <img src="https://via.placeholder.com/142x174.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h3><a href="javascript:void(0)">Green Energy</a></h3>
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart...</p>
                                    <a class="view-detail" href="#">View details<i class="icon ion-md-add-circle-outline"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="industris-space-90"></div>
    </section>

    <section class="bg-primary no-padding">
        <div class="">
            <div class="flex-row">
                <div class="video-section-left" style="background-image:url('https://via.placeholder.com/846x742.png');">
                    <div class="home-video video-player">
                        <a class="video-play" href="https://www.youtube.com/watch?v=SyRchIzIq9I"><i class="icon ion-md-play"></i></a>
                    </div>
                </div>
                <div class="video-section-right">
                    <div class="block-right">
                        <h4>OUR STORY</h4>
                        <h2>Connecting things, <br> It’s all about people.</h2>
                        <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed... <a class="text-white" href="#"> Read more</a></p>
                        <img src="images/sign.png" alt="">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-11 no-padding-sm-left">
                                <div class="about-author">
                                    <div class="about-author-info">
                                        <h4><strong>Arya Star</strong></h4>
                                        <p>CEO, Founder</p>
                                    </div>
                                    <div class="about-author-media">
                                        <a href="#"><i class="icon ion-logo-linkedin"></i></a>
                                        <a href="#"><i class="icon ion-logo-twitter"></i></a>
                                        <a href="#"><i class="icon ion-logo-skype"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="partner-item text-center clearfix">
                                <div class="inner">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200x90.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="industris-space"></div>
            <hr>
            <div class="industris-space"></div>
        </div>

        <div class="container">
            <div class="row flex-row">
                <div class="col-md-6 align-self-center">
                    <h3>Recruitment</h3>
                    <p>We are looking for smart individuals who want to have a positive impact on the world. If that’s you, visit our Careers page or send us a <br> CV at: <a class="text-second" href="#"> Industris@mail.com </a></p>
                    <div class="industris-space-30"></div>
                    <a href="#" class="btn btn-primary btn-m-r">Join us</a>
                    <a href="#" class="btn btn-border">Our team</a>
                    <div class="industris-space-sm"></div>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/1080x721.png" alt="home image">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="industris-space"></div>
            <hr>
            <div class="industris-space"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Get a quote</h3>
                    <p>As fellow entrepreneurs, we understand the need for space which gives your business room to breathe and grow.</p>
                </div>
            </div>
            <div class="industris-space-30"></div>
            <form class="home-form" method="post" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email address" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <button type="submit" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-full-width">Submit now <i class="icon ion-md-checkmark-circle"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>

    <section class="bg-default">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-8">
                    <h4 class="text-primary">FEATURED PROJECT</h4>
                    <h2 class="text-white no-margin-bottom">The great work we did</h2>
                </div>
                <div class="col-md-4 text-right align-self-end">
                    <a class="text-white industris-lineheight" href="#">View all project <i class="icon ion-md-add-circle-outline"></i> </a>
                </div>
            </div>
            <div class="industris-space-20"></div>

            <div class="row">
                <div class="col-md-12">

                    <div class="project-feature-slider project-feature" data-show="3" data-arrow="true">

                        <div class="project-item col-lg-4 col-sm-6">
                            <div class="inner">
                                <img src="https://via.placeholder.com/720x900.png" alt="">
                                <div class="project-info">
                                    <div class="project-meta">Russia   |   12 November 2018</div>
                                    <div class="project-content">
                                        <h3><a href="#">Refurbishing Gears</a></h3>
                                        <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                        <a href="javascript:void(0)">View details <i class="icon ion-md-add-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="project-item col-lg-4 col-sm-6">
                            <div class="inner">
                                <img src="https://via.placeholder.com/720x900.png" alt="">
                                <div class="project-info">
                                    <div class="project-meta">Russia   |   12 November 2018</div>
                                    <div class="project-content">
                                        <h3><a href="javascript:void(0)">Wind power in Russia</a></h3>
                                        <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                        <a href="#">View details <i class="icon ion-md-add-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="project-item col-lg-4 col-sm-6">
                            <div class="inner">
                                <img src="https://via.placeholder.com/720x900.png" alt="">
                                <div class="project-info">
                                    <div class="project-meta">Russia   |   12 November 2018</div>
                                    <div class="project-content">
                                        <h3><a href="#">Water Recycle</a></h3>
                                        <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                        <a href="javascript:void(0)">View details <i class="icon ion-md-add-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="project-item col-lg-4 col-sm-6">
                            <div class="inner">
                                <img src="https://via.placeholder.com/720x900.png" alt="">
                                <div class="project-info">
                                    <div class="project-meta">Russia   |   12 November 2018</div>
                                    <div class="project-content">
                                        <h3><a href="#">Industry Complex</a></h3>
                                        <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                        <a href="javascript:void(0)">View details <i class="icon ion-md-add-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="project-item col-lg-4 col-sm-6">
                            <div class="inner">
                                <img src="https://via.placeholder.com/720x900.png" alt="">
                                <div class="project-info">
                                    <div class="project-meta">Russia   |   12 November 2018</div>
                                    <div class="project-content">
                                        <h3><a href="javascript:void(0)">Warehouse Industry</a></h3>
                                        <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                        <a href="javascript:void(0)">View details <i class="icon ion-md-add-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="project-item col-lg-4 col-sm-6">
                            <div class="inner">
                                <img src="https://via.placeholder.com/720x900.png" alt="">
                                <div class="project-info">
                                    <div class="project-meta">Russia   |   12 November 2018</div>
                                    <div class="project-content">
                                        <h3><a href="javascript:void(0)">Machine Engineering</a></h3>
                                        <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                        <a href="javascript:void(0)">View details <i class="icon ion-md-add-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="industris-space-90"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-white">Our work process</h3>
                </div>
                <div class="col-md-9">
                    <p class="text-white border-left">Over the course of more than 25 years of hard work with many large and small projects. We have worked out the best working process.</p>
                </div>
            </div>
            <div class="industris-space"></div>

            <div class="row">
                <div class="col-md-3">
                    <div class="process process-light">
                        <div class="process-icon"><i class="icon ion-ios-briefcase"></i></div>
                        <h4>Receive and Evaluate<br> the project overview</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process process-light">
                        <div class="process-icon"><i class="icon ion-md-football"></i></div>
                        <h4>Research and<br> detailed planning</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process process-light">
                        <div class="process-icon"><i class="icon ion-ios-rocket"></i></div>
                        <h4>Deploy and complete<br> the project</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process process-light">
                        <div class="process-icon"><i class="icon ion-ios-filing"></i></div>
                        <h4>Evaluation and<br> project handover</h4>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 ">
                    <h4 class="text-primary">TESTIMONIAL</h4>
                    <h2>What our customers say</h2>

                    <div class="testi-slider-2" data-show="1" data-arrow="false" data-dots="true">

                        <div>
                            <div class="testi-item">
                                <div class="testi-content">
                                    <i class="icon ion-md-quote"></i>
                                    <p>"When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane."</p>
                                </div>
                                <div class="testi-info">
                                    <img src="https://via.placeholder.com/90x90.png" alt="" class="circle-img">
                                    <h4>Emilia Clarke<span>Manager Avenger company</span></h4>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="testi-item">
                                <div class="testi-content">
                                    <i class="icon ion-md-quote"></i>
                                    <p>"A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I should be incapable of drawing a single stroke at the present moment"</p>
                                </div>
                                <div class="testi-info">
                                    <img src="https://via.placeholder.com/90x90.png" alt="" class="circle-img">
                                    <h4>Micheal Sejuro<span>Manager Fusion themes company</span></h4>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="testi-item">
                                <div class="testi-content">
                                    <i class="icon ion-md-quote"></i>
                                    <p>"I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I should be incapable of drawing a single stroke at the present moment"</p>
                                </div>
                                <div class="testi-info">
                                    <img src="https://via.placeholder.com/90x90.png" alt="" class="circle-img">
                                    <h4>Emilia Clarke<span>Manager Avenger company</span></h4>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="testi-item">
                                <div class="testi-content">
                                    <i class="icon ion-md-quote"></i>
                                    <p>"I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. I should be incapable of drawing a single stroke at the present moment"</p>
                                </div>
                                <div class="testi-info">
                                    <img src="https://via.placeholder.com/90x90.png" alt="" class="circle-img">
                                    <h4>Micheal Sejuro<span>Manager Fusion themes company</span></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="industris-space-sm"></div>
                </div>
                <div class="col-md-offset-1 col-md-4 about-border-left">
                    <h3>Why we’re different</h3>
                    <p>As fellow entrepreneurs, we understand the need for space which gives your business room</p>
                    <ul class="unstyle">
                        <li><i class="icon ion-md-checkmark-circle"></i><a href="#">Flexible solutions</a></li>
                        <li><i class="icon ion-md-checkmark-circle"></i><a href="#">Free technology</a></li>
                        <li><i class="icon ion-md-checkmark-circle"></i><a href="#">Improved operating conditions</a></li>
                        <li><i class="icon ion-md-checkmark-circle"></i><a href="#">Transparent costs</a></li>
                    </ul>
                    <a href="#" class="btn btn-primary">Get a quote</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light padding-bottom-medium">
        <div class="container">
            <div class="row flex-row">

                <div class="col-md-6">
                    <h4 class="text-primary">THE NEWS</h4>
                    <h2 class="no-margin-bottom">Lates News form us</h2>
                </div>
                <div class="col-md-6 text-right align-self-end">
                    <a class="industris-lineheight" href="#">View all post<i class="icon ion-md-add-circle-outline"></i></a>
                </div>
            </div>
            <div class="industris-space-50"></div>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="post-box post type-post entry">
                        <div class="entry-media">
                            <a href="#">
                                <img src="https://via.placeholder.com/720x400.png" alt="">
                            </a>
                        </div>
                        <div class="inner-post">
                            <header class="entry-header">

                                <div class="entry-meta">
				                        <span class="posted-on">
				                        	<span class="entry-date published">May 30, 2019</span>
				                        </span>
                                    <span class="posted-in">
				                        	<a href="#" rel="category tag">Oil & Gas</a>
				                        </span>
                                </div>
                                <!-- .entry-meta -->
                                <h3 class="entry-title"><a href="javascript:void(0)" rel="bookmark">Five Predictions for IoT in 2019 and beyond</a></h3>
                            </header>
                            <!-- .entry-header -->

                            <div class="entry-summary">
                                <p> Telenor Connexion has worked with analysts from Stockholm-based consulting firm Northstream to...</p>
                            </div>
                            <!-- .entry-content -->

                            <footer class="entry-footer">
                                <a class="post-link" href="javascript:void(0)">Read more<i class="icon ion-md-add-circle-outline"></i></a>
                            </footer>
                            <!-- .entry-footer -->
                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="post-box post type-post entry">
                        <div class="entry-media">
                            <a href="javascript:void(0)">
                                <img src="https://via.placeholder.com/720x400.png" alt="">
                            </a>
                        </div>
                        <div class="inner-post">
                            <header class="entry-header">

                                <div class="entry-meta">
				                        <span class="posted-on">
				                        	<span class="entry-date published">May 30, 2019</span>
				                        </span>
                                    <span class="posted-in">
				                        	<a href="#" rel="category tag">Oil & Gas</a>
				                        </span>
                                </div>
                                <!-- .entry-meta -->
                                <h3 class="entry-title"><a href="javascript:void(0)" rel="bookmark">Wrap-up: The Japan-Sweden Business Summit</a></h3>
                            </header>
                            <!-- .entry-header -->

                            <div class="entry-summary">
                                <p> “Future technologies will continue to increase the possibilities within IoT in general, and transportation...</p>
                            </div>
                            <!-- .entry-content -->

                            <footer class="entry-footer">
                                <a class="post-link" href="javascript:void(0)">Read more<i class="icon ion-md-add-circle-outline"></i></a>
                            </footer>
                            <!-- .entry-footer -->
                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="post-box post type-post entry">
                        <div class="entry-media">
                            <a href="javascript:void(0)">
                                <img src="https://via.placeholder.com/720x400.png" alt="">
                            </a>
                        </div>
                        <div class="inner-post">
                            <header class="entry-header">

                                <div class="entry-meta">
				                        <span class="posted-on">
				                        	<span class="entry-date published">May 30, 2019</span>
				                        </span>
                                    <span class="posted-in">
				                        	<a href="#" rel="category tag">Oil & Gas</a>
				                        </span>
                                </div>
                                <!-- .entry-meta -->
                                <h3 class="entry-title"><a href="javascript:void(0)" rel="bookmark">The brains behind Uber’s autonomous future</a></h3>
                            </header>
                            <!-- .entry-header -->

                            <div class="entry-summary">
                                <p> Uber technology chief Raquel Urtasun is certain of one thing — that there will be self-driving cars, trucks...</p>
                            </div>
                            <!-- .entry-content -->

                            <footer class="entry-footer">
                                <a class="post-link" href="javascript:void(0)">Read more<i class="icon ion-md-add-circle-outline"></i></a>
                            </footer>
                            <!-- .entry-footer -->
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

@endsection