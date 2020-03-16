
@extends('backend.admin.index')
@section('body')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Add New Slider</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{url('admin/slider/slider-list')}}" style="float: right;" class="btn btn-primary btn-sm push pull-right"><i class="fa fa-list-alt"></i> Slider List</a>
                                <!-- Pop In Block Modal -->
                            </li>
                        </ol>
                    </nav>
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

        <!-- Full Table -->
            <div class="block block-rounded block-bordered">
                <div class="block-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <strong>Title <span class="text-danger">*</span></strong>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="example-group1-input1" value="{{old('title')}}" name="title"  placeholder="Slider Title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <strong>Sub Title</strong>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="example-group1-input1" value="{{old('sub_title')}}" name="sub_title"  placeholder="Slider Sub Title">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="#" id="get_image" alt="" style="width: 100%;">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" onchange="readURL(this);"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <strong>Status<span class="text-danger">*</span></strong>
                                            </span>
                                        </div>
                                        <select name="status" class="form-control" id="" required>
                                            <option value="public" @if(old('status')=='public') selected @endif>Public</option>
                                            <option value="draft" @if(old('status')=='draft') selected @endif>Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- END Full Table -->
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#get_image')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    {{--<script>--}}
        {{--document.addEventListener("DOMContentLoaded", function() {--}}

            {{--document.getElementById('button-image').addEventListener('click', (event) => {--}}
                {{--event.preventDefault();--}}

            {{--window.open('{{url('admin')}}/fm-button', 'fm', 'width=1400,height=800');--}}
        {{--});--}}
        {{--});--}}

        {{--// set file link--}}
        {{--function fmSetLink($url) {--}}
            {{--document.getElementById('image_label').value = $url;--}}
        {{--}--}}
    {{--</script>--}}
@endsection
