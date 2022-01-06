<?php

namespace App\Http\Controllers\project_panel;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use App\Models\User;
use Illuminate\Http\Client\Events\RequestSending;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class ProfileController extends Controller
{
    public function Profile(){
        $get_profile=User::Where('id',auth()->user()->id)->with('Merchant')->first();

        return view('project_panel.panel_pages.profile',compact('get_profile'));
    }
    public function UpdateProfile(Request $request){
        $update_profile=Merchant::where('user_id',auth()->user()->id)->first();
        if ($update_profile){
            $update_profile->contact=$request->contact;
            $update_profile->city=$request->city;
            $update_profile->country=$request->country;
            $update_profile->address=$request->address;
            if($update_profile->save()){
                return back()->with('success','updated successfully');
            }
        }else{

            $update_profile=new merchant();
            $update_profile->user_id=auth()->user()->id;
            $update_profile->contact=$request->contact;
            $update_profile->city=$request->city;
            $update_profile->country=$request->country;
            $update_profile->address=$request->address;
            if($update_profile->save()){
                return back()->with('success','updated successfully');
            }
        }

    }
}
