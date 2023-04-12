<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('web.contact');
    }

    public function contactSuccess() {
        return view('web.contact-success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:contacts'],
            'reason' => 'required'
        ]);
    
        Contact::create($request->all());
        
        return redirect()->route('contact.success');
    }
}
