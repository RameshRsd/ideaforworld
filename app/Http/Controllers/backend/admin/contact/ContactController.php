<?php

namespace App\Http\Controllers\backend\admin\contact;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    public function index(){
        $title ='Contact List - Admin Panel | IDEA FOR WORLD';
        $contacts = Contact::where('status','active')->orderBy('id','DESC')->get();
        return view('backend.admin.contact.index',compact('title','contacts'));
    }
    public function remove($id){
        $contact = Contact::findOrFail($id);
        $contact->status='trash';
        $contact->save();
        Session::flash('contact_id',$contact->id);
        return redirect('admin/contact')->with('success','Record Removed Successfully !!');
    }
    public function restore($id){
        $contact = Contact::findOrFail($id);
        $contact->status='active';
        $contact->save();
        return redirect('admin/contact')->with('success','Record Restored Successfully !!');
    }
}
