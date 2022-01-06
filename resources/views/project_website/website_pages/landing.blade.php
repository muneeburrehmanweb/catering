@extends('project_website.website_layouts.master')
@section('content')

    <style>

        .info-section{
            background: hsla(240, 75%, 66%, 1);

            background: radial-gradient(circle, hsla(240, 75%, 66%, 1) 0%, hsla(246, 100%, 50%, 1) 100%);

            background: -moz-radial-gradient(circle, hsla(240, 75%, 66%, 1) 0%, hsla(246, 100%, 50%, 1) 100%);

            background: -webkit-radial-gradient(circle, hsla(240, 75%, 66%, 1) 0%, hsla(246, 100%, 50%, 1) 100%);

            filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#6666E9", endColorstr="#1900FF", GradientType=1 );
        }
    </style>
    <main>
@include('project_website.website_assets.sidebar_wrap_menu')
        <section class="banner_section parallaxie has_overlay text-white d-flex align-items-center clearfix" data-bg-image="{{asset('project_website/assets/images/backgrounds/bg_01.jpg')}}">
            <div class="overlay"></div>
            <div class="container">

                <div class="advance_search_form mt-0">
                    <div class="section_title text-center mb_30">

                        <h2 class="title_text mb-0 text-white" data-aos="fade-up" data-aos-delay="100"><span>order on demand catering from local restaurants nationwide</span></h2>
                    </div>
                    <form action="{{route('services_page')}}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="form_item" data-aos="fade-up" data-aos-delay="100">

                                    <div class="position-relative"><input id="location_two" type="text" name="service" placeholder="order on demand catering from local restaurants nationwide"> <label for="location_two" class="input_icon"><i class="fas fa-map-marker-alt"></i></label></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div data-aos="fade-up" data-aos-delay="300" class="col text-center"><button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Search <img src="{{asset('project_website/assets/images/icons/icon_01.png')}}" alt="icon_not_found"></button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

{{--        <section>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-11  info-section p-5 ml-5" style="background: none !important; ">--}}
{{--                @foreach($get_services as $keys=>$values)--}}
{{--                    <div class="card col-md-5 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded" style="float: left; ">--}}
{{--                        <div class="cart-body" >--}}
{{--                            <div class="col-md-4" style="float: left;" >--}}
{{--                                <img src="{{asset('project_panel/assets/images/service_images/'.$values->ServiceImage->image)}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-8" style="float: left;" >--}}
{{--                                <h5>{{$values->title}}</h5>--}}
{{--                                <p style="color: red;"><a href="{{route('shop',$values->User->id)}}">{{$values->User->name}}</a></p>--}}
{{--                                <h6> ${{$values->price}}</h6>--}}
{{--                                <a href="{{route('service_details',$values->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class=" card col-md-1 col-sm-12 " style="float: left; border: none; background: none;"><div class="card-body"></div></div>--}}
{{--                @endforeach--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <section>
            <div class="row">

                    <div class="col-lg-12 info-section p-4">
                        <div class="card col-md-4 col-sm-12" style="background: none; border: none; float: left; ">
                            <div class="cart-body col-md-10" style="text-align: center;">
                                <h1 style="color: #ffae4c; "><i class="fa fa-crown mt-4" style="font-size: 68px; transform: scale(2, 1);"></i></h1>
                                <h3 style="color: #FFFFFF; font-family: Helvetica Neue, Helvetica, sans-serif !important; ">What is catering King?<strong></strong></h3>
                                <p style="color: #FFFFFF;">we are on online catering marketplace partnering with local business to provide on demand catering to everbody.</p>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-12" style="background: none; border: none; float: left;">
                            <div class="cart-body col-md-10" style="text-align: center;">
                                <h1 style="color: #ffae4c; "><img class="mt-4" src="{{asset('project_website/assets/images/logo/cutlery.png')}}" style="height: 68px; width: 68px;"></h1>
                                <h3 style="color: #FFFFFF; font-family: Helvetica Neue, Helvetica, sans-serif !important; ">Support Small Business<strong></strong></h3>
                                <p style="color: #FFFFFF;">We Partner exclusively with small businesses. Enjoy carefully crafted meals made by local culinary experts</p>
                            </div>
                        </div>

                        <div class="card col-md-4 col-sm-12" style="background: none; border: none; float: left;">
                            <div class="cart-body col-md-10" style="text-align: center;">
                                <h1 style="color: #ffae4c; "><img class="mt-4" src="{{asset('project_website/assets/images/logo/mobile.png')}}" style="height: 68px; width: 68px;"></h1>
                                <h3 style="color: #FFFFFF; font-family: Helvetica Neue, Helvetica, sans-serif !important; ">Simple to use<strong></strong></h3>
                                <p style="color: #FFFFFF;">Easy to use ordering system makes ordering for your whole team a breeze.</p>
                            </div>
                        </div>

                    </div>

            </div>
        </section>


    </main>
@endsection
