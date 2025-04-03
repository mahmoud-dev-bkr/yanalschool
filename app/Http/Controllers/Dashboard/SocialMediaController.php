<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChangeStatus;
use App\Http\Requests\Dashboard\StoreSocialMedia;
use App\Models\Slider;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{

    protected $model ;

    public function __construct(SocialMedia $model){
        $this->model = $model;
    }

    public function index()
    {
       $this->setSessionDelete();

        return view('dashboard.social-media.index' ,[
            'data' => $this->model->latest()->paginate(10),
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.social-media.form' ,[
            'resource' => $this->model,
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreSocialMedia $request
     * @return Renderable
     */
    public function store(StoreSocialMedia $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['icon'])) {
            $inputs['icon'] = uploadImage( $inputs['icon'] , 'uploads/social-media/', 'icon');
        }
        // dd($inputs);
        $this->model->create($inputs);
        toast(__('created') , 'success');
        return back();
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.social-media.form' ,[
            'resource' => $this->model->findOrFail($id),
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreSocialMedia $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreSocialMedia $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['icon'])) {
            $inputs['icon'] = uploadImage($inputs['icon'],'uploads/social-media/','icon', $resource->icon);
        }
        // dd($inputs);
        $resource->update($inputs);
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
        $resource = $this->model->findOrFail($id);
        deleteImage($resource->image);
        $resource->delete();
        toast(__('deleted'), 'success');
        return back();
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



    public function makeSort(Request $request)
    {
        $inputs = $request->only(['id', 'sort']);

        $resource = $this->model->findOrFail($inputs['id']);
        $resource->sort =  $inputs['sort'];
        $resource->save();
        return response()->json([
            'success' => true,
            'message' => __('updated info successfully')
        ]);
    }
}
