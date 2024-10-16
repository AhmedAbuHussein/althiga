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
            @if (auth()->user()->can("about_edit"))
            <a href="{{ route('admin.about.edit', [$about->id]) }}" class="btn btn-primary">@lang('site.edit')</a>
            @endif
            @if (auth()->user()->can("targets_show"))
            <a href="{{ route('admin.targets.index', ['type'=>'about', 'id'=>$about->id]) }}" class="btn btn-success">@lang('site.targets')</a>
            @endif
            @if (auth()->user()->can("about_components"))
            <a href="{{ route('admin.extra.index') }}" class="btn btn-info">@lang('site.component')</a>
            @endif
          </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-8">
                <div>
                    <h4 class="about-title mb-3">{{ $about->title ?? '--------' }}</h4>
                    <div class="about-content">
                        <p>{{ $about->description ?? '-------------' }}</p>
                        <p>{{ $about->details ?? '-------------' }}</p>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    @foreach (_splite_by_chuncks($about->targets, 2, 0) as $item)
                                        <li class="py-2">{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    @foreach (_splite_by_chuncks($about->targets, 2, 1) as $item)
                                        <li class="py-2">{{ $item->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image">
                    <img loading="lazy" src="{{ $about->url }}" style="width: 100%" alt="">
                </div>
            </div>
        </div>
        {{--  components  --}}
        <div class="row">
            @foreach ($items as $item)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img loading="lazy" src="{{ $item->url }}" alt="item">
                            </div>
                            <h3>{{ $item->title }}</h3>
                            <p class="mt-2">{{ $item->text }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
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
