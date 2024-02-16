<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecialiteMedical;
use App\Models\Medicament;


class SpecialityController extends Controller
{
    public function index()
    {
        $specialities = SpecialiteMedical::all();

        return view('welcome');

    }
    public function docDashboard()
    {
        // Retrieve all medication names
        $medicaments = Medicament::all();

        // Retrieve all speciality names
        $specialities = SpecialityMedical::all();

        // Return the dashboard view with both 'medicaments' and 'specialities' variables
        return view('dashboard', compact('medicaments', 'specialities'));
    }
    public function dashboard()
    {
        // Retrieve all medication names
        $medicaments = Medicament::all();

        // Retrieve all speciality names
        $specialities = SpecialiteMedical::all();

        // Return the dashboard view with both 'medicaments' and 'specialities' variables
        return view('dashboard', compact('medicaments', 'specialities'));
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
        $request->validate([
            'speciality' => 'required|string|max:255',
        ]);
    
        $speciality = new SpecialiteMedical;
        $speciality->name = $request->speciality;
        $speciality->save();
    
        return back()->with('success', 'speciality added successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $name)
    {
        //
        $request->validate([
            'speciality' => 'required|string|max:255',
        ]);
    
        $speciality = SpecialiteMedical::where('name', $name)->firstOrFail();
        $speciality->name = $request->speciality;
        $speciality->save();
    
        return back()->with('success', 'Spécialité mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $speciality = SpecialiteMedical::findOrFail($id);
        $speciality->delete();
    
        return back()->with('success', 'Speciality deleted successfully.');
    }}
