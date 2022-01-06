@extends('project_website.website_layouts.master')
@section('content')
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix" style="min-height: 300px;" data-bg-image="{{asset('project_website/assets/images/breadcrumb/bg_08.jpg')}}">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title text-white mb-0">Checkout</h1>
            </div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="">Home</a></li>
                    <li>Checkout</li>

                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="row" style="text-align: center;">
            <h1>Thank you for ordering</h1>
            <a href="{{route('landing')}}" class="btn btn-primary">Back to Main</a>
        </div>

    </section>

@endsection
