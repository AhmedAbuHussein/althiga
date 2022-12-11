@extends('layouts.admin')
@section('title')
    @lang('site.see all')
@endsection
@section('breadcrumb')

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.notifications')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            {!! $dataTable->table(['class'=> 'table table-row-dashed table-row-gray-300 text-center table-striped']) !!}
           
        </div>
    </div>
@endsection

@push('js')
{!! $dataTable->scripts() !!}

<script>
    function markAsRead(url){
        Swal.fire({
            title: "@lang('site.mark as read')",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: "@lang('site.yes')",
            cancelButtonText: "@lang('site.no')",
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url : url,
                    type : "POST",
                    data : { '_token' : "{{ csrf_token() }}"},
                    success : function(data) {
                        window.LaravelDataTables["items-table"].ajax.reload();
                    },
                    error : function (error) {
                        console.log(error)
                        Swal.fire({
                            title: 'Oops...',
                            text: error.responseJSON.message,
                            icon: 'error',
                        })
                    }
                });
            }
          })
    }
    
</script>
@endpush
@push('css')
    <style>
        .btn i{
            padding: 0 !important
        }
        td{
            line-height: 60px;
        }
    </style>
@endpush