@extends('project_website.website_layouts.master')
@section('content')
    <main>
        @include('project_website.website_assets.sidebar_wrap_menu')
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix" style="min-height: 300px;" data-bg-image="{{asset('project_website/assets/images/breadcrumb/bg_08.jpg')}}">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title text-white mb-0">Frequently Asked Questions</h1>
            </div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="">Home</a></li>
                    <li>Pages</li>
                    <li>F.A.Q.</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="faq_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 order-last">
                    <div class="faq_content">
                        <h2 class="title_text mb_15" data-aos="fade-up" data-aos-delay="100">Official Rental Information:</h2>
                        <p class="mb_30" data-aos="fade-up" data-aos-delay="200">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque ipsum sapien, cursus eu scelerisque eget, scelerisque nec nulla. In turpis ex, congue ut scelerisque ut, euismod a turpis. Nunc metus purus, pretium ac nunc vitae, ultricies euismod magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer hendrerit, ipsum et tristique tincidunt, mauris eros tristique dolor, ut ornare turpis sapien at tellus</p>
                        <div id="faq_accordion" class="faq_accordion mb_30">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <div class="card-header"><a data-toggle="collapse" href="#collapse_one">When the rentals can be extended up?</a></div>
                                <div id="collapse_one" class="collapse show" data-parent="#faq_accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-header"><a class="collapsed" data-toggle="collapse" href="#collapse_two">What documents and ID are required to rent a car?</a></div>
                                <div id="collapse_two" class="collapse" data-parent="#faq_accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="300">
                                <div class="card-header"><a class="collapsed" data-toggle="collapse" href="#collapse_three">When ornare arcu tristique sit amet. Phasellus sed sapien vitae magna tempus pulvinar quis at est?</a></div>
                                <div id="collapse_three" class="collapse" data-parent="#faq_accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-header"><a class="collapsed" data-toggle="collapse" href="#collapse_four">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per?</a></div>
                                <div id="collapse_four" class="collapse" data-parent="#faq_accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-header"><a class="collapsed" data-toggle="collapse" href="#collapse_five">When the rentals can be extended up?</a></div>
                                <div id="collapse_five" class="collapse" data-parent="#faq_accordion">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0" data-aos="fade-up" data-aos-delay="600">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque ipsum sapien, cursus eu scelerisque eget, scelerisque nec nulla. In turpis ex, congue ut scelerisque ut, euismod a turpis. Nunc metus purus, pretium ac nunc vitae, ultricies euismod magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer hendrerit, ipsum et tristique tincidunt, mauris eros tristique dolor, ut ornare turpis sapien at tellus</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
                    <aside class="sidebar_section faq_sidebar p-0 clearfix">

                        <div class="sb_widget sb_category_list" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="sb_widget_title">Question Categories:</h3>
                            <ul class="ul_li_block clearfix">
                                <li><a href="#!"><i class="fas fa-caret-right"></i> Official Rental Information</a></li>
                                <li><a href="#!"><i class="fas fa-caret-right"></i> Billing Information</a></li>
                                <li><a href="#!"><i class="fas fa-caret-right"></i> Claims & Car Damages</a></li>
                                <li><a href="#!"><i class="fas fa-caret-right"></i> Payment Methods & Deposits</a></li>
                                <li><a href="#!"><i class="fas fa-caret-right"></i> Bonus Cards & Programs</a></li>
                                <li><a href="#!"><i class="fas fa-caret-right"></i> Car Rental Protection</a></li>
                                <li><a href="#!"><i class="fas fa-caret-right"></i> Imprint & Privacy</a></li>
                            </ul>
                        </div>
                        <div class="sb_widget sb_support_center" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="sb_widget_title">Support Center:</h3>
                            <ul class="ul_li_block clearfix">
                                <li><i class="fas fa-phone"></i> 01967 411232</li>
                                <li><i class="fas fa-phone"></i> +1 01 967 411 232</li>
                                <li><i class="fas fa-headset"></i> <a href="https://html.merku.love/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e8808d84989a879c879a9b8b8d869c8d9adadba88e9a9b">[email&#160;protected]</a></li>
                                <li><i class="fas fa-headset"></i> <a href="https://html.merku.love/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7f0d100b100d0c110a121d1a0d1c171e0b3f190d0c">[email&#160;protected]</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <section class="comment_form_section sec_ptb_150 clearfix" data-bg-gradient="linear-gradient(0deg, #161829, #292D45)">
        <div class="container">
            <div class="row mb_60 justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <div class="section_title text-center" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="title_text text-white mb-0"><span>Didn't find the Answer? Ask Us a Question</span></h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form_item" data-aos="fade-up" data-aos-delay="300"><input type="text" name="firstname" placeholder="First Name"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form_item" data-aos="fade-up" data-aos-delay="400"><input type="text" name="lastname" placeholder="Last Name"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form_item" data-aos="fade-up" data-aos-delay="500"><input type="email" name="email" placeholder="E-mail"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form_item" data-aos="fade-up" data-aos-delay="600"><input type="tel" name="phone" placeholder="Phone Number"></div>
                    </div>
                </div>
                <div class="form_item" data-aos="fade-up" data-aos-delay="700"><textarea name="commtent" placeholder="Ask Your Question here"></textarea></div>
                <div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="800"><button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Send Question <img src="{{asset('project_website/assets/images/icons/icon_01.png')}}" alt="icon_not_found"></button></div>
            </form>
        </div>
    </section>
{{--    <section class="main_office_section sec_ptb_100 clearfix">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center justify-content-lg-between justify-content-sm-center">--}}
{{--                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">--}}
{{--                    <div class="office_image" data-aos="fade-up" data-aos-delay="100"><img src="assets/images/about/img_01.jpg" alt="image_not_found"></div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">--}}
{{--                    <div class="office_info" data-aos="fade-up" data-aos-delay="300">--}}
{{--                        <h3 class="item_title">Main Office:</h3>--}}
{{--                        <ul class="ul_li_block clearfix">--}}
{{--                            <li><i class="fas fa-map-marker-alt"></i> Unit 9, Manor Industrial Estate, Lower Wash Lane, Warrington, WA4</li>--}}
{{--                            <li><i class="fas fa-clock"></i> WH: 8:00am - 9:30pm</li>--}}
{{--                            <li><i class="fas fa-phone"></i> 01967 411232</li>--}}
{{--                            <li><i class="fas fa-envelope"></i> <a href="https://html.merku.love/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dfadb0abb0adacbab2b39fbab2b3f1b9ad">[email&#160;protected]</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
</main>
@endsection
