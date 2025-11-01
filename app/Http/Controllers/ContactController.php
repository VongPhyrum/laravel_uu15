<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email'=> 'required|email|max:255',
            'message'=> 'required|string',
        ]);

        Contact::create($data);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
