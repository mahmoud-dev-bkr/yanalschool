<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        App::setLocale(Session::has('locale') ? Session::get('locale') : config('app.locale'));
        $trans = Cache::remember('trans_' . app()->getLocale() . '', 60, function () {
            // Perform the database query if cache doesn't exist
            return DB::table('words')
                ->join('word_translations', 'words.id', '=', 'word_translations.word_id')
                ->where('locale', app()->getLocale())
                ->select('words.key', 'word_translations.value')
                ->get()
                ->pluck('value', 'key')
                ->toArray();
        });
        return $next($request);
    }
}
