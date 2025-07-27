<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Email::all();

        return view("showEmails", compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $emails = Email::all();
        return view("email", compact('emails'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|string",
            'phone' => "required|string|unique:emails,phone",
            'email' => "required|string|unique:emails,email",
            'message' => "required|string",
            'importance' => "required|string",
            'image' => "required|max:2048"
        ]);

        $path = $request->file("image")->store('images', 'public');

        Email::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'importance' => $request->importance,
            'image' => $path
        ]);

        return redirect('/showEmails');
    }

    /**
     * Display the specified resource.
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        $email->delete();
        return back();
    }
}
