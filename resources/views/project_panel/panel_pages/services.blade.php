@extends('project_panel.panel_layouts.master')
@section('title')
    Services
@endsection
@section('content')
@section('page_title')
    Services
@endsection
@section('breadcrumb')
    Services
@endsection
<div class="row">
    <!-- customar project  start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                        <h5>My Services</h5>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('add_services')}}" class="btn btn-success btn-sm btn-round has-ripple" ><i class="feather icon-plus"></i> Service</a>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table id="report-table" class="table mb-0">
                        <thead class="thead-light">
                        <tr>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Added Date</th>
                            <th>Price</th>
{{--                            <th>Quantity</th>--}}
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($show_services as $keys=>$values)
                        <tr>
                            <td class="align-middle">

                                <img src="{{asset('project_panel/assets/images/service_images/'.App\Models\ServiceImage::Where('service_id',$values->id)->pluck('image')->first())}}" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                <p class="m-0 d-inline-block align-middle font-16">
                                    <a href="#!" class="text-body">{{$values->title ?? ''}}</a>
{{--                                    <br />--}}
{{--                                    <span class="text-warning feather icon-star-on"></span>--}}
{{--                                    <span class="text-warning feather icon-star-on"></span>--}}
{{--                                    <span class="text-warning feather icon-star-on"></span>--}}
{{--                                    <span class="text-warning feather icon-star-on"></span>--}}
{{--                                    <span class="text-warning feather icon-star-on"></span>--}}
                                </p>
                            </td>
                            <td class="align-middle">
                                {{$values->category ?? ''}}
                            </td>
                            <td class="align-middle">
                                {{$values->created_at ?? ''}}
                            </td>
                            <td class="align-middle">
                                ${{$values->price ?? ''}}
                            </td>
{{--                            <td class="align-middle">--}}
{{--                                654--}}
{{--                            </td>--}}
                            <td class="align-middle">
                                <span class="badge badge-success">Active</span>
                            </td>

                            <td class="table-action">
                                <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                <a href="{{route('edit_services',$values->id)}}" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                <a href="{{route('del_services',$values->id)}}" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- customar project  end -->
</div>

@endsection
