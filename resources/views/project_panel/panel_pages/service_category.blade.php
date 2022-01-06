@extends('project_panel.panel_layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
@section('page_title')
    Dashboard
@endsection
@section('breadcrumb')
    Dashboard
@endsection
@include('project_panel.panel_assets.status_bars')
<div class="row">
    <!-- customar project  start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                        <h5>Category</h5>
                    </div>

                </div>
                <hr>
                <form action="{{route('submit_category')}}" method="post" class="needs-validation" novalidate >
                    @csrf
                    <div class="form-group col-md-8" style="float: left;">

                        <input type="text" class="form-control" name="category_title" id="category_title" placeholder="Enter A Category Title" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            you can't leave it blank.
                        </div>
                    </div>
                    <div class="form-group col-md-2" style="float: left;">
                    <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <table id="report-table" class="table mb-0">
                        <thead class="thead-light">
                        <tr>
                            <th>title</th>
                            <th>Added Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($show_services_category as $keys=>$values)
                            <tr>
                                <td class="align-middle">
{{--                                    <img src="{{asset('project_panel/assets/images/product/prod-1.jpg')}}" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />--}}
                                    <p class="m-0 d-inline-block align-middle font-16">
                                        <a href="#!" class="text-body">{{$values->title ?? ''}}</a>
                                    </p>
                                </td>
                                <td class="align-middle">
                                    {{$values->created_at ?? ''}}
                                </td>

                                <td class="align-middle">
                                    <span class="badge badge-success">{{$values->status ?? ''}}</span>
                                </td>

                                <td class="table-action">
{{--                                    <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>--}}
{{--                                    <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>--}}
                                    <a href="{{route('del_category',$values->id)}}" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
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
