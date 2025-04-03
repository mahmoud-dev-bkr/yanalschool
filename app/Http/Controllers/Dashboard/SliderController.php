<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChangeStatus;
use App\Http\Requests\Dashboard\Slider\StoreSlider;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    protected $model ;

    public function __construct(Slider $model){
        $this->model = $model;
    }

    public function index()
    {
       $this->setSessionDelete();

        return view('dashboard.sliders.form' ,[
            'resource' => $this->model->first() ?? $this->model,
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.sliders.form' ,[
            'resource' => $this->model,
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreSlider $request
     * @return Renderable
     */
    public function store(StoreSlider $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image_1'])) {
            $inputs['image_1'] = uploadImage( $inputs['image_1'] , config('path.SLIDER_PATH'), );
        }
        if (isset($inputs['image_2'])) {
            $inputs['image_2'] = uploadImage( $inputs['image_2'] , config('path.SLIDER_PATH'), );
        }
        if (isset($inputs['image_3'])) {
            $inputs['image_3'] = uploadImage( $inputs['image_3'] , config('path.SLIDER_PATH'), );
        }
        // dd($inputs);
        $this->model->create($inputs);
        toast(__('created') , 'success');
       return redirect()->route('admin.slider');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.sliders.form' ,[
            'resource' => $this->model->findOrFail($id),
            'types' => Slider::TYPE

        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreSlider $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreSlider $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        
        if (isset($inputs['image_1'])) {
            $inputs['image_1'] = uploadImage( $inputs['image_1'] , config('path.SLIDER_PATH'), );
        }
        if (isset($inputs['image_2'])) {
            $inputs['image_2'] = uploadImage( $inputs['image_2'] , config('path.SLIDER_PATH'), );
        }
        if (isset($inputs['image_3'])) {
            $inputs['image_3'] = uploadImage( $inputs['image_3'] , config('path.SLIDER_PATH'), );
        }
        // dd($inputs);
        $resource->update($inputs);
        toast(__('created') , 'success');
        return redirect()->route('admin.slider');
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
        return redirect()->route('admin.slider');
    }


     /**
     *Change the status of a slider.
     * @param ChangeStatus $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeStatus(ChangeStatus $request)
    {
        $inputs = $request->validated();
        $this->model->findOrFail($inputs['id'])->update([
            'status' => $inputs['status']
        ]);
        return response()->json([
            'success' => true,
            'message' => __('updated')
        ]);
    }
}
