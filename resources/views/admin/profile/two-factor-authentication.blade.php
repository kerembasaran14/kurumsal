@extends('admin.layouts.app')

@section('meta')
@endsection

@section('title', __('all.ikiFaktorluKimlikDogrulama'))

@section('cascadingStyleSheets')
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">{{ __('all.ikiFaktorluKimlikDogrulama') }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.anasayfa') }}">{{ __('all.anasayfa') }}</a></li>
            <li class="breadcrumb-item active">{{ __('all.ikiFaktorluKimlikDogrulama') }}</li>
        </ol>
        @if (session('status')=='two-factor-authentication-disabled')
            <div class="alert alert-success" role="alert">
                {{ __('all.ikiFaktorluKimlikDogrulamaDevreDisiBirakildi') }}
            </div>
        @endif

        @if (session('status')=='two-factor-authentication-enabled')
            <div class="alert alert-success" role="alert">
                {{ __('all.ikiFaktorluKimlikDogrulamaEtkinlestirildi') }}
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-body">
                @if(auth()->user()->two_factor_secret)
                    <div class="mb-3">
                        {!! auth()->user()->twoFactorQrCodeSvg() !!}
                    </div>
                    <form action="{{ route('two-factor.disable') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{ __('all.pasif') }}</button>
                    </form>
                @else
                    <form action="{{ route('two-factor.enable') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">{{ __('all.aktif') }}</button>
                    </form>
                @endif
                <hr>
                <h3>{{ __('all.kurtarmaKodlari') }}</h3>
                <ul>
                    @foreach(json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                        <li>{{ $code }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('javaScript')
@endsection
