<?php

namespace App\Http\Controllers\project_website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function Landing(){
        $get_services=Service::take(6)->with('ServiceImage','User')->get();

         return view('project_website.website_pages.landing',compact('get_services'));

    }
    public function ServiceDetail($id){
        $get_service=Service::Where('id',$id)->with('ServiceImage')->first();

        return view('project_website.website_pages.service_details',compact('get_service'));
    }
    public function CheckOut($id){
        $get_service=Service::Where('id',$id)->with('ServiceImage')->first();

        return view('project_website.website_pages.checkout',compact('get_service'));
    }
    public function SubmitOrder(Request $request){
        $venue=$request->location;
        $function_cat=$request->function_cat;
        $persons=$request->persons;
        $date=$request->date;
        $information=$request->information;
        $service_id=$request->service_id;
        $order_id="CK".rand('10000','99999');
        $submit_order=new Order();
        $submit_order->order_id=$order_id;
        $submit_order->service_id=$service_id;
        $submit_order->customer_id=auth()->user()->id;
        $submit_order->venue=$venue;
        $submit_order->date=$date;
        $submit_order->information=$information;
        $submit_order->persons=$persons;
        $submit_order->function_category=$function_cat;
        $submit_order->status="pending";
        $submit_order->save();
        return view('project_website.website_pages.thankyou');
    }
    public function ShopServices($id){
        $get_name=User::Where('id',$id)->with('Merchant')->first();
        $get_service=Service::Where('user_id',$id)->with('ServiceImage')->orderBy('category', 'ASC')->get();
        $category = [];
        $products = [];
        foreach($get_service as $key=>$value) {
            if(!in_array($value->category, $category)){
                array_push($category,$value->category);
            }
        }
        foreach($category as $key=>$cat){
            $product = [];
            foreach($get_service as $key=>$value) {
                if($value->category == $cat){
                    array_push($product,$value);
                }
            }
            $products[$cat] = $product;
        }
        $catPro['category'] = $category;
        $catPro['products'] = $products;
//        dd($catPro);
        return view('project_website.website_pages.shop',compact('catPro','get_name'));
    }
    public function ServicePage(Request $request){
        $service=$request->service;
        $get_services=Service::Where('title','like','%'.$service.'%')->orWhere('category','like','%'.$service.'%')->orWhere('price','like','%'.$service.'%')->with('ServiceImage')->get();


        return view('project_website.website_pages.services',compact('get_services'));
    }
}
