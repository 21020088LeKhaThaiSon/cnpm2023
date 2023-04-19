@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/profile/{{ $user->id }}">
                        @method('PATCH')
                        @csrf


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Họ Tên') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="text" class="form-control @error('email') is-invalid @enderror" name="fullname"  required autocomplete="email"
                                value = "{{$user->profile->fullname}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Ngày sinh') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="text" class="form-control @error('email') is-invalid @enderror" name="birth"  required autocomplete="email"
                                value = "{{$user->profile->birth}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Đại học') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="text" class="form-control @error('email') is-invalid @enderror" name="univer"  required autocomplete="email"
                                value = "{{$user->profile->univer}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Giới tính') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="text" class="form-control @error('email') is-invalid @enderror" name="gioi_tinh"  required autocomplete="email"
                                value = "{{$user->profile->gioi_tinh}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Giới thiệu') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="text" class="form-control @error('email') is-invalid @enderror" name="description"  required autocomplete="email"
                                value = "{{$user->profile->description}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Thêm') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="text" class="form-control @error('email') is-invalid @enderror" name="bonus"  required autocomplete="email"
                                value = "{{$user->profile->bonus}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection