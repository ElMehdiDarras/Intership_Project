<?php

namespace App\Http\Controllers;

use App\Models\Boat;
use App\Models\Dock;
use App\Models\Crane;
use App\Models\Shift;
use Illuminate\Http\Request;

class BoatController extends Controller
{
    public function index()
    {
        // Get all boats from the database.
        $boats = Boat::all();
        return view('index', compact('boats'));
    }

    public function create()
{
    $docks = Dock::all();
    $cranes = Crane::all();
    $shifts = Shift::all();
    $boats =Boat::all();
    return view('boat.create', compact('docks', 'cranes', 'shifts','boats'));
}

public function store(Request $request)
{
    $boat = Boat::create($request->all());
    $boat->docks()->attach($request->docks);
    $boat->cranes()->attach($request->cranes);
    $boat->shifts()->attach($request->shifts);
    return redirect()->route('boats.index');
}


    public function show(Boat $boat)
    {
        return view('boats.show', compact('boat'));
    }

    public function edit(Boat $boat)
    {
        return view('boats.edit', compact('boat'));
    }

    public function update(Request $request, Boat $boat)
    {
        $boat->update($request->all());
        return redirect()->route('boats.index');
    }

    public function destroy(Boat $boat)
    {
        $boat->delete();
        return redirect()->route('boats.index');
    }
}