@extends('layouts.app')

@section('title', 'Comming Soon after Beta Version')

@section('app')
    @parent
@endsection


@section('content')

    <div class="count-back-box" style="background-image: url({{ asset('web/img/under-construction.jpg') }});">
        <div class="container">
            <div class="row">
                <!-- Cogs START -->
                <div class="construction-box">
                    <div class="construction-icons">
                        <i class="icon-settings" id="cons-icon-1"></i>
                        <i class="icon-settings" id="cons-icon-2"></i>
                    </div>
                </div>
                <!-- Cogs END -->
                <div class="wrapper">
                    <div class="count-back-box-text" dir="ltr">
                        <h3>We’re are working on Translating the website ...</h3>
                        <h6>We’ll be here soon!</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('footer')
    @parent
@endsection
