@extends('layouts.backend.app')

@section('content')
    <div class="container">



        <div class="row gap-2  p-0 m-0 mt-1">
            <div class="card shadow border-left-3 border-primary border-top-0 border-bottom-0 border-end-0 border-3 mb-3"
                style="max-width: 14rem;">
                <div class="card-body">
                    <h1 class="card-title  text-primary fw-bold">{{ $token_request }}</h1>
                    <p class="card-text">Total Requests</p>
                </div>
            </div>
            <div class="card shadow border-left-3 border-success border-top-0 border-bottom-0 border-end-0 border-3 mb-3"
                style="max-width: 14rem;">
                <div class="card-body">
                    <h1 class="card-title text-success fw-bold">{{ $token_request_today }}</h1>
                    <p class="card-text">Requests Today</p>
                </div>
            </div>
            <div class="card shadow border-left-3 border-danger border-top-0 border-bottom-0 border-end-0 border-3 mb-3"
                style="max-width: 14rem;">
                <div class="card-body">
                    <h1 class="card-title  text-danger fw-bold">{{ $token_request_week }}</h1>
                    <p class="card-text">Requests This Week</p>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">
                    Access tokens
                    </h5>
            </div>
            <div class="card-body">
                <h5 class="card-title text-secondary">You need an API access token to configure our services. Read more
                    about
                    API
                    access
                    tokens in our documentation..</h5>
                <p class="card-text"></p>
                <a href="/admin/tokens" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Create Token</a>
            </div>
        </div>


    </div>
@endsection
