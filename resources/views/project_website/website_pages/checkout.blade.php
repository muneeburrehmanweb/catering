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
    <section class="reservation_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
                    <div class="feature_vehicle_item mt-0 ml-0" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('project_panel/assets/images/service_images/'.$get_service->ServiceImage->image)}}" alt="service image">
                    </div>

                </div>
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <div class="reservation_form">
                        <form action="{{route('submit_order')}}" method="post">
                            @csrf
                            <input type="hidden" name="service_id" value="{{$get_service->id}}">
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">

                                    <div class="form_item" data-aos="fade-up" data-aos-delay="100">
                                        <h4 class="input_title">Venue Address</h4>
                                        <div class="position-relative"><input id="location_two" type="text" name="location" placeholder="86 Albert Road, London, N51 4VK"> <label for="location_two" class="input_icon"><i class="fas fa-map-marker-alt"></i></label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="200">
                                        <h4 class="input_title">Pick A Date</h4>
                                        <input type="date" name="date" required>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">

                                    <div class="form_item" data-aos="fade-up" data-aos-delay="100">
                                        <h4 class="input_title">Function Category</h4>
                                        <div class="position-relative"><input id="function-category" type="text" name="function_cat" placeholder="e.g, birthday, wedding" required> <label for="location_two" class="input_icon"><i class="fas fa-rings-wedding"></i></label></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                                    <div class="form_item" data-aos="fade-up" data-aos-delay="100">
                                        <h4 class="input_title">Persons</h4>
                                        <div class="position-relative"><input id="function-category" type="text" name="persons" placeholder="Persons Quantity" required> <label for="location_two" class="input_icon"><i class="fas fa-user"></i></label></div>
                                    </div>

                                </div>

                            </div>


                            <hr class="mt-0" data-aos="fade-up" data-aos-delay="100">

                                <div class="form_item" data-aos="fade-up" data-aos-delay="800"><textarea name="information" placeholder="Additional information (Optional)"></textarea></div>

                                <hr data-aos="fade-up" data-aos-delay="200">
                                <div class="row align-items-center justify-content-lg-between">

                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300"><button type="submit" class="custom_btn bg_default_red text-uppercase">Reservation Now </button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
