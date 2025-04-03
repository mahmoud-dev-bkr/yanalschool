<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    protected $model ;

    public function __construct(Category $model){
        $this->model = $model;
    }

    public function index()
    {
        $this->setSessionDelete();
        $categories  = $this->model->latest()->get();
        return view('dashboard.category.index' ,[
            'data' => $this->model->latest()->paginate(10),
            'categories' => $categories
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = $this->model->latest()->get();
        return view('dashboard.category.form' ,[
            'resource' => $this->model,
            'categories' => $categories
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StorecategoryUS $request
     * @return Renderable
     */
    public function store(StoreCategory $request)
    {
        $inputs = $request->validated();
        // dd($inputs);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SLIDER_PATH'),$inputs['en']['title']);
        }
        $this->model->create($inputs);
        toast(__('created') , 'success');
        return redirect()->route('admin.category');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $categories = $this->model->latest()->get();
        return view('dashboard.category.form' ,[
            'resource' => $this->model->findOrFail($id),
            'categories' => $categories

        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StorecategoryUS $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreCategory $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SLIDER_PATH'),$inputs['en']['title'], $resource->image);
        }
        // dd($inputs);
        $resource->update($inputs);
        toast(__('updated'), 'success');
        return redirect()->route('admin.category');
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
        return redirect()->route('admin.category');
    }
}
