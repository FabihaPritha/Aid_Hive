<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{


    public function index()
    {
        $sectors = Sector::all();
        return view('sectors.index', compact('sectors'));
    }

    public function create()
    {
        return view('sectors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Sector::create($request->all());
        return redirect()->route('sectors.index')->with('success', 'Sector created!');
    }

    public function edit(Sector $sector)
    {
        return view('sectors.edit', compact('sector'));
    }

    public function update(Request $request, Sector $sector)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $sector->update($request->all());
        return redirect()->route('sectors.index')->with('success', 'Sector updated!');
    }

    public function destroy(Sector $sector)
    {
        $sector->delete();
        return redirect()->route('sectors.index')->with('success', 'Sector deleted!');
    }

}
