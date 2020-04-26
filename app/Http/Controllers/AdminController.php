<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = \App\Contact::paginate(10);
        return view("auth.main", compact('contacts'));
    }

    public function deleteContact(Contact $contact)
    {
        $contact->delete();
        return back();
    }
}
