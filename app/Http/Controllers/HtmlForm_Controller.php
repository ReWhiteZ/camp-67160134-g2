<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlForm_Controller extends Controller
{
    public function index()
    {
        return view('html-form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'birthday' => 'required|date',
            'age' => 'required|integer|min:1|max:120',
            'gender' => 'required|in:male,female,other',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required|string',
            'color' => 'required|string',
            'music' => 'required|string',
            'terms' => 'required|accepted'
        ]);

        return view('form-data', [
            'fname' => $validated['fname'],
            'lname' => $validated['lname'],
            'birthday' => $validated['birthday'],
            'age' => $validated['age'],
            'gender' => $validated['gender'],
            'address' => $validated['address'],
            'color' => $validated['color'],
            'music' => $validated['music']
        ]);
    }
}