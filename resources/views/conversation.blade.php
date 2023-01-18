@extends('layouts.app')

@section('title', 'conversation')

@section('app')
    @parent
@endsection

@php
$dir = app()->isLocale('en') ? 'left' : 'right';
@endphp

@section('content')

    <!-- Page Title START -->
    <div class="page-title-section" style="background-image: url({{ asset('web/img/sub-pages-background.png') }});">
        <div class="container">
            <h1>@lang('conversation')</h1>
            <ul class="fa">
                <li><a href="{{ route('index') }}">@lang('Home')</a></li>
                <li><a href="#">@lang('conversation')</a></li>
            </ul>
        </div>
    </div>
    <!-- Page Title END -->

    <!-- Contact Boxes START -->
    <div class="section-block-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        @if (isset($item))
                            <div class="card-body">
                                <div class="">
                                    <h4 class="text-muted">{{ $item->title }}</h4>
                                    <p class="text-muted">{{ $item->message }}</p>
                                </div>
                                <hr>
                                <div class="chat-content" style="height: 70vh; overflow-y: auto;">
                                    @foreach ($messages as $message)
                                        <div class="box @if($message['type'] == 'admin') admin @endif">
                                            <p>{!! $message['message'] !!}</p>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="chat-input">
                                    @if ($item->is_closed)
                                        <div class="alert alert-info">
                                            @lang('This conversation has been closed')
                                        </div>
                                    @else
                                        <form action="{{ route('conversation', ['ticket'=> $item->ticket]) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="ccui" value="{{ $item->id }}">
                                            <div class="form-group">
                                                <textarea name="message" id="message" class="form-control" rows="2" placeholder="@lang('message')"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success w-100">@lang('send')</button>
                                            </div>
                                        </form>
                                    @endif
                                    
                                </div>
                            </div>
                        @else
                            <div class="card-body">
                                <form action="{{ route('chat') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="ticket" placeholder="@lang('ticket')" style="letter-spacing: 6px" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary w-100">@lang('send')</button>
                                    </div>
                                </form>
                            </div>
                        @endif
                        
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Contact Boxes END -->

@endsection

@section('footer')
    @parent
@endsection


@push('css')
    <style>
        .box{
            margin: 15px;
            background: #352e6c;
            padding: 10px;
            border-radius: 8px;
        }
        .box p{
            color: white;
        }
        .box.admin{
            background: #eee;
            margin-right: 50px;
        }
        .box.admin p{
            color: #333;
        }
    </style>
@endpush