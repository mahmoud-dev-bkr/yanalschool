<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreAboutUS;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{


    protected $model ;

    public function __construct(About $model){
        $this->model = $model;
    }

    public function index()
    {
       $this->setSessionDelete();

        return view('dashboard.about-us.index' ,[
            'data' => $this->model->latest()->paginate(10),
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.about-us.form' ,[
            'resource' => $this->model,
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreAboutUS $request
     * @return Renderable
     */
    public function store(StoreAboutUS $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage( $inputs['image'] , config('path.SLIDER_PATH'), $inputs['en']['title']);
        }
        // dd($inputs);
        $this->model->create($inputs);
        toast(__('created') , 'success');
        return redirect()->route('admin.about');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.about-us.form' ,[
            'resource' => $this->model->findOrFail($id),

        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreAboutUS $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreAboutUS $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SLIDER_PATH'),$inputs['en']['title'], $resource->image);
        }
        // dd($inputs);
        $resource->update($inputs);
        toast(__('updated'), 'success');
        return redirect()->route('admin.about');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        deleteImage($resource->image);
        $resource->delete();
        toast(__('deleted'), 'success');
        return redirect()->route('admin.about');
    }
}
