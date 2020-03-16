<?php

namespace App\Http\Controllers\frontend\contact;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $title = 'Contact Us - IDEA FOR WORLD';
        return view('frontend.pages.contact.index',compact('title'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'full_name' => 'required',
            'phone_number' => 'required|digits:10|numeric',
            'email_address' => 'required|email',
            'message' => 'required',
            'subscribe' => 'required',
        ]);
        $contact = new Contact();
        $contact->full_name = $request->full_name;
        $contact->phone_number = $request->phone_number;
        $contact->email_address = $request->email_address;
        $contact->message = $request->message;
        $contact->subscribe = $request->subscribe;
        $contact->status='active';
        $contact->save();
        return back()->with('success','Thank you for contacting us !!');
    }

}
