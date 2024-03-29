@extends('layouts.admin')
@section('title')
@lang('site.edit')
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary" href="{{ route('admin.courses.index') }}">@lang('site.courses')</a></li>

<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted">@lang('site.edit')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.courses.update', ['course'=> $course->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                        type="button" role="tab" aria-controls="tab1"
                        aria-selected="true">@lang('site.main')</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                        role="tab" aria-controls="tab2" aria-selected="false">@lang('site.extra data')</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button"
                        role="tab" aria-controls="tab3" aria-selected="false">@lang('site.meta')</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button"
                        role="tab" aria-controls="tab4" aria-selected="false">@lang('site.cost')</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button"
                        role="tab" aria-controls="tab5" aria-selected="false">@lang('site.registration')</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button"
                        role="tab" aria-controls="tab6" aria-selected="false">@lang('site.policy')</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button"
                        role="tab" aria-controls="tab7" aria-selected="false">@lang('site.files')</button>
                </li>

            </ul>

            <div class="tab-content pt-5" id="myTabContent">
                {{--  start tab 1  --}}
                @include('admin.courses.partial.tab1', ['course'=> $course, 'id'=> 'tab1', 'next'=> '#tab2-tab'])
                {{--  end tab 1  --}}

                {{--  start tab 2  --}}
                @include('admin.courses.partial.tab2', ['course'=> $course, 'id'=> 'tab2', 'prev'=>'#tab1-tab', 'next'=> '#tab3-tab'])
                {{--  end tab 2  --}}

                {{--  start tab 3  --}}
                @include('admin.courses.partial.tab3', ['course'=> $course, 'id'=> 'tab3', 'prev'=>'#tab2-tab', 'next'=> '#tab4-tab'])
                {{--  end tab 3  --}}

                {{--  start tab 4  --}}
                @include('admin.courses.partial.tab4', ['course'=> $course, 'id'=> 'tab4', 'prev'=>'#tab3-tab', 'next'=> '#tab5-tab'])
                {{--  end tab 4  --}}

                {{--  start tab 5  --}}
                @include('admin.courses.partial.tab5', ['course'=> $course, 'id'=> 'tab5', 'prev'=>'#tab4-tab', 'next'=> '#tab6-tab'])
                {{--  end tab 5  --}}

                {{--  start tab 6  --}}
                @include('admin.courses.partial.tab6', ['course'=> $course, 'id'=> 'tab6', 'prev'=>'#tab5-tab', 'next'=> '#tab7-tab'])
                {{--  end tab 6  --}}

                {{--  start tab 7  --}}
                @include('admin.courses.partial.tab7', ['course'=> $course, 'id'=> 'tab7', 'prev'=>'#tab6-tab', 'submit'=> true])
                {{--  end tab 7  --}}

            </div>


        </form>
    </div>
</div>
@endsection

@push('js')
    <script>

        let val = $('#show_single_price').val();
        if(val == '1' || val == '0'){
            changeDisplayPrice('#show_single_price','#show-single-price', '#role-single')
        }

        let show = $('#show_group_price').val();
        if(show == '1' || show == '0'){
            changeDisplayPrice('#show_group_price','#show-group-price', '#role-group')
        }

        function changeDisplayPrice(triger, price, role){
            let val = $(triger).val();
            if(val == "1"){
                $(price).removeClass('d-none');
                $(role).addClass('d-none');
            }else if(val == "0"){
                $(role).removeClass('d-none');
                $(price).addClass('d-none');
            }else{
                $(role).addClass('d-none');
                $(price).addClass('d-none');
            }
        }

        function goTo(id){
            $(id).trigger('click');
        }
    </script>
@endpush