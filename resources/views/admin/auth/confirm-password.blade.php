@extends('admin.layouts.auth')

@section('meta')
@endsection

@section('title', config('app.name', 'Laravel') . ' | Şifreyi Onayla')

@section('cascadingStyleSheets')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Şifreyi Onayla</h3></div>
                    <div class="card-body">
                        <h6>Lütfen devam etmeden önce şifrenizi onaylayın.</h6>
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1" for="password">Şifre</label>
                                <input class="form-control py-4 @error('password') is-invalid @enderror" id="password" type="password" placeholder="Şifrenizi Giriniz" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">Şifremi Unuttum</a>
                                @endif
                                <button class="btn btn-primary" type="submit">Şifreyi Onayla</button>
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
