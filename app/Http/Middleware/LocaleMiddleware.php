<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //TODO  : Sessiondaki locale değişkenine istenilen değer atanabiliyor ve dil de olmayan bir deger atanırsa varsayilan dil çalışıyor.Dilde olmayan bir değer atanmaya çalışırsa hata verilebilir
        $locale = null;

        if (Auth::check() && !Session::has('locale')) {
            $locale = $request->user()->locale;
            Session::put('locale', $locale);
        }

        if ($request->has('locale')) {
            $locale = $request->get('locale');
            Session::put('locale', $locale);
        }

        $locale = Session::get('locale');

        if (null === $locale) {
            $locale = config('app.fallback_locale');
        }

        App::setLocale($locale);
        return $next($request);
/*
 * Örnek 2
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }
        return $next($request);
*/
    }
}
