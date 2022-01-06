<head>
    <title>@section('title') @show</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('project_panel/assets/images/favicon.ico')}}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('project_panel/assets/css/style.css')}}">

    @yield('page-level-cssFiles')
    @yield('page-level-css')
    <style type="text/css">
        .help-block.with-errors {
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #ff5252;
        }
    </style>
</head>
