<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Log;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {

        $data = $request->validate([
            'first_name' => 'required|min:1|max:50',
            'last_name' => 'required|min:1|max:50',
            'email' => 'required|email|min:5|max:100',
            'subject' => 'required|min:3|max:100',
            'message' => 'required|min:20|max:65535',
        ]);

        // Disallow resubmission if form was already submitted
        $exists = ContactForm::where(
            [ 'first_name' => $request['first_name'],
              'last_name' =>  $request['last_name'],
               'email' =>  $request['email'],
               'subject' =>  $request['subject'],
               'message' =>  $request['message']
            ]
          )->exists();

          //TODO: Deal with other types of spam form submissions          
          
          if ($exists){
            return redirect('/contact-form')->withInput()->with('success', 'Dear '.$request['first_name'].', Thank you for writing to us. We got your request and within 2 business days, we will get in touch.');
          } else{
            ContactForm::create($data);
            return redirect('/contact-form')->withInput()->with('success', 'Dear '.$request['first_name'].', Thanks for contacting us! We will get back to you soon.');
          }

    }
}
