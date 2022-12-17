@extends('admin.layouts.app')

@section('meta')
@endsection

@section('title', __('all.sifreyiDuzenle'))

@section('cascadingStyleSheets')
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">{{ __('all.sifreyiDuzenle') }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.anasayfa') }}">{{ __('all.anasayfa') }}</a></li>
            <li class="breadcrumb-item active">{{ __('all.sifreyiDuzenle') }}</li>
        </ol>
        @if(session('status')=='password-updated')
            <div class="alert alert-success">
                {{ __('all.sifrenizBasariylaGuncellendi') }}
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('user-password.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="small mb-1" for="current_password">{{ __('all.mevcutSifre') }}</label>
                        <input class="form-control py-4 @error('current_password','updatePassword') is-invalid @enderror" id="current_password" type="password" placeholder="{{ __('all.mevcutSifreniziGiriniz') }}" name="current_password" required autofocus/>
                        @error('current_password','updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="password">{{ __('all.yeniSifre') }}</label>
                        <input class="form-control py-4 @error('password','updatePassword') is-invalid @enderror" id="password" type="password" placeholder="{{ __('all.yeniSifreniziGiriniz') }}" name="password" required autocomplete="new-password"/>
                        @error('password','updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="password-confirm">{{ __('all.yeniSifreTekrar') }}</label>
                        <input class="form-control py-4" id="password-confirm" type="password" placeholder="{{ __('all.yeniSifreniziTekrarGiriniz') }}" name="password_confirmation" required autocomplete="new-password"/>
                    </div>
                    <div class="form-group mt-4 mb-0">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('all.sifreyiGuncelle') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javaScript')
@endsection
