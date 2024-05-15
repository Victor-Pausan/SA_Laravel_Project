<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Member;
use App\Models\Feedback;
use App\Models\GymClass;
use App\Models\GymLocation;
use App\Models\MemberFeedback;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $locations = GymLocation::all();
        $classes = GymClass::all();
        $locationId = '0';

        if ($request->has('location')) {
            $locationId = $request->input('location');
            if ($locationId != 0) {
                $classes = GymClass::where('gym_location_id', $locationId)->get();
            }
        }
        return view('classes.index', ['locations' => $locations, 'classes' => $classes, 'locationId' => $locationId]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = GymLocation::all();
        $classes = GymClass::all();
        return view('classes.create', ['locations' => $locations, 'classes' => $classes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedInput = $request->validate([
            'class-name' => 'required|string',
            'location' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'duration' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        $location = GymLocation::find($validatedInput['location']);

        $class = new GymClass;
        $class->name = $validatedInput['class-name'];
        $class->gymLocation()->associate($location);
        $class->date = $validatedInput['date'];
        $class->time = $validatedInput['time'];
        $class->duration = $validatedInput['duration'];
        $class->trainer_name = $validatedInput['name'];
        $class->description = $validatedInput['description'];
        $class->picture_path = $validatedInput['class-name'] . '.png';
        $class->save();

        return redirect()->route('admin.create')->with('success', 'The class was added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class = GymClass::find($id);

        return view('classes.show', ['class' => $class]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $locations = GymLocation::all();
        $class = GymClass::find($id);

        return view('classes.edit', ['class' => $class, 'locations' => $locations]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedInput = $request->validate([
            'class-name' => 'required|string',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        $class = GymClass::findOrFail($id);
        $location = GymLocation::find($validatedInput['location']);

        $class->update([
            'name' => $validatedInput['class-name'],
            'date' => $validatedInput['date'],
            'time' => $validatedInput['time'],
            'duration' => $validatedInput['duration'],
            'trainer_name' => $validatedInput['name'],
            'description' => $validatedInput['description'],
        ]);

        $class->gymLocation()->dissociate();
        $class->gymLocation()->associate($location);

        return redirect()->route('admin.create')->with('warning', 'Class updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = GymClass::findOrFail($id);

        $memberFeedbacks = $class->memberFeedbacks;

        foreach($memberFeedbacks as $memberFeedback){
            $memberFeedback->feedback->delete();
            $memberFeedback->delete();
        }
        
        $class->delete();

        return redirect()->route('admin.create')->with('danger', 'Class deleted succesfully!');
    }
}
