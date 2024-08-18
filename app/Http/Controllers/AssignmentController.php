<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\User;
use App\Models\Household;
use App\Models\UnionCouncil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::with('user', 'unionCouncil')->get();
        return view('assignments.index', compact('assignments'));
    }

    public function create()
    {
        $users = User::where("role","polio_worker")->get(); 
        $unionCouncils = UnionCouncil::all();
        return view('assignments.create', compact('users', 'unionCouncils'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'union_council_id' => 'required|integer|exists:union_councils,id',
        ]);

        Assignment::create($request->all());

        return redirect()->route('assignments.index');
    }

    public function show(Assignment $assignment)
    {
        return view('assignments.show', compact('assignment'));
    }

    public function edit(Assignment $assignment)
    {
        $users = User::where("role","polio_worker")->get(); 
        $unionCouncils = UnionCouncil::all();
        return view('assignments.edit', compact('assignment', 'users', 'unionCouncils'));
    }

    public function update(Request $request, Assignment $assignment)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'union_council_id' => 'required|integer|exists:union_councils,id',
        ]);

        $assignment->update($request->all());

        return redirect()->route('assignments.index');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();

        return redirect()->route('assignments.index');
    }

  
    public function assignHouseholdView()
    {
        $user = Auth::user();

        if ($user->role !== 'polio_worker') {
            return redirect()->route('home')->withErrors('Unauthorized access.');
        }

        $assignedUnionCouncils = $user->assignments->pluck('union_council_id');

        $unionCouncils = UnionCouncil::whereIn('id', $assignedUnionCouncils)->get();

        return view('assign_household', compact('unionCouncils'));
    }

    public function getHouseholds($union_council_id)
    {
        $user = Auth::user();

        if (!$user->assignments->pluck('union_council_id')->contains($union_council_id)) {
            return response()->json([], 403); // Forbidden
        }

        $households = Household::where('union_council_id', $union_council_id)->pluck('name', 'id');
        return response()->json($households);
    }

    public function assignHousehold(Request $request)
    {
        $user = Auth::user();

        $household = Household::find($request->household_id);
        if (!$user->assignments->pluck('union_council_id')->contains($household->union_council_id)) {
            return back()->withErrors(['household' => 'Unauthorized access to assign this household.']);
        }

        if ($household->polio_worker_id) {
            return back()->withErrors(['household' => 'This household is already assigned to another worker.']);
        }

        $household->polio_worker_id = $user->id;
        $household->save();

        return redirect()->back()->with('status', 'Household assigned successfully!');
    }
    
}
