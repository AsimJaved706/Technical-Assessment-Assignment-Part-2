<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProvinceController,
    DivisionController,
    DistrictController,
    TehsilController,
    UnionCouncilController,
    HouseholdController,
    HouseholdMemberController,
    AssignmentController,
    AdminController
};

// Routes for CRUD operations on administrative units
Route::resource('provinces', ProvinceController::class);
Route::resource('divisions', DivisionController::class);
Route::resource('districts', DistrictController::class);
Route::resource('tehsils', TehsilController::class);
Route::resource('union-councils', UnionCouncilController::class);
Route::resource('households', HouseholdController::class);
Route::resource('household-members', HouseholdMemberController::class);

// Routes for managing assignments of polio workers
Route::resource('assignments', AssignmentController::class);

// AJAX routes for dynamic dropdowns (cascading selects)
Route::get('/get-divisions/{province}', [DivisionController::class, 'getByProvince'])->name('divisions.byProvince');
Route::get('/get-districts/{division}', [DistrictController::class, 'getByDivision'])->name('districts.byDivision');
Route::get('/get-tehsils/{district}', [TehsilController::class, 'getByDistrict'])->name('tehsils.byDistrict');
Route::get('/get-union-councils/{tehsil}', [UnionCouncilController::class, 'getByTehsil'])->name('union-councils.byTehsil');
Route::get('/get-households/{unionCouncil}', [HouseholdController::class, 'getByUnionCouncil'])->name('households.byUnionCouncil');
Route::post('/assign-household', [AssignmentController::class, 'assignHousehold'])->name('assign-household');
Route::get('/assign-household/view', [AssignmentController::class, 'assignHouseholdView'])->name('assign-household-view');


// Admin routes protected by 'role:admin' middleware
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/assign-worker', [AdminController::class, 'assignWorkerForm'])->name('admin.assignWorkerForm');
    Route::post('/admin/assign-worker', [AdminController::class, 'assignWorker'])->name('admin.assignWorker');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route for viewing the assignment form, specifically for polio workers

