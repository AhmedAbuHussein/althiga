@extends('layouts.admin')
@section('title')
    @lang('site.show')
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"
            href="{{ route('admin.contacts.index') }}">@lang('site.contacts')</a></li>

    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
    <li class="breadcrumb-item text-muted">@lang('site.show')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3 border">
                        <h4 class="py-4 px-2 border-bottom" style="background: #5f5f5f; color:#fff;">{{ $contact->title }}</h4>
                        <p class="p-3">{{ $contact->message }}</p>
                    </div>
                    <form onsubmit="return confirm('are you sure?')" action="{{ route('admin.contacts.close', ['contact'=> $contact->id]) }}" method="POST">
                        @csrf
                        <button class="btn btn-danger w-100">
                            @if ($contact->is_closed)
                                @lang('site.reopen conversation')
                            @else
                                @lang('site.mark as closed')
                            @endif  
                        </button>
                    </form>
                </div>
                <div class="col-md-8">
                    
                    <div class="chat-content">
                        @foreach ($messages as $message)
                            <div class="box @if($message['type'] == 'user') user @endif">
                                <p>{!! $message['message'] !!}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="chat-input">
                        @if ($contact->is_closed)
                            <div class="alert alert-info">
                                @lang('This conversation has been closed')
                            </div>
                        @else
                            <form action="{{ route('admin.contacts.chat', ['contact'=> $contact->id]) }}" method="POST">
                                @csrf
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
                
            </div>
        </div>
    </div>
@endsection


@push('css')
    <style>
        .chat-content{
            height: 60vh;
            overflow-y: auto;
            background: #f5f4f4;
            margin-bottom: 10px;
        }
        .box{
            margin: 15px;
            background: #352e6c;
            padding: 10px;
            border-radius: 8px;
        }
        .box p{
            color: white;
        }
        .box.user{
            background: #d6d6d6;
            margin-right: 50px;
        }
        .box.user p{
            color: #333;
        }
    </style>
@endpush