<?php

namespace App\Http\Controllers;

use App\Models\HouseholdMember;
use App\Models\Household;
use Illuminate\Http\Request;

class HouseholdMemberController extends Controller
{
    public function index()
    {
        $members = HouseholdMember::with('household')->get();
        return view('household-members.index', compact('members'));
    }

    public function create()
    {
        $households = Household::all();
        return view('household-members.create', compact('households'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'household_id' => 'required|integer|exists:households,id',
        ]);

        HouseholdMember::create($request->all());

        return redirect()->route('household-members.index');
    }

    public function show(HouseholdMember $householdMember)
    {
        return view('household-members.show', compact('householdMember'));
    }

    public function edit(HouseholdMember $householdMember)
    {
        $households = Household::all();
        return view('household-members.edit', compact('householdMember', 'households'));
    }

    public function update(Request $request, HouseholdMember $householdMember)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'household_id' => 'required|integer|exists:households,id',
        ]);

        $householdMember->update($request->all());

        return redirect()->route('household-members.index');
    }

    public function destroy(HouseholdMember $householdMember)
    {
        $householdMember->delete();

        return redirect()->route('household-members.index');
    }
}
