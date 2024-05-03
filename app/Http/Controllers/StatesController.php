<?php

namespace App\Http\Controllers;

use App\Models\GymLocation;
use Illuminate\Http\Request;
use App\Models\State;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $states = State::all();

        if($request->has('state') && $request->input('state') != '0'){
            return redirect()->route('clubs.show', ['id' => $request->input('state')]);
        }

        return view('clubs.index', ['states' => $states]);
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
        $state = State::where('id', $id)->first();
        $locations = GymLocation::where('state_id', $state->id)->get();
        return view('clubs.show', ['locations' => $locations, 'state' => $state]);
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
