@extends('admin.layouts.app')

@section('meta')
@endsection

@section('title','Profili Düzenle')

@section('cascadingStyleSheets')
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Profili Düzenle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.anasayfa') }}">Anasayfa</a></li>
            <li class="breadcrumb-item active">Profili Düzenle</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('user-profile-information.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="small mb-1" for="name">Ad Soyad</label>
                        <input class="form-control py-4 @error('name') is-invalid @enderror" id="name" type="text" placeholder="Ad Soyad Giriniz" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name" autofocus/>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="email">Eposta Adresi</label>
                        <input class="form-control py-4 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Eposta Adresi Giriniz" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autocomplete="email"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="locale">Dil</label>
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
                        <button type="submit" class="btn btn-primary btn-block">Profili Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('javaScript')
    <script src="{{ asset('assets/admin/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/datatables-demo.js') }}"></script>
@endsection
