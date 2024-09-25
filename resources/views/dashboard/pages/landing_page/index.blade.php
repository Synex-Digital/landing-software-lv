
@extends('dashboard.layouts.app')
@section('title')Landing Page @endsection

@section('content')
<div class="page-titles">
    <h4>Landing Page</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Landing Page</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <button type="button" class="btn btn-rounded btn-info"><span
            class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
        </span>Add</button>
    </div>

</div>




@endsection
