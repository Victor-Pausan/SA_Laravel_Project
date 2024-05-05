<?php

namespace App\Http\Controllers;

use App\Models\GymLocation;
use App\Models\Member;
use App\Models\Subscription;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('memberships.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $subscription = Subscription::findOrFail($id);
        $locations = GymLocation::all();

        return view('memberships.create', ['subscription' => $subscription, 'locations' => $locations]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedInput = $request->validate([
            'location' => 'required',
            'subscription' => 'required',
        ]);

        $user = $request->user();

        $location = GymLocation::find($validatedInput['location']);

        $subscription = Subscription::find($validatedInput['subscription']);

        $member = new Member;
        $member->user()->associate($user);
        $member->subscription()->associate($subscription);
        $member->gymLocation()->associate($location);

        $member->membership_start_date = date('Y-m-d');
        $member->membership_end_date = date('Y-m-d', strtotime('+1 month'));
        $member->save();

        return redirect()->route('membership.show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('memberships.success');
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
