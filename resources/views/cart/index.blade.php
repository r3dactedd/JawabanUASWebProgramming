@extends('layout.main')

@section('container')
<h2 style="padding-top:120px"><span style="color:rgb(237, 237, 0);font-weight:bold; font-size:50px">|</span>{{__('lang.yourcart')}}</h2>
@if (session()->has('success'))
<div class="col-lg-8 alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive">

    <table class="table table-borderless table-sm" style="margin-top: 50px">
        <tbody style="margin-top: 50px">
            @if ($cart->count())
            @foreach ($cart as $list)
                <tr>
                    <td>
                        <div style="max-height: 350px !important; max-width:200px !important; overflow:hidden; padding-top:50px">
                            <img src="{{ asset($list->item->image) }}" alt="{{ $list->name }}" class="img-fluid" style="">
                        </div>
                    </td>
                    <td>
                        <h5 style="padding-top:50px">{{ $list->item->name }}</h5>
                        <h5 style="padding-top:50px">{{ $list->price }}</h5>

                        <form action="/DeleteCart/{{$list->id}}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger py-0">
                                    Delete item
                            </button>
                        </form>

                    </td>
                </tr>

                @endforeach

                @else
                <tr class="text-center fs-4">
                    <td colspan="4">
                        {{__('lang.noitem')}}
                    </td>
                </tr>
                @endif

            </tbody>


        </table>
        <h3>{{__('lang.totalprice')}}: Rp {{ $cart->sum('price') }}</h3>
        <form action="/Checkout" method="POST">
            @csrf
            <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Checkout</button>
        </form>
</div>

<div style="height: 500px"></div>
@endsection
