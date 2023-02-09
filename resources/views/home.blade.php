@extends('layout.main')

@section('container')
<div class="py-5">
    <div class="text-start" style="margin-top:50px">
        <a class="btn btn-outline-warning" href="/locale/en">en</a>
        <a class="btn btn-outline-warning" href="/locale/id">id</a>
    </div>
        <h2 style="padding-top:120px"><span style="color:rgb(237, 237, 0);font-weight:bold; font-size:50px">|</span> {{ __('lang.product') }} </h2>
        <div class="row">
          @foreach ($data as $data)
          <br>
            <div class="col-auto col-md-3 my-3" style="">
                <div class="card-deck"  style="max-height:700px !important; max-width: 500px !important; background-color: rgb(215, 215, 215); border-color:yellow; border-radius:20px; margin-top:120px">

                @if ($data->image)
                    <div style="overflow:hidden">
                        <img src="{{asset($data->image)}}" alt="{{ $data->name }}" class="card-img-top" style="width:100%; height: 300px; width:310px;">
                    </div>
                @else
                    <img src="https://source.unsplash.com/400x350?movie" alt="{{ $data->name }}" class="card-img-top">
                @endif

                <div class="card-body" style="background: transparent">
                    <h5 style="color:rgb(255, 255, 255); font-weight:bold">{{$data->name}}</h5>
                        <p class="text-start" style="color:rgb(255, 255, 255)">Rp{{ $data->price }}</p>
                        <a href="/item/{{$data->id}}" class="btn btn-danger" style="margin-left: 0px; background-color:rgb(255, 242, 0); border-color:transparent;  border-radius:15px">Detail</a>
                </div>
                </div>
            </div>

          @endforeach
        </div>
</div>
@endsection
