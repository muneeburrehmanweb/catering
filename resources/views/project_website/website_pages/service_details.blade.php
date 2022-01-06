@extends('project_website.website_layouts.master')
@section('content')
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix" style="min-height: 300px;" data-bg-image="{{asset('project_website/assets/images/breadcrumb/bg_08.jpg')}}">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title text-white mb-0">service Details</h1>
            </div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="">Home</a></li>
                    <li>Service Details</li>

                </ul>
            </div>
        </div>
    </section>
    <section class="faq_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 order-last">
                    <div class="faq_content">
                        <h2 class="title_text mb_15" data-aos="fade-up" data-aos-delay="100">{{$get_service->title}}</h2>
                        <div class="mb_30" data-aos="fade-up" data-aos-delay="200">${{$get_service->price}}/person </div>
                        <h5 class="title_text mb_15" data-aos="fade-up" data-aos-delay="100">Menu Details</h5>
                        <div class="mb_30" data-aos="fade-up" data-aos-delay="200">{!! html_entity_decode($get_service->menu_details) !!}</div>
                        <hr>
                        <h5 class="title_text mb_15" data-aos="fade-up" data-aos-delay="100">Add Ons</h5>
                        <div class="mb_30" data-aos="fade-up" data-aos-delay="200">{!! html_entity_decode($get_service->add_ons) !!}</div>
                    </div>
                    <div class="row">
                        <a href="{{route('checkout',$get_service->id)}}" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
                    <aside class="sidebar_section faq_sidebar p-0 clearfix">

                        <div class="sb_widget sb_category_list" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{asset('project_panel/assets/images/service_images/'.$get_service->ServiceImage->image)}}" alt="service image">
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
