@extends('frontend.layouts.front')
@section('content')

    <div id="content" class="site-content">
        <div class="page-header" style="background: url('https://via.placeholder.com/1920x450.png') no-repeat center center;">
            <div class="container">
                <div class="breadc-box no-line">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title">Our Project</h2>
                            <ul id="breadcrumbs" class="breadcrumbs none-style">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Our Project</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-primary">FEATURED PROJECT</h4>
                        <h2>The great work we did</h2>
                        <div class="industris-space"></div>

                        <div class="project-slider" data-show="1" data-arrow="true">

                            <div>
                                <div class="project-box">
                                    <img src="https://via.placeholder.com/1200x631.png" alt="" class="">
                                    <div class="col-md-offset-6 col-md-5 col-xs-offset-4 col-xs-8">
                                        <div class="project-slider-content">
                                            <div class="project-meta">Dundee, England   |   12 November 2018</div>
                                            <h3><a href="project-detail.html">Kaioto industrial factory</a></h3>
                                            <a class="btn-link" href="project-detail.html">View details<i class="icon ion-md-add-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="project-box">
                                    <img src="https://via.placeholder.com/1200x631.png" alt="" class="">
                                    <div class="col-md-offset-6 col-md-5 col-xs-offset-4 col-xs-8">
                                        <div class="project-slider-content">
                                            <div class="project-meta">Mowcow, Russia   |   12 November 2018</div>
                                            <h3><a href="project-detail.html">Areb Oil Rigs</a></h3>
                                            <a class="btn-link" href="project-detail.html">View details<i class="icon ion-md-add-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="project-box">
                                    <img src="https://via.placeholder.com/1200x631.png" alt="" class="">
                                    <div class="col-md-offset-6 col-md-5 col-xs-offset-4 col-xs-8">
                                        <div class="project-slider-content">
                                            <div class="project-meta">Dundee, England   |   12 November 2018</div>
                                            <h3><a href="project-detail.html">Metal Industry</a></h3>
                                            <a class="btn-link" href="project-detail.html">View details<i class="icon ion-md-add-circle"></i></a>
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
                        <h4 class="text-primary">EXPLORE WORK</h4>
                        <h2>Other project</h2>
                        <br>
                    </div>
                    <div class="col-md-12">
                        <div class="project-filter" data-column="">

                            <div id="filters" class="cat-filter">
                                <a href="#" data-filter="*" class="filter-item all-cat selected">All project</a>
                                <a href="#" data-filter=".construction" class="filter-item ">Construction</a>
                                <a href="#" data-filter=".energy" class="filter-item">Energy</a>
                                <a href="#" data-filter=".engineering" class="filter-item">Engineering</a>
                                <a href="#" data-filter=".petroleum" class="filter-item">Petroleum</a>
                                <a href="#" data-filter=".automotive" class="filter-item">Automotive</a>
                                <a href="#" data-filter=".transportation" class="filter-item">Transportation</a>
                                <a href="#" data-filter=".oil-gas" class="filter-item">Oil & Gas</a>
                            </div>

                            <div id="projects" class="project-grid projects row ">

                                <div class="project-item construction col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img src="https://via.placeholder.com/720x900.png" alt="">
                                        <div class="project-info">
                                            <div class="project-meta">Russia   |   12 November 2018</div>
                                            <div class="project-content">
                                                <h3><a href="project-detail.html">Refurbishing Gears</a></h3>
                                                <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                                <a href="project-detail.html">View details <i class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-item energy col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img src="https://via.placeholder.com/720x900.png" alt="">
                                        <div class="project-info">
                                            <div class="project-meta">Russia   |   12 November 2018</div>
                                            <div class="project-content">
                                                <h3><a href="project-detail.html">Wind power in Russia</a></h3>
                                                <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                                <a href="project-detail.html">View details <i class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-item engineering col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img src="https://via.placeholder.com/720x900.png" alt="">
                                        <div class="project-info">
                                            <div class="project-meta">Russia   |   12 November 2018</div>
                                            <div class="project-content">
                                                <h3><a href="project-detail.html">Water Recycle</a></h3>
                                                <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                                <a href="project-detail.html">View details <i class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-item petroleum col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img src="https://via.placeholder.com/720x900.png" alt="">
                                        <div class="project-info">
                                            <div class="project-meta">Russia   |   12 November 2018</div>
                                            <div class="project-content">
                                                <h3><a href="project-detail.html">Industry Complex</a></h3>
                                                <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                                <a href="project-detail.html">View details <i class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-item automotive col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img src="https://via.placeholder.com/720x900.png" alt="">
                                        <div class="project-info">
                                            <div class="project-meta">Russia   |   12 November 2018</div>
                                            <div class="project-content">
                                                <h3><a href="project-detail.html">Warehouse Industry</a></h3>
                                                <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                                <a href="project-detail.html">View details <i class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-item transportation col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img src="https://via.placeholder.com/720x900.png" alt="">
                                        <div class="project-info">
                                            <div class="project-meta">Russia   |   12 November 2018</div>
                                            <div class="project-content">
                                                <h3><a href="project-detail.html">Machine Engineering</a></h3>
                                                <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                                <a href="project-detail.html">View details <i class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-item oil-gas col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img src="https://via.placeholder.com/720x900.png" alt="">
                                        <div class="project-info">
                                            <div class="project-meta">Russia   |   12 November 2018</div>
                                            <div class="project-content">
                                                <h3><a href="project-detail.html">Gear Manufacturing</a></h3>
                                                <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                                <a href="project-detail.html">View details <i class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-item construction col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img src="https://via.placeholder.com/720x900.png" alt="">
                                        <div class="project-info">
                                            <div class="project-meta">Russia   |   12 November 2018</div>
                                            <div class="project-content">
                                                <h3><a href="project-detail.html">Oil Pipeline Project</a></h3>
                                                <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                                <a href="project-detail.html">View details <i class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="project-item transportation col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img src="https://via.placeholder.com/720x900.png" alt="">
                                        <div class="project-info">
                                            <div class="project-meta">Russia   |   12 November 2018</div>
                                            <div class="project-content">
                                                <h3><a href="project-detail.html">Gothia Mining Factory</a></h3>
                                                <p>Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...</p>
                                                <a href="project-detail.html">View details <i class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


@endsection