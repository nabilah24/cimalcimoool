<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->subject = $validatedData['subject'];
        $contact->message = $validatedData['message'];

        if ($contact->save()) {
            return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
        } else {
            return redirect()->back()->with('error', 'Failed to save data. Please try again.');
        }
    }

    public function viewContact()
{
    $contacts = Contact::all(); // Ambil semua data dari tabel contacts

    return view('admin.viewcontact', compact('contacts'));
}

}

