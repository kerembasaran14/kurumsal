@extends('admin.layouts.auth')

@section('meta')
@endsection

@section('title', config('app.name', 'Laravel') . ' | İki Faktörlü Meydan Okuma')

@section('cascadingStyleSheets')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">İki Faktörlü Meydan Okuma</h3></div>
                    <div class="card-body">
                        Oturum açmak için lütfen kimlik doğrulama kodunuzu girin.
                        <form method="POST" action="{{ route('two-factor.login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1" for="code">Şifre</label>
                                <input class="form-control py-4 @error('code') is-invalid @enderror" id="code" type="password" placeholder="Şifrenizi Giriniz" name="code" required>
                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary" type="submit">Gönder</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                    </div>
                </div>
                <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">İki Faktörlü Kurtarma Kodu</h3></div>
                    <div class="card-body">
                        Lütfen oturum açmak için kimlik doğrulama kodunuzu girin.
                        <form method="POST" action="{{ route('two-factor.login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1" for="recovery_code">Kurtarma Kodu</label>
                                <input class="form-control py-4 @error('recovery_code') is-invalid @enderror" id="recovery_code" type="password" placeholder="İki Faktörlü Kurtarma Kodunuzu Giriniz" name="recovery_code" required>
                                @error('recovery_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary" type="submit">Gönder</button>
                            </div>
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
