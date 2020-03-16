<?php

namespace App\Http\Controllers\backend\admin\profile;

use App\Http\Controllers\Controller;
use App\Model\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::where('user_id',Auth::user()->id)->firstOrFail();
        $title = $profile->company_name.' - Update Profile | Admin Panel | Hotel Shaara';
        return view('backend.admin.profile.index',compact('title','profile'));
    }
    public function update(Request $request){
        $this->validate($request,[
            'company_name' => 'required',
            'company_address' => 'required',
            'telephone1' => 'required',
            'email1' => 'required',
            'details' => 'required',
        ]);
        $profile = Profile::where('user_id',Auth::user()->id)->firstOrFail();
        $profile->company_name = $request->company_name;
        $profile->company_heading = $request->company_heading;
        $profile->company_address = $request->company_address;
        $profile->telephone1 = $request->telephone1;
        $profile->telephone2 = $request->telephone2;
        $profile->email1 = $request->email1;
        $profile->details = $request->details;
        $profile->map_link = $request->map_link;
        $profile->save();
        return back()->with('success','Profile Updated Successfully !!');
    }
}
