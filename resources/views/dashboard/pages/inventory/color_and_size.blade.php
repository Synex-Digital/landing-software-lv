
@extends('dashboard.layouts.app')
@section('title')Color & Size @endsection
@section('style')

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

                                <td >
                                    <a data-value="{{ $data}}"   class="btn editBtn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('landing-page.destroy', $data->id) }}"  data-bs-target="#deleteModal" data-bs-toggle="modal"  class="btn btn-danger btn-sm deleteBtn">Delete</a>
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
{{-- create modal --}}
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
                    <label for="" class="form-label">Color Code <span class="text-danger ">*</span> </label>
                    <input type="color" class="form-control" name="color_code"  required>
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










@endsection
@section('script')
<script>
    $(document).ready(function() {


        //submit button disable
        $('#submitBtn').on('click', function() {
                $(this).addClass('disabled').text('Adding...');
        });
        //update button disable
        // $('#updateBtn').on('click', function() {
        //         $(this).addClass('disabled').text('Updating...');
        // });
        //edit data show with modal
        // $('.editBtn').on('click', function() {
        //     let data = $(this).data('value');
        //     $('#name').val(data.name);
        //     $('#short_description').val(data.short_description);
        //     $('#description').val(data.description);
        //     $('#sku').val(data.sku);
        //     $('#price').val(data.price);
        //     $('#s_price').val(data.s_price);
        //     $('#sp_type option').each(function() {
        //         if($(this).val() == data.sp_type){
        //             $(this).attr('selected', 'selected');
        //         }
        //     })
        //     $('#video_link').val(data.video_link);
        //     $('#inventory option').each(function(){
        //         if($(this).val() == data.inventory_feature){
        //             $(this).attr('selected', 'selected');
        //         };
        //     });
        //     $('#shipping_fee option').each(function (){
        //         if($(this).val() == data.shipping_fee){
        //             $(this).attr('selected', 'selected');
        //         };
        //     });
        //     $('#tags').val(data.tags);
        //     let route = `{{ route('landing-page.update', ':id') }}`;
        //     $('#editForm').attr('action',route.replace(':id',data.id));
        //     $('.editModal').modal('show');
        // });
        //delete data
        // $('.deleteBtn').on('click', function() {
        //     let data = $(this).attr('href');
        //     $('#deleteForm').attr('action',data);
        // });
    });
</script>
@endsection
