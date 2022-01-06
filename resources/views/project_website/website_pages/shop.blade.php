@extends('project_website.website_layouts.master')
@section('content')
    <style>
        .breadcrumb_nav li:after {
            content: "" !important;
        }
        .card-horizontal {
            display: flex;
            flex: 1 1 auto;
        }

        }
    </style>
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix" style="min-height: 300px;" data-bg-image="{{asset('project_website/assets/images/breadcrumb/bg_08.jpg')}}">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title text-white mb-0">{{$get_name->name}}</h1>
                <h6 class=" text-white mb-0"><i class="fa fa-map-marker"></i>&nbsp;{{$get_name->Merchant->address}}</h6>
            </div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li" >
                    @foreach($catPro['category'] as $keys=>$values)
                            <li class="col-md-3 col-sm-4"><a style="text-transform: capitalize; border-bottom: 2px solid #0000008f; padding-bottom: 7px;" href="#{{$values}}">{{$values}}</a></li>&nbsp;
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="col-lg-11  info-section p-5 ml-5" style="background: none !important; ">
            @foreach($catPro['products'] as $keys=>$products)
                <h4 style="text-transform: capitalize;" id="{{$keys}}">{{$keys}}</h4>
                <div class="row">
                    @foreach($products as $keys=>$values)
                        <div class="col-6 mt-3">
                            <div class="card col-md-5 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded">
                                <div class="card-horizontal ">
                                    <div class="img-square-wrapper">
                                        <img class="col-lg-4 col-sm-4 col-md-4" src="{{asset('project_panel/assets/images/service_images/'.$values->ServiceImage->image)}}" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">{{$values->title}}</h4>
                                        <p style="color: red;"><a href="{{route('service_details',$values->id)}}">{{$values->User->name}}</a></p>
                                        <h5>${{$values->price}}</h5>
                                        <div align="right">
                                            <p >{{$values->crated_at}}</p></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>


    </section>
@endsection
