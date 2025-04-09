<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        new ContactForm($validatedData);

        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');
    }
}
