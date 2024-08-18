<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UnionCouncil;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $workers = User::where('role', 'polio_worker')->with('assignments.unionCouncil')->get();
        return view('admin.workers.index', compact('workers'));
    }
    public function assignWorkerForm()
    {
        $workers = User::where('role', 'polio_worker')->get();
        $unionCouncils = UnionCouncil::all();
        return view('admin.workers.assign', compact('workers', 'unionCouncils'));
    }
    
    public function assignWorker(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'union_council_id' => 'required|exists:union_councils,id',
        ]);
    
        Assignment::create($data);
    
        return redirect()->route('admin.index')->with('success', 'Worker assigned successfully.');
    }
    
}
