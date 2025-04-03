<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Lang;
use App\Models\Word;
use Illuminate\Http\Request;

class WordTranslationController extends Controller
{
    protected $model;

    public function __construct(Word $model)
    {
        $this->model = $model;
    }


      /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $this->setSessionDelete();
        $search = request('search');
        $data = $this->model->where(function ($query) use ($search) {
            if ($search) {
                $query->where('key', 'like', "%{$search}%")
                    ->orWhereTranslationLike('value', "%{$search}%");
            }
        })->paginate(20);

        return view('dashboard.translations.index', [
            'data' => $data,
            'langs' => Lang::all()
        ]);
    }



    public function saveTranslations(Request $request){
        $request = $request->except('_token');
        // dd($request);
        foreach ($request as $key => $value) {
            $trans = $this->model->where('id', $key)->first();
            // if ($value['ar']['value'] != null && $value['en']['value'] != null) {
                // dd($value);
                $trans->update($value);
            // }
        }
         toast(__('updated'), 'success');
        return back();
    }


    public function destroy($id)
    {
        $lang = $this->model->findOrFail($id);
        $lang->delete();
        toast(__('deleted'), 'success');
        return back();
    }
}
