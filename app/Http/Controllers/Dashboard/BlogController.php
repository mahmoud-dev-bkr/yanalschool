<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreBlog;
use App\Models\Blog;

use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    protected $model ;

    public function __construct(Blog $model){
        $this->model = $model;
    }

    public function index()
    {
       $this->setSessionDelete();

        return view('dashboard.blogs.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.blogs.form' ,[
            'resource' => $this->model,
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreBlog $request
     * @return Renderable
     */
    public function store(StoreBlog $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage( $inputs['image'] , config('path.BOLG_PATH'), $inputs['en']['title']);
        }

        DB::beginTransaction();
        $service = $this->model->create($inputs);

        DB::commit();
        toast(__('created') , 'success');
        return redirect()->route('admin.blog');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
       $this->setSessionDelete();
        return view('dashboard.blogs.form' ,[
            'resource' => $this->model->findOrFail($id),

        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreBlog $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreBlog $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.BOLG_PATH'),$inputs['en']['title'], $resource->image);
        }

        DB::beginTransaction();
        $resource->update($inputs);

        DB::commit();
        toast(__('updated'), 'success');
        return redirect()->route('admin.blog');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        // dd($resource->images()->pluck('image')->toArray());
        deleteImage($resource->image);
        $resource->delete();
        toast(__('deleted'), 'success');
        return redirect()->route('admin.blog');
    }





}
