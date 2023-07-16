@extends('layout.main')

@section('container')
    <h2 style="padding-top:120px"><span style="color:rgb(237, 237, 0);font-weight:bold; font-size:50px">|</span> {{ __('lang.updaterole') }} - {{$user->firstname}} <span>{{$user->lastname}} </h2>
    <div class="text-center" style="padding-top:150px">
        <h3></span></h3>
        <form action="/updaterole/{{$user->id}}" method="post">
            @csrf
            <div class="form-floating mb-5" style="margin-left:550px">
                <select class="form-select" id="role_id" name="role_id" style="width:200px;" required focus>
                    <option value="1"  selected>Admin</option>
                    <option value="2"  selected>Member</option>
                    <option value="Select Role" disabled selected>{{__('lang.selectrole')}}</option>
                </select>
                @error('role')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

            <button class="btn btn-lg btn-warning" type="submit" style="size:200px">
                {{__('lang.savechanges')}}</button>

          </form>
          <div style="height:320px"></div>
    </div>
@endsection
