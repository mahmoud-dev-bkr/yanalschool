<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\StoreRate;

use App\Models\CustomerRate;

class CustomerRateController extends Controller
{

    protected $model ;

    public function __construct(CustomerRate $model){
        $this->model = $model;
    }

    public function index()
    {
       $this->setSessionDelete();

        return view('dashboard.customer-rates.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.customer-rates.form' ,[
            'resource' => $this->model
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StoreRate $request
     * @return Renderable
     */
    public function store(StoreRate $request)
    {

        $inputs = $request->validated();
       $inputs['image'] = uploadImage($inputs['image'], config('path.RATE_PATH'),);

       // Save the data
       $this->model->create($inputs);

       toast(__('created'), 'success');
       return redirect()->back();
    }



      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.customer-rates.form' ,[
            'resource' => $this->model->findOrFail($id)
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StoreRate $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreRate $request, $id)
    {
        $inputs = $request->validated();

        $resource = $this->model->findOrFail($id);
        if(isset($inputs['image'])){
            $inputs['image'] = uploadImage($inputs['image'], config('path.RATE_PATH'),null, $resource->image);
        }
        $resource->update($inputs);
        toast(__('updated'), 'success');
        return redirect()->back();
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
        return redirect()->back();
    }



}
