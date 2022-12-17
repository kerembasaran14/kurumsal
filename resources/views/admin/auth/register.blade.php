@extends('admin.layouts.auth')

@section('meta')
@endsection

@section('title', config('app.name', 'Laravel') . ' | ' . __('all.kayitOl'))

@section('cascadingStyleSheets')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('all.kayitOl') }}</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1" for="name">{{ __('all.adSoyad') }}</label>
                                <input class="form-control py-4 @error('name') is-invalid @enderror" id="name" type="text" placeholder="{{ __('all.adSoyadGiriniz') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="email">{{ __('all.epostaAdresi') }}</label>
                                <input class="form-control py-4 @error('email') is-invalid @enderror" id="email" type="email" placeholder="{{ __('all.epostaAdresiniziGiriniz') }}" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="password">{{ __('all.sifre') }}</label>
                                        <input class="form-control py-4 @error('password') is-invalid @enderror" id="password" type="password" placeholder="{{ __('all.sifreniziGiriniz') }}" name="password" required autocomplete="new-password"/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="password-confirm">{{ __('all.tekrarSifre') }}</label>
                                        <input class="form-control py-4" id="password-confirm" type="password" placeholder="{{ __('all.tekrarSifreniziGiriniz') }}" name="password_confirmation" required autocomplete="new-password"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4 mb-0">
                                <button type="submit" class="btn btn-primary btn-block">{{ __('all.kayitOl') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        @if (Route::has('login'))
                            <div class="small"><a href="{{ route('login') }}">{{ __('all.hasabinizVarMiGirisSayfasinaGidin') }}</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javaScript')

@endsection
