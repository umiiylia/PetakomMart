<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('profilee.ViewProfile', compact('users'));
    }

    public function create()
    {
        return view('profilee.AddProfile');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
           
        ]);

        User::create($validatedData);

        return redirect()->route('profile.index')->with('success', 'User added successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profilee.EditProfile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',

        ]);

        $user = User::findOrFail($id);
        $user->update($validatedData);

        return redirect()->route('profile.index')->with('success', 'User updated successfully.');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        return view('profilee.DeleteProfile', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('profile.index')->with('success', 'User deleted successfully.');
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');

        $users = User::where('name', 'like', "%$searchQuery%")
            ->orWhere('email', 'like', "%$searchQuery%")
            ->get();

        return view('profilee.SearchProfile', compact('users'));
    }
}
