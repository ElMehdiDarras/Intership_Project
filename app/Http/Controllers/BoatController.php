<?php

namespace App\Http\Controllers;

use App\Models\Boat;
use Illuminate\Http\Request;

class BoatController extends Controller
{
    public function index()
    {
        // Get all boats from the database.
    $boats = Boat::all();

    // Return the boats view, with the list of boats.
    return view('boat', ['boats' => $boats]);  
    }

    public function create()
    {
        return view('boats.create');
    }

    public function store(Request $request)
    {
        $boat = Boat::create($request->all());
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