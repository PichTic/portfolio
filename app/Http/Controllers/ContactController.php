<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage,
    Illuminate\Http\Request,
    Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function contact(Request $request) {

//        $form = $request->except(array('_token', 'envoi'));

        // rules to validate form fields
        $rules = array(
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'mail' => 'required|email',
            'text' => 'required'
        );

        // validate the entire request against rules
        // if the validation fails, an implied redirect
        // with error messages will occur
        $this->validate($request, $rules);

        Mail::to('vincent.pichot.tic@gmail.com')->send(new ContactMessage($request));

        //redirect in this manner ONLY if the validation is successful
        return redirect('/contact')->with('test', 'win');

    }


}
