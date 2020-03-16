<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Model\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class SliderController extends Controller
{
    public function index(){
        return redirect('admin/slider/slider-list');
    }
    public function slider_list(Request $request){
        $title ='Slider List - Admin Panel | Hotel Shaara';
        $slider = Slider::orderBy('id','DESC');
        if ($request->status){
            $slider->where('status',$request->status);
        }
        $sliders = $slider->get();
        return view('backend.admin.slider.index',compact('title','sliders'));
    }
    public function create(){
        $title = 'Add New Slider - Admin Panel | Hotel Shaara';
        return view('backend.admin.slider.create',compact('title'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        $slider = new Slider();
        $slider->user_id = Auth::user()->id;
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        if ($request->hasFile('image')){
            $filename = request()->file('image')->getClientOriginalName();
            $image       = $request->file('image');
            $image_base = public_path('uploads/slider');

                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(1920, 850);
                $image_resize->save($image_base.'/'.$filename);
            $slider->image =$filename;
        }
        $slider->status = $request->status;
        $slider->save();
        return redirect('admin/slider/slider-list')->with('success','Slider Added Successfully !!');
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        $slider = Slider::findOrFail($id);
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        if ($request->hasFile('image')){
            $filename = request()->file('image')->getClientOriginalName();
            $image       = $request->file('image');
            $image_base = public_path('uploads/slider');
            if (is_file($image_base.'/'.$slider->image) && file_exists($image_base.'/'.$slider->image)){
                unlink($image_base.'/'.$slider->image);
            }
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1920, 850);
            $image_resize->save($image_base.'/'.$filename);
            $slider->image =$filename;
        }

        $slider->status = $request->status;
        $slider->save();
        return redirect('admin/slider/slider-list')->with('success','Slider Updated Successfully !!');
    }
    public function delete(Request $request,$id){
            $slider = Slider::findOrFail($id);
            $image_base = public_path('uploads/uploads/slider');
            if (is_file($image_base.'/'.$slider->image) && file_exists($image_base.'/'.$slider->image)){
                unlink($image_base.'/'.$slider->image);
            }
            $slider->delete();
        return redirect('admin/slider/slider-list')->with('success','Slider Deleted Successfully !!');
    }
    public function changeStatus(Request $request,$id){
        $slider = Slider::findOrFail($id);
        $slider->status = $request->status;
        $slider->save();
        return back()->with('success','Slider '.$request->status.' Successfully!!');
    }
}
