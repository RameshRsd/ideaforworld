
@extends('backend.admin.index')
@section('body')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Edit Profile</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
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

            <div class="block block-rounded block-bordered">
                <div class="block-content">
                    <!-- Progress Wizards -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Progress Wizard -->
                            <div class="js-wizard-simple block block block-rounded block-bordered">
                                <!-- Step Tabs -->
                                <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#wizard-progress-step4" data-toggle="tab">Contact Details</a>
                                    </li>
                                </ul>
                                <!-- END Step Tabs -->

                                <!-- Form -->
                                <form action="" method="POST" enctype="multipart/form-data">

                                {{csrf_field()}}

                                <!-- Wizard Progress Bar -->
                                    <div class="block-content block-content-sm">
                                        <div class="progress" data-wizard="progress" style="height: 8px;">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- END Wizard Progress Bar -->

                                    <!-- Steps Content -->
                                    <div class="block-content block-content-full tab-content" style="min-height: 300px;">
                                        <!-- Step 1 -->
                                        <div class="tab-pane active" id="wizard-progress-step1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <strong>Name <span class="text-danger">*</span></strong>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" id="example-group1-input1" value="{{$profile->company_name}}" name="company_name"  placeholder="Hotel Full Name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">About Hotel</label><br>
                                                        <textarea class="form-control"  id="js-ckeditor" name="details">{!! $profile->details !!}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Heading/Slogan</label><br>
                                                        <textarea class="form-control"  name="company_heading">{{$profile->company_heading}}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- END Step 1 -->

                                        <!-- Step 4 -->
                                        <div class="tab-pane" id="wizard-progress-step4" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <strong>Telephone No. 1</strong>
                                                        </span>
                                                            </div>
                                                            <input type="text" name="telephone1" value="{{$profile->telephone1}}" class="form-control"  placeholder="Office Contact Number">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <strong>Telephone No. 2</strong>
                                                        </span>
                                                            </div>
                                                            <input type="text" name="telephone2" value="{{$profile->telephone2}}" class="form-control"  placeholder="Office Contact Number">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <strong>Office Email</strong>
                                                        </span>
                                                            </div>
                                                            <input type="text" name="email1" value="{{$profile->email1}}" class="form-control"  placeholder="Office Email Address">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <strong>Full Address</strong>
                                                        </span>
                                                            </div>
                                                            <input type="text" name="company_address" class="form-control" value="{{$profile->company_address}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Map Link</label><br>
                                                        <textarea class="form-control"  name="map_link">{{$profile->map_link}}</textarea>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- END Step 4 -->
                                    </div>
                                    <!-- END Steps Content -->

                                    <!-- Steps Navigation -->
                                    <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-warning" data-wizard="prev">
                                                    <i class="fa fa-angle-left mr-1"></i> Previous
                                                </button>
                                            </div>
                                            <div class="col-6 text-right">
                                                <button type="button" class="btn btn-primary" data-wizard="next">
                                                    Next <i class="fa fa-angle-right ml-1"></i>
                                                </button>
                                                <button type="submit" class="btn btn-success d-none" data-wizard="finish">
                                                    <i class="fa fa-check mr-1"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Steps Navigation -->
                                </form>
                                <!-- END Form -->
                            </div>
                            <!-- END Progress Wizard -->
                        </div>
                    </div>
                    <!-- END Progress Wizards -->
                </div>
            </div>

        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
@endsection
