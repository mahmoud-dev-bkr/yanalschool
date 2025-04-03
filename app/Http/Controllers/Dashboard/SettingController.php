<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    protected $model;

    public function __construct(Setting $model){
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('dashboard.settings.index' , [
            'settings' => $this->model->all(),
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function officeLocation()
    {
        $days = Setting::DAYS;
        $startTime = json_decode(optional($this->model->where('key','start_time')->first())->value,true);
        $endTime = json_decode(optional($this->model->where('key','end_time')->first())->value,true);
        // dd($startTime['Friday']);
        return view('dashboard.settings.officeLocation' , [
            'settings' => $this->model->all(),
            'days' => $days,
            'startTime' => $startTime,
            'endTime' => $endTime
        ]);
    }


   public function update(Request $request){
        $setting = $this->model->all();
        $inputs = $request->except('_token');


        if (isset($inputs['logo'])) {
            $inputs['logo'] = uploadImage($inputs['logo'] , config('path.SETTING_PATH'),'logo' , optional($setting->where('key','logo')->first())->value);
        }

        if (isset($inputs['logo_white'])) {
            $inputs['logo_white'] = uploadImage($inputs['logo_white'] , config('path.SETTING_PATH') ,'logo_white' , optional($setting->where('key','logo_white')->first())->value);
        }

        if (isset($inputs['favicon'])) {
            $inputs['favicon'] = uploadImage($inputs['favicon'] , config('path.SETTING_PATH'),'favicon' , optional($setting->where('key','favicon')->first())->value);
        }
        if (isset($inputs['contact_image'])) {
            $inputs['contact_image'] = uploadImage($inputs['contact_image'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','contact_image')->first())->value);
        }

        if (isset($inputs['bg_footer'])) {
            $inputs['bg_footer'] = uploadImage($inputs['bg_footer'] , config('path.SETTING_PATH') ,'bg_footer', optional($setting->where('key','bg_footer')->first())->value);
        }

        if (isset($inputs['value_image'])) {
            $inputs['value_image'] = uploadImage($inputs['value_image'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','value_image')->first())->value);
        }
        if (isset($inputs['goals_image'])) {
            $inputs['goals_image'] = uploadImage($inputs['goals_image'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','goals_image')->first())->value);
        }
        if (isset($inputs['message_image'])) {
            $inputs['message_image'] = uploadImage($inputs['message_image'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','message_image')->first())->value);
        }
        if (isset($inputs['footer_image'])) {
            $inputs['footer_image'] = uploadImage($inputs['footer_image'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','footer_image')->first())->value);
        }

        if (isset($inputs['goals_logo'])) {
            $inputs['goals_logo'] = uploadImage($inputs['goals_logo'] , config('path.SETTING_PATH') ,'', optional($setting->where('key','goals_logo')->first())->value);
        }

        $this->model->setMany($inputs);
        toast(__('updated') , 'success');
        return redirect()->back();
   }
}
