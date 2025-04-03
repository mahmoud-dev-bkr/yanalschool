<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Jenssegers\Date\Date;

class LangController extends Controller
{
    public function index(Request $request)
    {
        $langArr=config('translatable.locales');
        // dd($request->get('lang'));
        if($request->has('lang')){
            if (in_array($request->get('lang'), $langArr)){
                if (!Session::has('locale')) {
                    Session::put('locale', $request->get('lang'));
                    config(['app.locale' => $request->get('lang')]);
                } else {
                    Session::put('locale', $request->get('lang'));
                }
                // $trans = DB::table('words')->join('word_translations', 'words.id', '=', 'word_translations.word_id')
                // ->where('locale', $request->get('lang'))->select('words.key','word_translations.value')->get()->pluck('value','key')->toArray();

                // Cache::set('trans',$trans);

            }
        }
        return redirect()->back();
    }
}
