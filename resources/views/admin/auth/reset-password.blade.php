@extends('admin.layouts.auth')

@section('meta')
@endsection

@section('title', config('app.name', 'Laravel') . ' | ' . __('all.sifreyiYenile'))

@section('cascadingStyleSheets')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('all.sifreyiYenile') }}</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ request()->token }}">
                            <div class="form-group">
                                <label class="small mb-1" for="email">{{ __('all.epostaAdresi') }}</label>
                                <input class="form-control py-4 @error('email') is-invalid @enderror" id="email" type="email" placeholder="{{ __('all.epostaAdresiniziGiriniz') }}" name="email" value="{{ request()->email ?? old('email') }}" required autocomplete="email" autofocus>
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
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary" type="submit">{{ __('all.sifreyiYenile') }}</button>
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
