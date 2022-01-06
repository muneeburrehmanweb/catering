<?php

namespace App\Http\Controllers\project_panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function AddService(){
        $services_category=Category::all();
        $get_service="";
        return view('project_panel.panel_pages.add_service',compact('services_category','get_service'));
    }
    public function SubmitService(Request $request){

        $request->validate([
            'service_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->service_image->extension();

        $request->service_image->move(public_path('project_panel/assets/images/service_images'), $imageName);

            $title=$request->service_title;
            $service_category=$request->service_category;
            $service_price=$request->service_price;
            $menu_details=$request->menu_details;
            $add_ons=$request->add_ons;
            $store_service=new Service();
            $store_service->user_id=auth()->user()->id;
            $store_service->title=$title;
            $store_service->category=$service_category;
            $store_service->price=$service_price;
            $store_service->menu_details=$menu_details;
            $store_service->add_ons=$add_ons;
            $store_service->status='active';
            if ($store_service->save()){
                $store_service_image=new ServiceImage();
                $store_service_image->service_id=$store_service->id;
                $store_service_image->image=$imageName;
                $store_service_image->save();


            }


        return back()->with('success','service add successfully');
    }
    public function ShowService(){
        $show_services=Service::Where('user_id',auth()->user()->id)->get();
        return view('project_panel.panel_pages.services',compact('show_services'));
    }
    public function EditService($id){
        $get_service=Service::where('id',$id)->first();
        $get_service_image=ServiceImage::where('service_id',$get_service->id)->first();
        $services_category=Category::all();
        return view('project_panel.panel_pages.add_service',compact('get_service','services_category','get_service_image'));
    }
    Public function UpdateService(Request $request , $id){
        if ($request->hasFile('service_image')){
            $request->validate([
                'service_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->service_image->extension();

            $request->service_image->move(public_path('project_panel/assets/images/service_images'), $imageName);

        }

        $title=$request->service_title;
        $service_category=$request->service_category;
        $service_price=$request->service_price;
        $menu_details=$request->menu_details;
        $add_ons=$request->add_ons;
        $store_service=Service::Where('id',$id)->first();
        $store_service->user_id=auth()->user()->id;
        $store_service->title=$title;
        $store_service->category=$service_category;
        $store_service->price=$service_price;
        $store_service->menu_details=$menu_details;
        $store_service->add_ons=$add_ons;
        $store_service->status='active';
        if ($store_service->update() && $request->hasFile('service_image')){
            $store_service_image=ServiceImage::where('service_id',$store_service->id)->first();

            $store_service_image->image=$imageName;
            $store_service_image->save();


        }


        return back()->with('success','service add successfully');
    }
    public function DelService($id){
        $del_service=Service::where('id',$id)->delete();
        return back()->with('success','service delete succfully');
    }
    public function ServiceCategory(){
        $show_services_category=Category::all();
        return view('project_panel.panel_pages.service_category',compact('show_services_category'));
    }
    public function SubmitCategory(Request $request){
        $title=$request->category_title;
        $store_category=new Category();
        $store_category->title=$title;
        $store_category->status='active';
        $store_category->save();
        return back()->with('success','category added successfully');
    }
    public function DelCategory($id){
        $del_cat=Category::Where('id',$id)->delete();
        return back()->with('success','successfully deleted');
    }
    public function PendingOrders(){
        $my_orders=Order::Where('id',auth()->user()->id)->get();
        return view('project_panel.panel_pages.pending_orders',compact('my_orders'));
    }
}
