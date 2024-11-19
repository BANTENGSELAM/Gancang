<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PopulationData;

class PopulationDataController extends Controller
{
    public function index()
    {
        $data = PopulationData::all();
        return view('population.index', compact('data'));
    }

    public function masyarakat()
    {
        $data = PopulationData::all();
        return view('masyarakat', compact('data'));
    }

    public function create()
    {
        return view('population.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|integer|unique:population_data,year',
            'children' => 'required|integer',
            'teenagers' => 'required|integer',
            'adults' => 'required|integer',
            'elderly' => 'required|integer',
        ]);

        PopulationData::create($request->all());
        return redirect()->route('population.index');
    }

    public function edit(PopulationData $populationData)
    {
        return view('population.edit', compact('populationData'));
    }

    public function update(Request $request, PopulationData $populationData)
    {
        $request->validate([
            'children' => 'required|integer',
            'teenagers' => 'required|integer',
            'adults' => 'required|integer',
            'elderly' => 'required|integer',
        ]);

        $populationData->update($request->all());
        return redirect()->route('population.index');
    }

    public function destroy(PopulationData $populationData)
    {
        $populationData->delete();
        return redirect()->route('population.index');
    }

}
