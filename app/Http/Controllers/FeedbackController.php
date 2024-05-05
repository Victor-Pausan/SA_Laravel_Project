<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\GymClass;
use App\Models\MemberFeedback;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
        if($request->has('class')){
            $classId = $request->input('class');
            $class = GymClass::findOrFail($classId);
            return view('feedback.create', ['class' => $class]);
        }else {
            return "Class not found.";
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $classId)
    {
        $validatedInput = $request->validate([
            'comment' => 'required|string',
            'rate' => 'required|int',
        ]);

        $memberFeedback = new MemberFeedback;

        $class = GymClass::find($classId);

        $member = $request->user();

        $feedback = new Feedback;

        $feedback->memberFeedback()->associate($memberFeedback);
        $class->memberFeedback()->associate($memberFeedback);
        $member->memberFeedback()->associate($memberFeedback);

        $feedback->comment = $validatedInput['comment'];
        $feedback->rating = $validatedInput['rate'];

        return redirect()->route('feedback.create')->with('success', 'Feedback added succesfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
