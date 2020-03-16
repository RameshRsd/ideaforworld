
@extends('backend.admin.index')
@section('body')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Contact List</h1>
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
                        @if(\Illuminate\Support\Facades\Session::has('contact_id'))
                            @php $contact=\App\Model\Contact::find(\Illuminate\Support\Facades\Session::get('contact_id')); @endphp
                        <a href="{{url('admin/contact').'/'.$contact->id.'/restore'}}" onclick="return confirm('Are you sure to restored this action?')"> Undo Action</a>
                        @endif
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
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-12">--}}
                            {{--<label for=""><strong><i class="fa fa-search"></i> Filter Contacts || </strong> <i>{{count($sliders)}} Slider Found</i></label>--}}
                            {{--<form action="" method="get">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-3">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-prepend">--}}
                                                    {{--<span class="input-group-text">--}}
                                                        {{--<strong>Status</strong>--}}
                                                    {{--</span>--}}
                                                {{--</div>--}}
                                                {{--<select name="status" class="form-control" id="event_status"  onchange="javascript:this.form.submit();">--}}
                                                    {{--<option value="">--Choose--</option>--}}
                                                    {{--<option value="public" @if(request('status')=='public') selected @endif>Public</option>--}}
                                                    {{--<option value="draft" @if(request('status')=='draft') selected @endif>Draft</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Newsletter</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $key=>$contact)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$contact->full_name}}</td>
                                    <td>{{$contact->phone_number}}</td>
                                    <td>{{$contact->email_address}}</td>
                                    <td>
                                        @if($contact->subscribe=='yes')
                                            <span class="btn btn-success btn-sm">Subscribed</span>
                                            @else
                                            <span class="btn btn-warning btn-sm">Un Subscribed</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('admin/contact').'/'.$contact->id.'/remove'}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to removed this person?')"><i class="fa fa-trash"></i> Remove</a>
                                    </td>
                                </tr>
                            @endforeach
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
