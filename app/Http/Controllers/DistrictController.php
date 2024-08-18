<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::with('division')->get();
        return view('districts.index', compact('districts'));
    }

    public function create()
    {
        $divisions = Division::all();
        return view('districts.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'division_id' => 'required|integer|exists:divisions,id',
        ]);

        District::create($request->all());

        return redirect()->route('districts.index');
    }

    public function show(District $district)
    {
        return view('districts.show', compact('district'));
    }

    public function edit(District $district)
    {
        $divisions = Division::all();
        return view('districts.edit', compact('district', 'divisions'));
    }

    public function update(Request $request, District $district)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'division_id' => 'required|integer|exists:divisions,id',
        ]);

        $district->update($request->all());

        return redirect()->route('districts.index');
    }

    public function destroy(District $district)
    {
        $district->delete();

        return redirect()->route('districts.index');
    }

    public function getByDivision($divisionId)
    {
        $districts = District::where('division_id', $divisionId)->get();
        return response()->json($districts);
    }
}
