<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class SettingController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('GET')){
            $setting = Setting::first();
            return view('admin.pages.setting.index', compact('setting'));
        }
        $this->create($request);
        return redirect()->back();
    }

    Public function create($request){
        if(!empty($request->image)){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('logo'), $imageName);
            }else{
                $imageName = Setting::first()->image ?? '';
            }

        $setting = Setting::updateOrCreate(['id' => 1],
        ['AppName' => $request->AppName ?? null,
        'image' => $imageName,
       'facebook' => $request->facebook ?? null,
       'twitter' => $request->twitter ?? null,
       'googleplus' => $request->googleplus ?? null,
       'instagram' => $request->instagram ?? null,
       'linkedin' => $request->linkedin ?? null,
       'mobile' => $request->mobile ?? null,
       'email' => $request->email ?? null, 
       'address' => $request->address ?? null,
       'copyright' => $request->copyright ?? null,
       'about_us' => $request->about_us ?? null,
    ],
    );
    }
    
}
