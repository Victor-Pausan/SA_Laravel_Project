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
            return 'Class not found';
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

        $member = $request->user()->member;

        $feedback = new Feedback;

        $feedback->comment = $validatedInput['comment'];
        $feedback->rating = $validatedInput['rate'];
        $feedback->save();

        $feedback->memberFeedbacks()->save($memberFeedback);
        $class->memberFeedbacks()->save($memberFeedback);
        $member->memberFeedbacks()->save($memberFeedback);

        return redirect()->route('classes.show', ['id' => $classId])->with('success', 'Feedback added succesfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $user = $request->user();

        $member = $user->member;

        $memberFeedbacks = $member->memberFeedbacks;

        return view('feedback.show', ['memberFeedbacks' => $memberFeedbacks]);
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
        $memberFeedback = MemberFeedback::find($id);

        $feedback = $memberFeedback->feedback;
        $feedback->delete();

        $memberFeedback->delete();

        return redirect()->route('account.feedbacks')->with('success', 'Feedback deleted successfully!');
    }
}
