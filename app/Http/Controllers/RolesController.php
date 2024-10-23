<?php

namespace App\Http\Controllers;

use App\Http\Resources\RolesResource;
use App\Http\Resources\RolesCollection;
use App\Http\Requests\StoreRolesRequest;
use App\Http\Requests\UpdateRolesRequest;
use App\Models\Roles;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new RolesCollection(Roles::paginate());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRolesRequest $request)
    {
        return new RolesResource(Roles::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Roles $roles)
    {
        return new RolesResource($roles);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRolesRequest $request, Roles $roles)
    {
        // $roles->update($request->all());
        \Log::info($roles); // Log the roles object
        $roles->update($request->validated());
    
        return response()->json([
            'message' => 'Role updated successfully',
            'data' => new RolesResource($roles)
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roles $roles)
    {
        $roles->delete();
        return response()->json(['message' => 'roles deleted successfully'], 200);

    }
}
