@extends('layouts.admin')
@section('title')
@lang('site.contacts')
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
<li class="breadcrumb-item text-muted">@lang('site.contacts')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('admin.about.edit', [$about->id]) }}" class="btn btn-primary">@lang('site.edit')</a>
            <a href="{{ route('admin.targets.index', ['type'=>'about', 'id'=>$about->id]) }}" class="btn btn-success">@lang('site.targets')</a>
            <a href="#" class="btn btn-info">@lang('site.component')</a>
          </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div>
                    <h4 class="about-title">{{ $about->title ?? '--------' }}</h4>
                    <div class="about-content">
                        <p>{{ $about->description ?? '-------------' }}</p>
                        <p>{{ $about->details ?? '-------------' }}</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    @foreach (_splite($about->targets, 2, 0) as $item)
                                        <li>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    @foreach (_splite($about->targets, 2, 1) as $item)
                                        <li>{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image">
                    <img src="{{ $about->url }}" style="width: 100%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
@push('css')
<style>
    .card .card-header{
        min-height: auto;
    }

</style>
@endpush
