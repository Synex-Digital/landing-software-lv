@extends('dashboard.layouts.app')
@section('title')Profile @endsection

@section('content')
<div class="page-titles">
    <h4>Profile</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img class="nav-profile m-auto" src="{{ asset('dashboard_assets/images/profile/17.webp') }}" alt="">
                </div>
                <div class="profile-personal-info mt-3">
                    <h4 class="text-primary mb-4 text-center">Personal Information</h4>
                    <div class="row mb-2">
                        <div class="col-12"><span> {{ auth()->user()->name ? auth()->user()->name.'|':''}}{{Str::ucfirst(Auth::user()->role) }}</span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12"><span>{{ auth()->user()->email }}</span>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Profile</h4>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
</div>




@endsection
