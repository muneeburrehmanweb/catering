@extends('project_panel.panel_layouts.master')
@section('title')
    Add Service
@endsection
@section('content')

@section('page_title')
    Add Service
@endsection
@section('breadcrumb')
    Add Service
@endsection
@include('project_panel.panel_assets.status_bars')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Add Services</h5>

        </div>
        <div class="card-body">
            @if(!$get_service)
                <form action="{{route('submit_service')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate >
            @else
                <form action="{{route('update_services',$get_service->id)}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate >
            @endif
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <div class="custom-file">
                        <label for="inputEmail4">Service Images</label>
                        @if(!$get_service)
                        <input type="file" name="service_image" class="custom-file-input" id="validatedCustomFile"  required>
                        @else
                        <input type="file" name="service_image" class="custom-file-input" id="validatedCustomFile" value="{{$get_service_image->image ?? ''}}">
                        @endif
                        <label class="custom-file-label" for="validatedCustomFile">Choose images...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Title</label>
                        <input type="text" class="form-control" name="service_title" id="service_title" placeholder="Service Title" value="{{$get_service->title ?? ''}}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            you can't leave it blank.
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="service_category">Select Category</label>
                        <select class="custom-select" name="service_category" id="service_category" required>
                            <option value="{{$get_service->category ?? ''}}">{{$get_service->category ?? 'Must Select One'}}</option>
                            @foreach($services_category as $keys=>$values)
                                <option value="{{$values->title}}">{{$values->title}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Price</label>
                        <input type="text" class="form-control" name="service_price" id="service_price" placeholder="Service Price" value="{{$get_service->price ?? ''}}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            you can't leave it blank.
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Menu Details</label>
                        <textarea name="menu_details" id="main-menu" required>{{$get_service->menu_details ?? ''}}</textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            you can't leave it blank.
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Add Ons</label>
                        <textarea name="add_ons" id="add-ons" required>{{$get_service->add_ons ?? ''}}</textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            you can't leave it blank.
                        </div>
                    </div>


                </div>
                @if($get_service)
                    <button type="submit" class="btn btn-primary">Update Service</button>
                @else
                    <button type="submit" class="btn btn-primary">Add Service</button>
                @endif

            </form>
        </div>
    </div>
</div>

@endsection
