@extends('project_website.website_layouts.master')
@section('content')
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix" style="min-height: 300px;" data-bg-image="{{asset('project_website/assets/images/breadcrumb/bg_08.jpg')}}">
            <div class="overlay"></div>
            <div class="container " data-aos="fade-up" data-aos-delay="100" >

                <form action="{{route('services_page')}}" method="get">
                    @csrf
                    <div class="row " style="margin-top: 130px;">
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
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="">Home</a></li>
                    <li>Services</li>

                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-lg-11  info-section p-5 ml-5" style="background: none !important; ">
                @foreach($get_services as $keys=>$values)
                    <div class="card col-md-5 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded" style="float: left; ">
                        <div class="cart-body" >
                            <div class="col-md-4" style="float: left;" >
                                <img src="{{asset('project_panel/assets/images/service_images/'.$values->ServiceImage->image)}}" alt="">
                            </div>
                            <div class="col-md-8" style="float: left;" >
                                <h5>{{$values->title}}</h5>
                                <p style="color: red;"><a href="{{route('shop',$values->User->id)}}">{{$values->User->name}}</a></p>
                                <h6> ${{$values->price}}</h6>
                                <a href="{{route('service_details',$values->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=" card col-md-1 col-sm-12 " style="float: left; border: none; background: none;"><div class="card-body"></div></div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
