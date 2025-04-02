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

        return redirect()->route('dashboard')->with('success', 'Contact has been created!');
    }

    public function index()
    {
        $contacts = $this->contact->select('id', 'name', 'email', 'contact')->get();
        return view('dashboard', compact('contacts'));
    }

    // Atualizar contato
    public function edit($id)
    {
        $contact = $this->contact->findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            $this->contact->rules()
        );

        $contact = $this->contact->findOrFail($id);
        $contact->update($validated);

        return redirect()->route('dashboard')->with('success', 'Contact has been updated!');
    }

    // Remover contato
    public function destroy($id)
    {
        $contact = $this->contact->findOrFail($id);
        $contact->delete();

        return redirect()->route('dashboard')->with('success', 'Contact has been deleted!');
    }
}
