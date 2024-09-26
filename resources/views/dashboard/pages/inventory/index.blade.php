@extends('dashboard.layouts.app')
@section('title')Inventory @endsection
@section('style')

@endsection
@section('content')
<div class="page-titles">
    <h4>Inventory</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Inventory</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <button type="button" class="btn btn-rounded btn-info"  data-bs-toggle="modal" data-bs-target=".createModal">

            <span class="btn-icon-left text-info">
                <i class="fa fa-plus color-info"></i>
            </span>Add
        </button>
        <a href="{{route('color_and_size.index')}}" class="btn btn-rounded btn-info ms-3"  >
            <span class="btn-icon-left text-info">
                <i class="fa fa-plus color-info"></i>
            </span>Colors & Sizes
        </a>

    </div>
</div>
@endsection
