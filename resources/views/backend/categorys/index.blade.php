@extends('backend.layouts.master')

@section('title')
Categorys
@endsection

@section('content-header')
Categorys
@endsection

@section('content-header-menu')
Categorys
@endsection

@section('content')
<div class=row>
    <div class="col-12">
        <div class="card">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
                @endforeach
            </div>
            <div class="card-header">
                <a href="{{ route('categorys.create') }}" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="categorys">
                    <thead>
                        <tr>
                            <td>Name</th>
                            <td>Create At</th>
                            <td>Update At</th>
                            <td style="width:100px;">Action</th>
                        </tr>
                    </thead>       
                </table>
            </div>

        </div>
    </div>
</div>
{{-- 
<div class="modal fade" id="mdlCategory" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmCategory" action="{{ route('categorys.store') }}" method="POST">
                <input type="hidden" id="action" >
                {{csrf_field()}}
                <div class="modal-header">
                    <h4 class="modal-title" id="CU_Category"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>                
                </div>
                <div class="modal-body">               
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        @include('backend.layouts.partials.error-message')
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>                              
                                <input type="text" name="l_ten" id="l_ten" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Status:</strong>
                                <select name="l_trangThai" class="form-control">    
                                    <option value="1">Khóa</option>
                                    <option value="2">Khả dụng</option>
                                </select>
                            </div>
                        </div>                                          
                    </div>               
                </div>
                <div class="modal-footer">
                    <button type="submit" id="saveCategory" name="btnsave" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>   
            </form> 
        </div>
    </div>
</div>
--}}
@endsection
@section('custom-scripts')
<script type="text/javascript">
    $(function () {
        $('body').on('click', '#delete-category', function () {
            var l_ma = $(this).data('id');     
            var token = $("meta[name='csrf-token']").attr("content");
            if(confirm("Are you sure you want to Delete this data?")){
                $.ajax({
                    type: "DELETE",
                    url: '{{ route("categorys.index") }}' + '/' + l_ma,
                    data: {
                    "id": l_ma,
                    "_token": token,
                    },
                    success: function (data) {
                        table.ajax.reload();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }   
                });
            }
            else {
                return false;
            }
            
        });
        var table = $('#categorys').DataTable({
            responsive: true,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: "{{ route('categorys.index') }}",
            columns: [
                {data: 'l_ten', name: 'Tên', orderable: true, searchable: true},
                {data: 'l_taoMoi', name: 'Created At'},
                {data: 'l_capNhat', name: 'Updated At'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: false, 
                    searchable: false
                },
            ]
        });  
    });
</script>
@endsection