<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::get(); //I can do paginate(10) but I am already using datatables so it is unnecessary :)
        
        return view('pages.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $request->validated();

        $contact = new Contact();
        $contact->saveContact($request);

        Mail::to($request->email)->send(new SendMailable());

        if($request->get('action') == 'save')
        {
            return redirect()->route('contacts.index')->withSuccess('Successfully Created');
        }elseif($request->get('action') == 'continue')
        {
            return redirect()->route('contacts.create')->withSuccess('Successfully Created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('pages.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('pages.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $request->validated();

        $contact->saveContact($request);
        if($request->get('action') == 'save')
        {
            return redirect()->route('contacts.index')->withSuccess('Successfully Updated');
        }elseif($request->get('action') == 'continue')
        {
            return redirect()->route('contacts.create')->withSuccess('Successfully Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->withSuccess('Successfully Deleted!');
    }
}
