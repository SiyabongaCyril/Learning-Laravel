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


        ContactForm::create($data);

        return redirect('/contact-form')->with('success', 'Thanks for contacting us! We will get back to you soon.');
    }
}
