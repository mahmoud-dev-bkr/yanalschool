<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreMeal;
use App\Models\Meal;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\ChangeStatus;
use App\Models\Category;
use PhpParser\Node\Expr\Cast;

class MealController extends Controller
{


    protected $model ;

    public function __construct(Meal $model){
        $this->model = $model;
    }

    public function index()
    {
        $this->setSessionDelete();
        $categories  = Category::latest()->get();
        return view('dashboard.meal.index' ,[
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
        $categories = Category::latest()->get();
        return view('dashboard.meal.form' ,[
            'resource' => $this->model,
            'categories' => $categories
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreMealUS $request
     * @return Renderable
     */
    public function store(StoreMeal $request)
    {
        $inputs = $request->validated();
        // dd($inputs);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SLIDER_PATH'),$inputs['en']['title']);
        }
        $this->model->create($inputs);
        toast(__('created') , 'success');
        return redirect()->route('admin.meal');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $categories = Category::latest()->get();
        return view('dashboard.meal.form' ,[
            'resource' => $this->model->findOrFail($id),
            'categories' => $categories

        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreMealUS $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreMeal $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SLIDER_PATH'),$inputs['en']['title'], $resource->image);
        }
        // dd($inputs);
        $resource->update($inputs);
        toast(__('updated'), 'success');
        return redirect()->route('admin.meal');
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
        return redirect()->route('admin.meal');
    }
    public function status(ChangeStatus $request)
    {
        $data = $this->model->where('id', $request->id)->update(['status' => $request->status]);
        return response()->json($data);
    }
}
