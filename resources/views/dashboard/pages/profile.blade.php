@extends('dashboard.layouts.app')
@section('title')Profile @endsection

@section('content')
<div class="page-titles">
    <h4>Account</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Manage Profile</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    @if(auth()->user()->profile)
                    <img class="nav-profile m-auto" src="{{ asset('uploads/profile/'.auth()->user()->profile) }}" alt="">
                     @else
                     <img class="nav-profile m-auto" src="{{ asset('dashboard_assets/images/profile/17.webp') }}" alt="">
                     @endif

                </div>
                <div class="profile-personal-info mt-3">
                    <h4 class="text-primary mb-4 text-center">Personal Information</h4>
                    <div class="row mb-2">
                        <div class="col-12"><span> {{ auth()->user()->name ? auth()->user()->name. ' | ':''}}{{Str::ucfirst(Auth::user()->role) }}</span>
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
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Profile</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.profile_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Profile</label>
                        <input type="file" name="profile" class="form-control"  oninput="pic.src=window.URL.createObjectURL(this.files[0])" accept="image/*">

                    </div>
                    <div class="form-group col-md-3">
                       Current: <br>
                       @if(auth()->user()->profile)
                       <img class="nav-profile m-auto" src="{{ asset('uploads/profile/'.auth()->user()->profile) }}" alt="">
                        @else
                        <img class="nav-profile m-auto" src="{{ asset('dashboard_assets/images/profile/17.webp') }}" alt="">
                        @endif
                    </div>
                    <div class="form-group col-md-3">

                       Uploaded: <br>

                       <img id="pic"  class="" width="80" height="80" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Name</label>
                        <input name="name" type="text" placeholder="Name" class="form-control" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input  name="email" type="email" placeholder="example@domain.com" class="form-control" value="{{ auth()->user()->email }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Current Password</label>
                    <input name="current_password" type="text" placeholder="Current Password" class="form-control" >
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label> New Password</label>
                        <input name="password" type="password" placeholder="*******" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Confirm Password</label>
                        <input name="password_confirmation" type="password" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>

                <button id="updateBtn" type="submit" class="btn btn-primary float-end mt-3">Update</button>
            </form>
            </div>
        </div>
    </div>
</div>




@endsection

@section('script')
<script>
    $(document).ready(function() {
        //update button disable
        $('#updateBtn').on('click', function() {
                $(this).addClass('disabled').text('Updating...');
        });

    });
</script>
@endsection
