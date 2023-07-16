@extends('layout.main')

@section('container')

<h2 style="padding-top:120px"><span style="color:rgb(237, 237, 0);font-weight:bold; font-size:50px">|</span>{{ __('lang.checkout') }}</h2>
<div class="d-flex justify-content-center" style="padding-top:120px">
    <div class="text-center">
        <h2>{{ __('lang.thankyou') }}</h2>
        <p>{{ __('lang.contact') }}</p>
    </div>
</div>

<a href="/home" class="btn btn-danger" style="margin-left: 0px; background-color:rgb(227, 215, 1); border-color:transparent;  border-radius:20px; margin-left:580px; margin-right:auto">{{ __('lang.backtohome') }}</a>
<div style="height:300px"></div>
@endsection
