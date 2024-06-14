<?php

namespace App\Http\Controllers;

use App\Models\Photographer;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        $photographers = Photographer::all();
        return view('our-team.index', compact('photographers'));
    }

    public function create()
    {
        return view('our-team.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'portfolio_link' => 'required|url',
        ]);

        Photographer::create($validatedData);

        return redirect()->route('our-team.index')->with('success', 'Photographer added successfully.');
    }

    public function edit(Photographer $photographer)
    {
        return view('our-team.edit', compact('photographer'));
    }

    public function update(Request $request, Photographer $photographer)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'portfolio_link' => 'required|url',
        ]);

        $photographer->update($validatedData);

        return redirect()->route('our-team.index')->with('success', 'Photographer updated successfully.');
    }

    public function destroy(Photographer $photographer)
    {
        $photographer->delete();

        return redirect()->route('our-team.index')->with('success', 'Photographer deleted successfully.');
    }
}
