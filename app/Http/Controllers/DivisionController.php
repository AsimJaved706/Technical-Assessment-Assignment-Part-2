<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Province;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::with('province')->get();
        return view('divisions.index', compact('divisions'));
    }

    public function create()
    {
        $provinces = Province::all();
        return view('divisions.create', compact('provinces'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'province_id' => 'required|integer|exists:provinces,id',
        ]);

        Division::create($request->all());

        return redirect()->route('divisions.index');
    }

    public function show(Division $division)
    {
        return view('divisions.show', compact('division'));
    }

    public function edit(Division $division)
    {
        $provinces = Province::all();
        return view('divisions.edit', compact('division', 'provinces'));
    }

    public function update(Request $request, Division $division)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'province_id' => 'required|integer|exists:provinces,id',
        ]);

        $division->update($request->all());

        return redirect()->route('divisions.index');
    }

    public function destroy(Division $division)
    {
        $division->delete();

        return redirect()->route('divisions.index');
    }

    public function getByProvince($provinceId)
    {
        $divisions = Division::where('province_id', $provinceId)->get();
        return response()->json($divisions);
    }
}
