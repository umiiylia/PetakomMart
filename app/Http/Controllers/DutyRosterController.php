<?php

namespace App\Http\Controllers;

use App\Models\DutyRoster;
use Illuminate\Http\Request;

class DutyRosterController extends Controller
{
    public function index()
    {
        $dutyRosters = DutyRoster::all();
        return view('dutyroster.ViewDutyRoster', compact('dutyRosters'));
    }

    public function create()
    {
        return view('dutyroster.AddDutyRoster');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'endDate' => 'required|date',
            'status' => 'required',
        ]);

        DutyRoster::create($validatedData);

        return redirect()->route('dutyRoster.index')->with('success', 'Duty roster added successfully.');
    }

    public function edit($id)
    {
        $dutyRoster = DutyRoster::findOrFail($id);
        return view('dutyroster.EditDutyRoster', compact('dutyRoster'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'endDate' => 'required|date',
            'status' => 'required',
        ]);

        $dutyRoster = DutyRoster::findOrFail($id);
        $dutyRoster->update($validatedData);

        return redirect()->route('dutyRoster.index')->with('success', 'Duty roster updated successfully.');
    }

    public function delete($id)
    {
        $dutyRoster = DutyRoster::findOrFail($id);
        return view('dutyroster.DeleteDutyRoster', compact('dutyRoster'));
    }

    public function destroy($id)
    {
        $dutyRoster = DutyRoster::findOrFail($id);
        $dutyRoster->delete();

        return redirect()->route('dutyRoster.index')->with('success', 'Duty roster deleted successfully.');
    }
}
