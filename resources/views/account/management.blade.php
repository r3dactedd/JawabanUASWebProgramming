@extends('layout.main')


@section('container')
<h2 style="padding-top:120px"><span style="color:rgb(237, 237, 0);font-weight:bold; font-size:50px">|</span> {{ __('lang.accountmanagement') }}</h2>
<div class="table-responsive">

    <table class="table table-borderless table-sm" style="margin-top: 50px">
        <tbody style="margin-top: 50px">
            @if ($user->count())
            @foreach ($user as $list)
                <tr>
                    <td>
                        <h5 style="padding-top:50px">{{ $list->firstname }} {{ $list->lastname }} - <span>{{$list->role_id === 2 ? "User" : "Admin"}}</span></h5>
                    </td>
                    <td>
                        <div style="margin-top:30px"></div>
                        <div class="d-flex">
                                <a class="btn btn-warning py-0" href="/updaterole/{{$list->id}}" style="width:150px; height:30px; border-radius:20px; margin-top:15px; margin-right:20px">
                                    {{ __('lang.updaterole') }}</a>
                            <form action="/deleteuser/{{$list->id}}" method="POST" class="d-inline">

                                @csrf
                                <button class="btn btn-danger py-0" style="width:150px; height:30px; border-radius:20px; margin-top:15px" onclick="return confirm('Are you sure ?')">
                                    {{ __('lang.deleteuser') }}</button>
                            </form>
                        </div>

                    </td>
                </tr>

                @endforeach
                @endif

            </tbody>


        </table>
        <div style="height:300px"></div>
</div>

@endsection
