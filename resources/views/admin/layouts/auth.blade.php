<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('meta')

    <title>@yield('title')</title>

    <link href="{{ asset('assets/admin/css/styles.css') }}" rel="stylesheet"/>
    @yield('cascadingStyleSheets')
    <script src="{{ asset('assets/admin/js/font-awesome.all.min.js') }}" defer></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            @yield('content')
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        @include('admin.layouts.partials.auth-footer')
    </div>
</div>
<script src="{{ asset('assets/admin/js/jquery-3.5.1.slim.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
@yield('javaScript')
</body>
</html>
