@extends('admin.layouts.auth')

@section('meta')
@endsection

@section('title', config('app.name', 'Laravel') . ' | Giriş Yap')

@section('cascadingStyleSheets')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Giriş Yap</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1" for="email">Eposta Adresi</label>
                                <input class="form-control py-4 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Eposta Adresinizi Giriniz" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="password">Şifre</label>
                                <input class="form-control py-4 @error('password') is-invalid @enderror" id="password" type="password" placeholder="Şifrenizi Giriniz" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">Beni Hatırla</label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">Şifremi Unuttum</a>
                                @endif
                                <button class="btn btn-primary" type="submit">Giriş Yap</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        @if (Route::has('register'))
                            <div class="small"><a href="{{ route('register') }}">Bir hesaba mı ihtiyacınız var? Üye Olun</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javaScript')

@endsection
