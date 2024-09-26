@extends('dashboard.layouts.app')
@section('title')Settings @endsection

@section('content')
<div class="page-titles">
    <h4>Settings</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
    </ol>
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Settings</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Web Logo</label>
                        <input type="file" name="web_logo" class="form-control"  oninput="logo.src=window.URL.createObjectURL(this.files[0])" accept="image/*">

                    </div>
                    <div class="form-group col-md-6">
                        <label>Web Favicon</label>
                        <input type="file" name="web_fav" class="form-control"  oninput="fav.src=window.URL.createObjectURL(this.files[0])" accept="image/*">

                    </div>
                    <div class="form-group col-md-3">
                       Current: <br>
                       @if($settings->web_logo)
                       <img class="nav-profile m-auto" src="{{ asset('uploads/web/'.$settings->web_logo) }}" alt="">
                        @endif
                    </div>
                    <div class="form-group col-md-3">

                       Uploaded: <br>

                       <img id="logo"  class="" width="80" height="80" />
                    </div>
                    <div class="form-group col-md-3">
                       Current: <br>
                       @if($settings->web_fav)
                       <img class="nav-profile m-auto" src="{{ asset('uploads/web/'.$settings->web_fav) }}" alt="">

                        @endif
                    </div>
                    <div class="form-group col-md-3">

                       Uploaded: <br>

                       <img id="fav"  class="" width="80" height="80" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Web Name</label>
                        <input name="web_name" type="text" placeholder="Synex Digital  " class="form-control" value="{{ $settings->web_name }}" required >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Domain</label>
                        <input  name="domain" type="text" placeholder="example.com" class="form-control" value="{{ $settings->domain }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label> Email</label>
                        <input name="email" type="email" placeholder="example@domain.com" class="form-control" value="{{ $settings->email }}" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Address</label>
                       <textarea  name="address" id="" class="form-control"  cols="30" rows="2">{{ $settings->address }}</textarea>
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
