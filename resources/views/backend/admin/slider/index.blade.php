
@extends('backend.admin.index')
@section('body')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Slider List</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{url('admin/slider/add-slider')}}" style="float: right;" class="btn btn-primary btn-sm push pull-right"><i class="fa fa-plus-circle"></i> Add Slider</a>
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
                    <div class="row">
                        <div class="col-sm-12">
                            <label for=""><strong><i class="fa fa-search"></i> Filter Slider || </strong> <i>{{count($sliders)}} Slider Found</i></label>
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <strong>Status</strong>
                                                    </span>
                                                </div>
                                                <select name="status" class="form-control" id="event_status"  onchange="javascript:this.form.submit();">
                                                    <option value="">--Choose--</option>
                                                    <option value="public" @if(request('status')=='public') selected @endif>Public</option>
                                                    <option value="draft" @if(request('status')=='draft') selected @endif>Draft</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($sliders)>0)
                                @foreach($sliders as $key=>$slider)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            <img class="img-avatar img-avatar48" src="{{url('public/uploads/slider').'/'.$slider->image}}" alt="">
                                        </td>
                                        <td>{{$slider->title}}</td>
                                        <td>
                                            <form action="{{url('admin/slider/slider-list').'/'.$slider->id.'/changeStatus'}}" method="post">
                                                {{csrf_field()}}
                                                @if($slider->status=='public')
                                                    <input type="hidden" name="status" value="draft">
                                                    <button class="btn btn-success btn-sm" onclick="return confirm('Are you sure to make draft this record?')">Public</button>
                                                @else
                                                    <input type="hidden" name="status" value="public">
                                                    <button class="btn btn-warning btn-sm" onclick="return confirm('Are you sure to published this record?')">Draft</button>
                                                @endif
                                            </form>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm" title="Edit Image"  data-toggle="modal" data-target="#modal-block-popin_{{$slider->id}}"><i class="fa fa-user-edit"></i></a>
                                            <a href="{{url('admin/slider/slider-list').'/'.$slider->id.'/delete'}}" onclick="return confirm('Are you sure to delete this record?')" class="btn btn-danger btn-sm" title="Delete Image"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <!-- Pop In Block Modal -->
                                    <div class="modal fade" id="modal-block-popin_{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-popin" role="document">
                                            <div class="modal-content">
                                                <form action="{{url('admin/slider/slider-list').'/'.$slider->id.'/update'}}" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <div class="block block-themed block-transparent mb-0">
                                                        <div class="block-header bg-primary-dark">
                                                            <h3 class="block-title">Edit Slider</h3>
                                                            <div class="block-options">
                                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                                    <i class="fa fa-fw fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="block-content">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <strong>Title <span class="text-danger">*</span></strong>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" class="form-control" id="example-group1-input1" value="{{$slider->title}}" name="title"  placeholder="Slider Title" required>
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
                                                                            <input type="text" class="form-control" id="example-group1-input1" value="{{$slider->sub_title}}" name="sub_title"  placeholder="Slider Sub Title">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        @php
                                                                            $imageAction = 'readURL_'.$slider->id;
                                                                        @endphp

                                                                        <div class="row">
                                                                            <div class="col-sm-2">
                                                                                <img src="{{url('public/uploads/slider').'/'.$slider->image}}" alt="" style="width: 100%;">
                                                                            </div>
                                                                            <div class="col-sm-10">
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text" id="inputGroupFileAddon01{{$slider->id}}">Upload</span>
                                                                                    </div>
                                                                                    <div class="custom-file">
                                                                                        <input type="file" name="image" class="custom-file-input" onchange="{{$imageAction}}(this);"  id="inputGroupFile01{{$slider->id}}" aria-describedby="inputGroupFileAddon01{{$slider->id}}">
                                                                                        <label class="custom-file-label" for="inputGroupFile01{{$slider->id}}">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <strong>Status<span class="text-danger">*</span></strong>
                                                                                </span>
                                                                            </div>
                                                                            <select name="status" class="form-control" id="" required>
                                                                                <option value="public" @if($slider->status=='public') selected @endif>Public</option>
                                                                                <option value="draft" @if($slider->status=='draft') selected @endif>Draft</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-content block-content-full text-right bg-light">
                                                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Pop In Block Modal -->

                                    {{--<script>--}}
                                        {{--document.addEventListener("DOMContentLoaded", function() {--}}

                                            {{--document.getElementById('button-image{{$slider->id}}').addEventListener('click', (event) => {--}}
                                                {{--event.preventDefault();--}}

                                            {{--window.open('{{url('admin')}}/fm-button', 'fm', 'width=1400,height=800');--}}
                                        {{--});--}}
                                        {{--});--}}

                                        {{--// set file link--}}
                                        {{--function fmSetLink($url) {--}}
                                            {{--document.getElementById('image_label').value = $url;--}}
                                        {{--}--}}
                                    {{--</script>--}}

                                @endforeach
                                    @else
                                <tr>
                                    <td colspan="5" class="text-center text-danger" style="font-weight: bold;">Record Not Found !!</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- END Full Table -->
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->



@endsection
