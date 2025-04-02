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
        $validated = $request->validate($this->contact->rules());

        try {
            Contact::create($validated);
            return redirect()->route('dashboard')->with('success', 'Contact has been created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while creating the contact.');
        }
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
        try {
            $contact = Contact::findOrFail($id);
            $validated = $request->only(array_keys($contact->rules()));
            $validated = $request->validate($contact->rules());
            $contact->update($validated);
            return redirect()->route('dashboard')->with('success', 'The contact has been updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the contact: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();
            return redirect()->route('dashboard')->with('success', 'Contact has been deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the contact.');
        }
    }


    // Mostrar um contato em especifico
    public function show($id)
    {
        $contact = $this->contact->findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

}
