@extends('project_panel.panel_layouts.master')
@section('title')
    Profile
@endsection
@section('content')
@section('page_title')
    Profile
@endsection
@section('breadcrumb')
    Profile
@endsection
@include('project_panel.panel_assets.status_bars')
<div class="col-md-4 order-md-1" style="float: left;">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Profile</h5>

        </div>
        <div class="card-body" style="text-align: center;">
            <ul class="list-inline">
                <li class="list-inline-item" >
                    <div class="position-relative d-inline-block " >
                        <img class="img-radius img-fluid wid-100" src="{{asset('project_panel/assets/images/user/avatar-5.jpg')}}" alt="User image">
                    </div>
                    <h3>{{$get_profile->name}}</h3>
{{--                    <h3>Muneeb Ur Rehman</h3>--}}
                </li>

            </ul>
        </div>
    </div>

</div>
<div class="col-md-8 order-md-1" style="float: left;">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Profile</h5>

        </div>
        <div class="card-body">
            <form id="validation-form123" action="{{route('update_profile')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$get_profile->name}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$get_profile->email}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control" name="contact" value="{{$get_profile->Merchant->contact ?? ''}}" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="city" value="{{$get_profile->Merchant->city ?? ''}}" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control" name="country" value="{{$get_profile->Merchant->country ?? ''}}" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{$get_profile->Merchant->address ?? ''}}" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn  btn-primary">Update</button>
            </form>
        </div>
    </div>

</div>

@endsection
