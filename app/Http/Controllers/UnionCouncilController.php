<?php

namespace App\Http\Controllers;

use App\Models\UnionCouncil;
use App\Models\Tehsil;
use Illuminate\Http\Request;

class UnionCouncilController extends Controller
{
    public function index()
    {
        $unionCouncils = UnionCouncil::with('tehsil')->get();
        return view('union-councils.index', compact('unionCouncils'));
    }

    public function create()
    {
        $tehsils = Tehsil::all();
        return view('union-councils.create', compact('tehsils'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tehsil_id' => 'required|integer|exists:tehsils,id',
        ]);

        UnionCouncil::create($request->all());

        return redirect()->route('union-councils.index');
    }

    public function show(UnionCouncil $unionCouncil)
    {
        return view('union-councils.show', compact('unionCouncil'));
    }

    public function edit(UnionCouncil $unionCouncil)
    {
        $tehsils = Tehsil::all();
        return view('union-councils.edit', compact('unionCouncil', 'tehsils'));
    }

    public function update(Request $request, UnionCouncil $unionCouncil)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tehsil_id' => 'required|integer|exists:tehsils,id',
        ]);

        $unionCouncil->update($request->all());

        return redirect()->route('union-councils.index');
    }

    public function destroy(UnionCouncil $unionCouncil)
    {
        $unionCouncil->delete();

        return redirect()->route('union-councils.index');
    }

    public function getByTehsil($tehsilId)
    {
        $unionCouncils = UnionCouncil::where('tehsil_id', $tehsilId)->get();
        return response()->json($unionCouncils);
    }
}
