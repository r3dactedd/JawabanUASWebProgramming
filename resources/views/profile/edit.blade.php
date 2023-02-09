@extends('layout.main')

@section('container')

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h2 style="padding-top:120px"><span style="color:rgb(237, 237, 0);font-weight:bold; font-size:50px">|</span> {{ __('lang.editprofile') }}</h2>

    <div class="container mx-auto px-5">
        <div class="row px-5">
            <div class="col">
                <form action="/profile" method="POST" class="mb-3" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="col-4">
                        @if ($user->profile_img)
                        <div class="d-flex">
                            <img src="{{ asset('/storage/images/' .$user->profile_img) }}" alt="{{ $user->firstname }}" width="150px" height="150px" class="rounded-circle">
                            <h3 style="padding-top: 50px; margin-left:50px">{{$user->firstname}} {{$user->lastname}}</h3>
                        </div>


                            @else
                            <i class="bi bi-person-circle" style="font-size: 4rem; color: cornflowerblue;"></i>
                        @endif


                    </div>
                    <div class="row g-3 mb-3" style="padding-top: 50px">
                        <div class="col-2">
                            <label for="firstname" class="col-form-label">{{ __('lang.firstname') }}</label>
                        </div>
                        <div class="col-8">
                        <input type="input" id="firstname" class="form-control @error('firstname') is-invalid @enderror" style="border-radius:10px;" id="firstname" name="firstname"
                        autofocus value="{{ old('firstname',$user->firstname) }}" autocomplete="off" required>
                        </div>
                        <div class="col-auto">
                            @error('firstname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-2">
                            <label for="username" class="col-form-label">{{ __('lang.lastname') }}</label>
                        </div>
                        <div class="col-8">
                        <input type="input" id="lastname" class="form-control @error('lastname') is-invalid @enderror" style="border-radius:10px;" id="lastname" name="lastname"
                        autofocus value="{{ old('lastname',$user->lastname) }}" autocomplete="off" required>
                        </div>
                        <div class="col-auto">
                            @error('lastname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-2">
                        <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-8">
                        <input type="input" id="email" class="form-control @error('email') is-invalid @enderror" style="border-radius:10px;" id="email" name="email"
                        autofocus value="{{ old('email',$user->email) }}" autocomplete="off" required>
                        </div>
                        <div class="col-auto">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex g-3 mb-3">
                    <p>{{ __('lang.gender') }}</p>
                    <div class="form-check form-check-inline" style="margin-left:135px">
                        <input class="form-check-input" type="radio" name="gender_id" id="gender_id" {{ $user->gender_id === 1 ? "checked" : "" }} value="1">
                        <label class="form-check-label" for="gender" style="color:black">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender_id" id="gender_id" {{ $user->gender_id === 2 ? "checked" : "" }} value="2">
                        <label class="form-check-label" for="gender" style="color:black">Female</label>
                      </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-2">
                            <label for="role" class="col-form-label">{{ __('lang.role') }}</label>
                        </div>
                        <div class="col-8">
                            <p>{{$user->role_id === 2 ? "User" : "Admin"}}</p>
                            </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-2">
                        <label for="password" class="col-form-label">{{ __('lang.password') }}</label>
                        </div>
                        <div class="col-8">
                        <input type="input" class="form-control @error('password') is-invalid @enderror" style="border-radius:10px;" id="password" name="password"
                        autofocus value="{{ old('password',$user->password) }}" autocomplete="off" required>
                        </div>
                        <div class="col-auto">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-2">
                            <label for="profile_img" class="col-form-label">{{ __('lang.profileimg') }}</label>
                        </div>
                        <div class="col-8">
                            <input id="profile_img" class="form-control @error('profile_img') is-invalid @enderror" style="border-radius:10px;" type="file" name="profile_img" onchange="previewImage()">
                            <img class="img-preview img-fluid mb-3 col-sm-5 rounded mt-3">
                        </div>

                        <div class="col-auto">
                            @error('profile_img')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-warning" style="margin-top: 50px">{{ __('lang.savechanges') }}</button>

                </form>

            </div>
        </div>
    </div>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        function previewImage(){
            const image = document.querySelector('#profile_img');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection
