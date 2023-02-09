@extends('layout.main')

@section('container')
<h2 style="padding-top:150px"><span style="color:rgb(237, 237, 0);font-weight:bold; font-size:50px">|</span> {{$item->name}}</h2>
<div class="row" style="padding-top:50px">

    <div class="col-sm-5">
        @if ($item->image)
        <div style="max-height: 500px !important; max-width:300px !important; overflow:hidden; padding-top:30px">
            <img src="{{ asset($item->image)}}" alt="{{ $item->name }}" class="img-fluid">
        </div>
        @else
            <img src="https://source.unsplash.com/400x350?movie" alt="{{ $item->name }}" class="img-fluid">
        @endif
    </div>
    <div class="col-lg">
        <h2>{{ __('lang.price') }}</h2>
        <p class="card-text" style="font-size:25px">Rp{{ $item->price }}</p>
        <h2 class="my-3">{{ __('lang.description') }}</h2>
        <p class="card-text" style="font-size:25px">{{$item->desc}}</p>

    </div>
    <form action="/AddToCart/{{$item->id}}" method="POST">
        @csrf
        <button class="w-50 btn btn-lg btn-warning" style="margin-left:560px; margin-top:120px" type="submit">{{ __('lang.addtocart') }}</button>
    </form>
     <div style="height: 500px"></div>
</div>

@endsection
