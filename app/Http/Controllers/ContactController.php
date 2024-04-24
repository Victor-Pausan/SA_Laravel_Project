<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\CustomerQuestion;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first-name' => 'required|max:10',
            'last-name' => 'required|max:10',
            'email' => 'required|email',
            'subject' => 'required|max:50',
            'message' => 'required|max:255',
        ]);

        $question = CustomerQuestion::create($validated);

        return redirect()->route('contact.index')->with('success', 'Question submited succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
