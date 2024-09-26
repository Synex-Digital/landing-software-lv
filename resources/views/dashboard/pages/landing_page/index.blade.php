
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
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Landing Pages</h4>
            </div>
            <div class="card-body">
                <div class="table-responsvie">
                    <table class="table table-hover table-responsive-sm" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Theme</th>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>Price</th>
                                <th>Inventory Feature</th>
                                <th>Status </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($landing_pages as $key => $data)
                            <tr>
                                <th class="text-black">{{ $loop->iteration  }}</th>
                                <td>{{ $data->theme_slug }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->sku }}</td>
                                <td>{{ $data->price }}</td>
                                <td>{{ $data->inventory_feature == 1? 'show' : 'hide' }}</td>
                                <td>{{ $data->status }} </td>
                                <td>
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
                {{ $landing_pages->links('pagination::bootstrap-5') }}
            </div>
        </div>
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
            <form action="{{ route('landing-page.store') }}" method="POST">
                @csrf
            <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Select Theme <span class="text-danger ">*</span> </label>
                            <select name="theme" class="form-control default-select" id="sel1">
                                <option value="default">Default</option>

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
                            <select name="sp_type" class="form-control default-select" id="sel1">
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
                            <select name="shipping_fee" class="form-control default-select" id="sel1">
                                <option value="1" >Yes</option>
                                <option value="0" >No Charge</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Tags  <span class="text-danger ">*</span> </label>
                        <input name="tags" type="text" class="form-control" placeholder="Tags">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button id="submitBtn" type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- edit modal --}}
<div class="modal fade editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Landing Page</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
            <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Select Theme <span class="text-danger ">*</span> </label>
                            <select name="theme" class="form-control default-select" id="sel1">
                                <option value="default">Default</option>

                            </select>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Name <span class="text-danger ">*</span> </label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Short Description <span class="text-danger ">*</span> </label>
                        <input id="short_description" name="short_description" type="text" class="form-control" placeholder="Write Short Description">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description <span class="text-danger ">*</span> </label>
                        <textarea  name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Stock Keeping Unit  </label>
                            <input id="sku" name="sku" type="text" class="form-control" placeholder="Sku">
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Price <span class="text-danger ">*</span> </label>
                            <input id="price" name="price" type="number" class="form-control" placeholder="1000">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Special Price   <span class="text-danger ">*</span> </label>
                            <input id="s_price" name="s_price" type="number" class="form-control" placeholder="1000">
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Special Price Type   <span class="text-danger ">*</span> </label>
                            <select  name="sp_type" class="form-control " id="sp_type">
                                <option value="fixed">Fixed</option>
                                <option value="percentage">Percentage</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Video Link </label>
                        <input id="video_link" name="video_link" type="text" class="form-control" placeholder="Video Link">
                    </div>
                    <div class="row">
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Inventory Feature  <span class="text-danger ">*</span> </label>
                            <select name="inventory" class="form-control " id="inventory">
                                <option value="1" >Show</option>
                                <option value="0" >Hide</option>
                            </select>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label for="" class="form-label">Shipping Fee  <span class="text-danger ">*</span> </label>
                            <select name="shipping_fee" class="form-control " id="shipping_fee">
                                <option value="1" >Yes</option>
                                <option value="0" >No Charge</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Tags  <span class="text-danger ">*</span> </label>
                        <input id="tags" name="tags" type="text" class="form-control" placeholder="Tags">
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



@endsection

@section('script')
<script src="{{ asset('dashboard_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script>
    $(document).ready(function() {
        //sidebar off
        $('.hamburger').click();
        //submit button disable
        $('#submitBtn').on('click', function() {
                $(this).addClass('disabled').text('Creating...');
        });
        //update button disable
        $('#updateBtn').on('click', function() {
                $(this).addClass('disabled').text('Updating...');
        });
        //edit data show with modal
        $('.editBtn').on('click', function() {
            let data = $(this).data('value');
            $('#name').val(data.name);
            $('#short_description').val(data.short_description);
            $('#description').val(data.description);
            $('#sku').val(data.sku);
            $('#price').val(data.price);
            $('#s_price').val(data.s_price);
            $('#sp_type option').each(function() {
                if($(this).val() == data.sp_type){
                    $(this).attr('selected', 'selected');
                }
            })
            $('#video_link').val(data.video_link);
            $('#inventory option').each(function(){
                if($(this).val() == data.inventory_feature){
                    $(this).attr('selected', 'selected');
                };
            });
            $('#shipping_fee option').each(function (){
                if($(this).val() == data.shipping_fee){
                    $(this).attr('selected', 'selected');
                };
            });
            $('#tags').val(data.tags);
            let route = `{{ route('landing-page.update', ':id') }}`;
            $('#editForm').attr('action',route.replace(':id',data.id));
            $('.editModal').modal('show');
        });
        //delete data
        $('.deleteBtn').on('click', function() {
            let data = $(this).attr('href');
            $('#deleteForm').attr('action',data);
        });
    });
</script>
@endsection
