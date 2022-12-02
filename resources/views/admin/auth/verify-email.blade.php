@extends('admin.layouts.auth')

@section('meta')
@endsection

@section('title', config('app.name', 'Laravel') . ' | Eposta Doğrulama')

@section('cascadingStyleSheets')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Eposta Doğrulama</h3></div>
                    <div class="card-body">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                E-posta adresinize yeni bir doğrulama bağlantısı gönderildi.
                            </div>
                        @endif
                        Devam etmeden önce lütfen bir doğrulama bağlantısı için e-postanızı kontrol edin. E-postayı almadıysanız başka bir e-posta istemek için
                        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">buraya tıklayın.</button>
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
