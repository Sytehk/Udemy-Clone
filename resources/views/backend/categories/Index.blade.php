@extends('backend.layouts.app')

@section('title', __('strings.backend.dashboard.title') . ' | ' . app_name())



@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body card-min-height">
                    <base-admin-categories></base-admin-categories>
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
