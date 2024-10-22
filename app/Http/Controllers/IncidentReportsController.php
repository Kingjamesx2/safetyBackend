<?php

namespace App\Http\Controllers;

use App\Http\Resources\IncidentReportsResource;
use App\Http\Resources\IncidentReportsCollection;
use App\Http\Requests\StoreIncidentReportsRequest;
use App\Http\Requests\UpdateIncidentReportsRequest;
use App\Models\IncidentReports;

class IncidentReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new IncidentReportsCollection(IncidentReports::paginate());
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
    public function store(StoreIncidentReportsRequest $request)
    {
        return new IncidentReportsResource(IncidentReports::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(IncidentReports $incidentReports)
    {
        return new IncidentReportsResource($incidentReports);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncidentReports $incidentReports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIncidentReportsRequest $request, IncidentReports $incidentReports)
    {
        $incidentReports->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncidentReports $incidentReports)
    {
        $incidentReports->delete();
        return response()->json(['message' => 'incidentReports deleted successfully'], 200);
    }
}
