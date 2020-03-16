@extends('frontend.layouts.front')
@section('content')
    <div id="content" class="site-content">
        <div class="page-header">
            <div class="container">
                <div class="breadc-box no-line">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title">Login</h2>
                            <ul id="breadcrumbs" class="breadcrumbs none-style">
                                <li><a href="{{url('')}}">Home</a></li>
                                <li class="active">Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Login</h3>
                        <form class="login-form" method="post">{{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username or email *</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <div class="checkbox-remember">
                                        <label for="rememberme">
                                            <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me
                                        </label>
                                    </div>
                                    <br>
                                    <div class="industris-space-30"></div>
                                    <a class="lost-password" href="javascript:void(0)">Lost your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection