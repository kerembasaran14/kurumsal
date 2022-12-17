@extends('admin.layouts.auth')

@section('meta')
@endsection

@section('title', config('app.name', 'Laravel') . ' | ' . __('all.epostaDogrulama'))

@section('cascadingStyleSheets')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('all.epostaDogrulama') }}</h3></div>
                    <div class="card-body">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                {{ __('all.epostaAdresinizeYeniBirDogrulamaBaglantisiGonderildi') }}
                            </div>
                        @endif
                        <p>{{ __('all.devamEtmedenOnceLutfenBirDogrulamaBaglantisiIcinEpostaniziKontrolEdin') }}</p>
                        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('all.epostayiAlmadiysanizBaskaBirEpostaAlmakIcin') }}</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javaScript')

@endsection
