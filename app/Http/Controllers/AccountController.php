<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        return view('account.index', ['user' => $user]);
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
        //
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
    public function edit(Request $request)
    {
        $user = $request->user();

        $state = State::find($user->member->gymLocation->state_id);

        return view('account.membership', ['member' => $user->member, 'state' => $state]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedInput = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $user = $request->user();

        $user->name = $validatedInput['name'];
        $user->email = $validatedInput['email'];
        $user->save();

        $state = State::find($user->member->gymLocation->state_id);

        return redirect()->route('account', ['member' => $user->member, 'state' => $state])->with('success', 'Account updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $user = $request->user();

        $user->delete();

        return redirect()->route('home')->with('success', 'Account deleted successfully!');
    }
}
