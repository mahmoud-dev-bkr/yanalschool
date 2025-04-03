<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home.index',[
            'totals' => $this->getTotals(),
        ]);
    }


    public function profile()
    {

        return view('dashboard.profile.index',[
            'resource' => Admin::where('id',auth('admin')->user()->id)->first(),
        ]);
    }



    public function updateProfile(Request $request)
    {

        $inputs = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email,'.auth('admin')->user()->id],
            'password' => ['nullable', 'string', 'min:6'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'phone' => ['required', 'string', 'max:255'],

        ]);

        $resource = Admin::where('id',auth('admin')->user()->id)->first();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploadImage($request->image, 'uploads/admins/', $resource->username);
        }
        if (isset($inputs['password'])) {
            $inputs['password'] = bcrypt($inputs['password']);
        }else{
            unset($inputs['password']);
        }
        // dd($inputs);
        $resource->update($inputs);

        toast(__('updated') , 'success');
        return back();

    }


    private function getTotals()
    {

        return [
            [
                'title' => __('Sliders'),
                'value' => \App\Models\Slider::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-image fs-1"></i>',
                'url' => route('admin.slider')
            ],
            [
                'title' => __('Blogs'),
                'value' => \App\Models\Blog::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-briefcase fs-1"></i>',
                'url' => route('admin.blog')
            ],
            [
                'title' => __('Social Media'),
                'value' => \App\Models\SocialMedia::count(),
                'icon' => ' <i class="menu-icon tf-icons bx bx-share-alt fs-1"></i>',
                'url' => route('admin.social')

            ],
        ];
    }
}
