<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/bootstrap/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Nov 2021 10:16:15 GMT -->
@include('project_panel.panel_assets.sidebar')
@include('project_panel.panel_assets.head')

<body class="">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ breadcrumb ] start -->

@include('project_panel.panel_assets.topbar')



<!-- [ Main Content ] start -->

<!-- [ Main Content ] start -->



<!-- Required Js -->
@include('project_panel.panel_assets.scripts')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
{{--                                                        <h5 class="m-b-10">Dashboard Analytics</h5>--}}
                            <h5 class="m-b-10">@section('page_title')@show</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">@section('breadcrumb')@show</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @section('content')
        @show
    </div>


</div>
        <!-- [ breadcrumb ] end -->

</body>


<!-- Mirrored from ableproadmin.com/bootstrap/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Nov 2021 10:18:13 GMT -->
</html>
