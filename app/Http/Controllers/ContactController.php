<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller{
    public function submit(ContactRequest $request){
        $contact = new Contact();
        $contact->firstName = $request->input('firstName');
        $contact->lastName = $request->input('lastName');
        $contact->username = $request->input('username');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->route('contact')->with('success', 'Submited!');
    }

    public function all_submits(){
        return view('messages', ['data' => Contact::all()]);
    }

    public function get_messages($username){
        $temp = new Contact();
        $temp->username = $username;
        return View('user_messages', ['user'=>$temp], ['data' => Contact::all()]);
    }

}
