<?php

namespace App\Http\Controllers;

use App\Models\Incidence;
use Illuminate\Http\Request;

class IncidenceController extends Controller
{
    public function __invoke()
    {
        //return view('Welcome');
        return view('home');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidence= Incidence::all();
        return view('incidences.index',['incidences'=>$incidence]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Incidence $incidence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incidence $incidence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incidence $incidence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incidence $incidence)
    {
        //
    }
}
