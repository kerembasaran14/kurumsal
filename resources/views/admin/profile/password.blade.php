@extends('admin.layouts.app')

@section('meta')
@endsection

@section('title','Şifreyi Düzenle')

@section('cascadingStyleSheets')
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Şifreyi Düzenle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.anasayfa') }}">Anasayfa</a></li>
            <li class="breadcrumb-item active">Şifreyi Düzenle</li>
        </ol>
        @if(session('status')=='password-updated')
            <div class="alert alert-success">
                Parola başarıyla güncellendi.
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('user-password.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="small mb-1" for="current_password">Mevcut Şifre</label>
                        <input class="form-control py-4 @error('current_password','updatePassword') is-invalid @enderror" id="current_password" type="password" placeholder="Mevcut Şifrenizi Giriniz" name="current_password" required autofocus/>
                        @error('current_password','updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="password">Yeni Şifre</label>
                        <input class="form-control py-4 @error('password','updatePassword') is-invalid @enderror" id="password" type="password" placeholder="Yeni Şifrenizi Giriniz" name="password" required autocomplete="new-password"/>
                        @error('password','updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="password-confirm">Yeni Şifre Tekrar</label>
                        <input class="form-control py-4" id="password-confirm" type="password" placeholder="Yeni Şifrenizi Tekrar Giriniz" name="password_confirmation" required autocomplete="new-password"/>
                    </div>
                    <div class="form-group mt-4 mb-0">
                        <button type="submit" class="btn btn-primary btn-block">Şifreyi Güncelle</button>
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
