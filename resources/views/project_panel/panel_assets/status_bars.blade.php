@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 6px 7px;">
        <strong>Success! </strong> {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 6px 7px;">
        <strong>Error! </strong> {{ session()->get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif

{{--@include('project_panel.panel_assets.status_bars')--}}
