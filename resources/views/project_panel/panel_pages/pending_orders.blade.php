@extends('project_panel.panel_layouts.master')
@section('title')
    Pending Orders
@endsection
@section('content')
@section('page_title')
    Pending Orders
@endsection
@section('breadcrumb')
    Pending Orders
@endsection


        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-12">
                @foreach($my_orders as $keys=>$values)
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center justify-contact-between">
                            <div class="col">
                                <div class="btn btn-primary">
                                    {{$values->order_id}}
                                </div>
                            </div>
                            <div class="col text-right">
                                <button class="btn btn-outline-primary">
                                    <i class="feather icon-thumbs-up"></i> Fulfill
                                </button>
                            </div>
                        </div>
                        @php
                            $service=App\Models\Service::Where('id',$values->service_id)->with('ServiceImage')->first();
                        @endphp
                        <div class="table-responsive">
                            <table class="table m-0 mt-3">
                                <tr>
                                    <td class="align-middle">
                                        <img src="{{asset('project_panel/assets/images/service_images/'.$service->ServiceImage->image)}}" alt="contact-img" title="contact-img" class="rounded mr-3" height="80" />
                                        <div class="m-0 d-inline-block align-middle font-16">
                                            <a href="{{route('service_details',$values->service_id)}}" class="text-body" target="_blank">
                                                <h6 class="d-inline-block">{{$service->title}}</h6>
                                            </a>
                                            <br />
{{--                                            <span class="text-warning feather icon-star-on"></span>--}}
{{--                                            <span class="text-warning feather icon-star-on"></span>--}}
{{--                                            <span class="text-warning feather icon-star-on"></span>--}}
{{--                                            <span class="text-warning feather icon-star-on"></span>--}}
{{--                                            <span class="text-warning feather icon-star-on"></span>--}}
                                        </div>
                                    </td>
                                    <td>
                                        <h5>${{$service->price}}</h5>
                                    </td>
                                    <td>
                                        <h5>{{$values->persons}} <i class="fa fa-user-circle"  ></i></h5>
                                    </td>
                                    <td class="text-right">
                                        <div class="text-left d-inline-block">
                                            <h6 class="my-0">Event at , {{$values->date}}</h6>
                                            <small class="text-muted">{{$values->information}}</small>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <hr class="mt-0">
                        <div class="row align-items-center justify-contact-between">
                            <div class="col">
                                <span class="text-muted">Ordered On</span>
                                <strong>{{$values->created_at}}</strong>
                            </div>
                            <div class="col text-right">
                                    @php
                                    $total_amount=$service->price * $values->persons;
                                    @endphp
                                <span class="text-muted">Ordered Amount</span>
                                <strong>${{$total_amount}}</strong>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->


@endsection
