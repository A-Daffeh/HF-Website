<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();

        return view('web.contact', compact('contacts'));
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

     /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);

        return view('web.contact-show', compact('contact', $contact));
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
    
        return redirect()->route('home')
                        ->with('success','Contacted Info deleted successfully');
    }
}
