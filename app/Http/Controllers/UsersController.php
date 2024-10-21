<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use App\Http\Resources\UsersCollection;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Models\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UsersCollection(Users::paginate());

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
    public function store(StoreUsersRequest $request)
    {
        return new UsersResource(Users::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $users)
    {
        return new UsersResource($users);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsersRequest $request, Users $users)
    {
        $users->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users)
    {
        $users->delete();
        return response()->json(['message' => 'user deleted successfully'], 200);
    }
}
