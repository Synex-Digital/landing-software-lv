
@extends('dashboard.layouts.app')
@section('title')Landing Page @endsection
@section('style')
<link href="{{ asset('dashboard_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
@endsection
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
        <button type="button" class="btn btn-rounded btn-info"  data-bs-toggle="modal" data-bs-target=".createModal">

            <span class="btn-icon-left text-info">
                <i class="fa fa-plus color-info"></i>
            </span>Create
        </button>

    </div>

</div>






{{-- create modal --}}
<div class="modal fade createModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Landing Page</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Select Theme <span class="text-danger ">*</span> </label>
                            <select name="theme" class="form-control default-select" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Name <span class="text-danger ">*</span> </label>
                            <input name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Short Description <span class="text-danger ">*</span> </label>
                        <input name="short_description" type="text" class="form-control" placeholder="Write Short Description">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description <span class="text-danger ">*</span> </label>
                        <textarea name="description" id="" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Stock Keeping Unit  </label>
                            <input name="sku" type="text" class="form-control" placeholder="Sku">
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Price <span class="text-danger ">*</span> </label>
                            <input name="price" type="number" class="form-control" placeholder="1000">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Special Price   <span class="text-danger ">*</span> </label>
                            <input name="s_price" type="number" class="form-control" placeholder="1000">
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Special Price Type   <span class="text-danger ">*</span> </label>
                            <select name="s_type" class="form-control default-select" id="sel1">
                                <option>Fixed</option>
                                <option>Percentage</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Video Link </label>
                        <input name="video_link" type="text" class="form-control" placeholder="Video Link">
                    </div>
                    <div class="row">
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Inventory Feature  <span class="text-danger ">*</span> </label>
                            <select name="inventory" class="form-control default-select" id="sel1">
                                <option value="1" >Show</option>
                                <option value="0" >Hide</option>
                            </select>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Shipping Fee  <span class="text-danger ">*</span> </label>
                            <input name="shipping_fee" type="text" class="form-control" placeholder="Shipping Fee">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Tags  <span class="text-danger ">*</span> </label>
                        <input name="tags" type="text" class="form-control" placeholder="Tags">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



@endsection

@section('script')
<script src="{{ asset('dashboard_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@endsection
