@extends('admin.layouts.app')

@section('meta')
@endsection

@section('title', __('all.profiliDuzenle'))

@section('cascadingStyleSheets')
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">{{ __('all.profiliDuzenle') }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.anasayfa') }}">{{ __('all.anasayfa') }}</a></li>
            <li class="breadcrumb-item active">{{ __('all.profiliDuzenle') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('user-profile-information.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="small mb-1" for="name">{{ __('all.adSoyad') }}</label>
                        <input class="form-control py-4 @error('name') is-invalid @enderror" id="name" type="text" placeholder="{{ __('all.adSoyadGiriniz') }}" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name" autofocus/>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="email">{{ __('all.epostaAdresi') }}</label>
                        <input class="form-control py-4 @error('email') is-invalid @enderror" id="email" type="email" placeholder="{{ __('all.epostaAdresiniziGiriniz') }}" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autocomplete="email"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="locale">{{ __('all.dil') }}</label>
                        <select name="locale" id="locale" class="form-control @error('locale') is-invalid @enderror">
                            @foreach(App\Models\User::LOCALES as $locale => $label)
                                <option value="{{ $locale }}" @if(Auth::user()->locale==$locale) selected @endif>{{ $label }}</option>
                            @endforeach
                                <option value="de">Deneme</option>
                        </select>
                        @error('locale')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mt-4 mb-0">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('all.profiliGuncelle') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javaScript')
@endsection
