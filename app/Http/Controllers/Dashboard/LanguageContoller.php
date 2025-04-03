<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreLangRequest;
use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LanguageContoller extends Controller
{
    protected $model;

    public function __construct(Lang $model)
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

        return view('dashboard.languages.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.languages.form', [
            'resource' => $this->model,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreField $request
     * @return Renderable
     */
    public function store(StoreLangRequest $request)
    {
        $inputs = $request->validated();
        $this->model->create($inputs);
        toast(__('created'), 'success');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.languages.form', [
            'resource' => $this->model->findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param StoreField $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreLangRequest $request, $id)
    {
        $inputs = $request->validated();

        $this->model->findOrFail($id)->update($inputs);
        toast(__('updated'), 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $lang = $this->model->findOrFail($id);
        DB::table('word_translations')->where('locale', $lang->locale)->delete();
        $lang->delete();
        toast(__('deleted'), 'success');
        return back();
    }

}
