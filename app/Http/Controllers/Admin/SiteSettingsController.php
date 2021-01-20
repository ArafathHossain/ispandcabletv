<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class SiteSettingsController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function Edit()
    {
    	$settings = DB::table('sitesettings')->first();
    	return view('admin.sitesettings.sitesettings',compact('settings'));
    }


    public function update(Request $request)
    {
      $data = array();
      $data['company_name'] = $request->company_name;
      $data['company_email'] = $request->company_email;
      $data['company_phone1'] = $request->company_phone1;
      $data['company_phone2'] = $request->company_phone2;
      $data['company_mobile'] = $request->company_mobile;
      $data['company_address'] = $request->company_address;
      $data['facebook_link'] = $request->facebook_link;
      $data['twitter_link'] = $request->twitter_link;
      $data['pinterest_link'] = $request->pinterest_link;
      $data['instagram_link'] = $request->instagram_link;
      $data['linkedin_link'] = $request->linkedin_link;
      $data['youtube_link'] = $request->youtube_link;


    $logo = $request->file('logo');
    $fav_icon = $request->file('fav_icon');
    $slide_image1 = $request->file('slide_image1');
    $slide_image2 = $request->file('slide_image2');
    $slide_image3 = $request->file('slide_image3');

    $old_logo = $request->old_logo;
    $old_fav_icon = $request->old_fav_icon;
    $old_slide_image1 = $request->old_slide_image1;
    $old_slide_image2 = $request->old_slide_image2;
    $old_slide_image3 = $request->old_slide_image3;


    if ($logo) 
    {
      if ($old_logo) 
      {
       unlink($old_logo);
      }
    $logo_name = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
    Image::make($logo)->save('public/media/sitesettings/'.$logo_name);
    $data['logo'] = 'public/media/sitesettings/'.$logo_name;
    }

    if ($fav_icon) {
      if ($old_fav_icon) {
        unlink($old_fav_icon);
      }
      $fav_icon_name = hexdec(uniqid()).'.'.$fav_icon->getClientOriginalExtension();
      Image::make($fav_icon)->save('public/media/sitesettings/'.$fav_icon_name);
      $data['fav_icon'] = 'public/media/sitesettings/'.$fav_icon_name;
    }

    if ($slide_image1) 
    {
      if ($old_slide_image1) 
      {
       unlink($old_slide_image1);
      }
    $slide_image1_name = hexdec(uniqid()).'.'.$slide_image1->getClientOriginalExtension();
    Image::make($slide_image1)->save('public/media/sitesettings/'.$slide_image1_name);
    $data['slide_image1'] = 'public/media/sitesettings/'.$slide_image1_name;
    }

    if ($slide_image2) 
    {
      if ($old_slide_image2) 
      {
       unlink($old_slide_image2);
      }
    $slide_image2_name = hexdec(uniqid()).'.'.$slide_image2->getClientOriginalExtension();
    Image::make($slide_image2)->save('public/media/sitesettings/'.$slide_image2_name);
    $data['slide_image2'] = 'public/media/sitesettings/'.$slide_image2_name;
    }

    if ($slide_image3) 
    {
      if ($old_slide_image3) 
      {
       unlink($old_slide_image3);
      }
    $slide_image3_name = hexdec(uniqid()).'.'.$slide_image3->getClientOriginalExtension();
    Image::make($slide_image3)->save('public/media/sitesettings/'.$slide_image3_name);
    $data['slide_image3'] = 'public/media/sitesettings/'.$slide_image3_name;
    }

    
    // return response()->json($data);  
    $update = DB::table('sitesettings')->where('id',1)->update($data);
     if ($update) {
      $notification=array(
            'messege'=>'Settings Successfully Updated',
            'alert-type'=>'success'
             );
           return Redirect()->route('site.settings')->with($notification);
    }else{
      $notification=array(
            'messege'=>'Nothing To Update',
            'alert-type'=>'warning'
             );
           return Redirect()->route('site.settings')->with($notification);
    }
  }










}
