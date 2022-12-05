@extends('admin.layouts.app')

@section('meta')
@endsection

@section('title','İki Faktörlü Kimlik Doğrulama')

@section('cascadingStyleSheets')
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">İki Faktörlü Kimlik Doğrulama</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.anasayfa') }}">Anasayfa</a></li>
            <li class="breadcrumb-item active">İki Faktörlü Kimlik Doğrulama</li>
        </ol>
        @if (session('status')=='two-factor-authentication-disabled')
            <div class="alert alert-success" role="alert">
                İki faktörlü kimlik doğrulama devre dışı bırakıldı.
            </div>
        @endif

        @if (session('status')=='two-factor-authentication-enabled')
            <div class="alert alert-success" role="alert">
                İki faktörlü kimlik doğrulama etkinleştirildi.
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-body">
                @if(auth()->user()->two_factor_secret)
                    <form action="{{ route('two-factor.disable') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Pasif</button>
                    </form>
                @else
                    <form action="{{ route('two-factor.enable') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">Aktif</button>
                    </form>
                @endif

            </div>
        </div>
    </div>
@endsection

@section('javaScript')
@endsection
