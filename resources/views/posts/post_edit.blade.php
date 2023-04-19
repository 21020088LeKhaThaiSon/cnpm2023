@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/post/{{$post->id}}">
                        @method('PATCH')
                        @csrf


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Địa Chỉ') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="email" class="form-control @error('email') is-invalid @enderror" name="dia_chi"  required autocomplete="email"
                                 value = "{{$post->dia_chi}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Diện Tích') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="email" class="form-control @error('email') is-invalid @enderror" name="dien_tich"  required autocomplete="email"
                                value = "{{$post->dien_tich}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Gia Phòng') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="email" class="form-control @error('email') is-invalid @enderror" name="gia_phong"  required autocomplete="email"
                                value = "{{$post->gia_phong}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <input id="dia_chi" type="email" class="form-control @error('email') is-invalid @enderror" name="description"  required autocomplete="email"
                                 value = "{{$post->description}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" id="image"  class="form-control @error('email') is-invalid @enderror" name="image" required autocomplete="email">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
