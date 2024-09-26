
@extends('dashboard.layouts.app')
@section('title')Color & Size @endsection
@section('style')
<link href="{{ asset('dashboard_assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="page-titles">
    <h4>Color & Size</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('inventory.index')}}">Inventory</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Color & Size</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <button type="button" class="btn btn-rounded btn-info"  data-bs-toggle="modal" data-bs-target=".createColorModal">
            <span class="btn-icon-left text-info">
                <i class="fa fa-plus color-info"></i>
            </span>Add Color
        </button>
    </div>
    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Colors</h4>
            </div>
            <div class="card-body">
                <div class="table-responsvie">
                    <table class="table table-hover table-responsive-sm" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($colors as $key => $data)
                            <tr>
                                <th class="text-black">{{ $loop->iteration  }}</th>
                                <td>{{ $data->name ?? 'NULL' }}</td>

                                <td> <div style="background-color:{{ $data->code }};">{{ $data->code }}</div> </td>

                                <td>
                                    <div class="">
                                        <a data-value="{{ $data}}"  class="btn editBtn btn-primary btn-sm me-2">Edit</a>
                                        <a data-value="{{ $data}}"  href="{{ route('color.destroy') }}"  data-bs-target="#deleteModal2" data-bs-toggle="modal"  class="btn btn-danger btn-sm deleteBtn">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">No Data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $colors->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
{{-- create color modal --}}
<div class="modal fade createColorModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Color</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('color.store') }}" method="POST">
                @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Name </label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="mb-3">
                    <p class="form-label">Color Code <span class="text-danger ">*</span> </p>
                    <input type="text" class="as_colorpicker form-control" name="color_code"  required>
                </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button id="submitBtn" type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- edit color modal --}}
<div class="modal fade editColorModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Color</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form  action="{{ route('color.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" id="id">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Name </label>
                    <input id="name" type="text" class="form-control" name="name" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Color Code <span class="text-danger ">*</span> </label>
                    <input id="color_code" type="text" class="as_colorpicker form-control" name="color_code"   required>
                </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button id="updateBtn" type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- size --}}
<div class="row">
    <div class="col-lg-12">
        <button type="button" class="btn btn-rounded btn-info"  data-bs-toggle="modal" data-bs-target=".createSizeModal">
            <span class="btn-icon-left text-info">
                <i class="fa fa-plus color-info"></i>
            </span>Add Size
        </button>
    </div>
    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sizes</h4>
            </div>
            <div class="card-body">
                <div class="table-responsvie">
                    <table class="table table-hover table-responsive-sm" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($sizes as $data)
                            <tr>
                                <th class="text-black">{{ $loop->iteration  }}</th>
                                <td>{{ $data->name }}</td>
                                <td>
                                    <div class="">
                                        <a data-value="{{ $data}}"  class="btn editBtn2 btn-primary btn-sm me-2">Edit</a>
                                        <a data-value="{{ $data}}"  href="{{ route('size.destroy') }}"  data-bs-target="#deleteModal2" data-bs-toggle="modal"  class="btn btn-danger btn-sm deleteBtn2">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">No Data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $sizes->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
{{-- create size modal --}}
<div class="modal fade createSizeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Size</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('size.store') }}" method="POST">
                @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Name </label>
                    <input type="text" class="form-control" name="name" >
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button id="submitBtn2" type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- edit size modal --}}
<div class="modal fade editSizeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Color</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form  action="{{ route('size.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" id="size_id">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Name </label>
                    <input id="size_name" type="text" class="form-control" name="name" >
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button id="updateBtn2" type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>










@endsection
@section('script')
<script src="{{ asset('dashboard_assets/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>

<script>
    $(document).ready(function() {


        //submit button disable
        $('#submitBtn','#submitBtn2').on('click', function() {
            $(this).addClass('disabled').text('Adding...');
        });
        //update button disable
        $('#updateBtn','#updateBtn2').on('click', function() {
            $(this).addClass('disabled').text('Updating...');
        });
        //edit color data show with modal
        $('.editBtn').on('click', function() {
            let data = $(this).data('value');
            $('#name').val(data.name);
            $('#color_code').val(data.code);
            $('#id').val(data.id);
            $('.editColorModal').modal('show');
        });
        //edit size data show with modal
        $('.editBtn2').on('click', function() {
            let data = $(this).data('value');
            $('#size_name').val(data.name);
            $('#size_id').val(data.id);
            $('.editSizeModal').modal('show');
        });
        //delete data
        $('.deleteBtn',).on('click', function() {
            let route = $(this).attr('href');
            let data = $(this).data('value');
            $('#delete_id').val(data.id);
            $('#deleteForm2').attr('action',route);
        });
        $('.deleteBtn2',).on('click', function() {
            let route = $(this).attr('href');
            let data = $(this).data('value');
            $('#delete_id').val(data.id);
            $('#deleteForm2').attr('action',route);
        });
    });
</script>
@endsection
