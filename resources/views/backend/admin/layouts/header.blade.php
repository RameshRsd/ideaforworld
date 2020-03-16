@section('header')

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    @if(isset($title))
    <title>{{$title}}</title>
    @else
    <title>Admin Panel - IDEA FOR WORLD</title>
    @endif

    <meta name="author" content="IDEA FOR WORLD">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    @if(isset($title))
        <meta property="og:title" content="{{$title}}">
    @else
        <meta property="og:title" content="Admin Panel - IDEA FOR WORLD">
    @endif

    <meta property="og:site_name" content="Admission Nepal">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    @yield('style')
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{url('public/theme/backend')}}/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('public/theme/backend')}}/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('public/theme/backend')}}/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{url('public/theme/custom/style.css')}}">
    <!-- Page JS Plugins CSS -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/simplemde/simplemde.min.css">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/datatables/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">


    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/dropzone/dist/min/dropzone.min.css">
    <link rel="stylesheet" href="{{url('public/theme/backend')}}/assets/js/plugins/flatpickr/flatpickr.min.css">

    <link rel="stylesheet" id="css-main" href="{{url('public/theme/backend')}}/assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->

</head>
<body>
<div id="page-container" class="sidebar-o sidebar-dark sidebar-mini enable-page-overlay side-scroll page-header-fixed page-header-dark main-content-narrow">

@endsection