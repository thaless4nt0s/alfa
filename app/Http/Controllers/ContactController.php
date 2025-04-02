<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contact;
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            $this->contact->rules()
        );

        Contact::create($validated);

        return redirect()->route('dashboard')->with('success', 'Contact has been created !');
    }

    public function index()
    {
        $contacts = $this->contact->select('id', 'name', 'email', 'contact')->get();
        return view('dashboard', compact('contacts'));
    }
}
