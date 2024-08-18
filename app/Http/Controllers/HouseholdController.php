<?php

namespace App\Http\Controllers;

use App\Models\Household;
use App\Models\UnionCouncil;
use Illuminate\Http\Request;

class HouseholdController extends Controller
{
    public function index()
    {
        $households = Household::with('unionCouncil')->get();
        return view('households.index', compact('households'));
    }

    public function create()
    {
        $unionCouncils = UnionCouncil::all();
        return view('households.create', compact('unionCouncils'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'union_council_id' => 'required|integer|exists:union_councils,id',
        ]);

        Household::create($request->all());

        return redirect()->route('households.index');
    }

    public function show(Household $household)
    {
        return view('households.show', compact('household'));
    }

    public function edit(Household $household)
    {
        $unionCouncils = UnionCouncil::all();
        return view('households.edit', compact('household', 'unionCouncils'));
    }

    public function update(Request $request, Household $household)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'union_council_id' => 'required|integer|exists:union_councils,id',
        ]);

        $household->update($request->all());

        return redirect()->route('households.index');
    }

    public function destroy(Household $household)
    {
        $household->delete();

    }
    public function getByUnionCouncil($union_council_id)
    {
        $households = Household::where('union_council_id', $union_council_id)->pluck('name', 'id');
        return response()->json($households);
    }
    public function assignHousehold(Request $request)
    {
        $household = Household::find($request->household_id);

        if ($household->polio_worker_id) {
            return back()->withErrors(['household' => 'This household is already assigned to another worker.']);
        }
        $household->polio_worker_id = auth()->user()->id;
        $household->save();

        return redirect()->back()->with('status', 'Household assigned successfully!');
    }
}