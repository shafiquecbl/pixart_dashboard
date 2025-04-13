<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // This will be replaced with actual data once we have the database schema
        $users = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'role' => 'Admin',
                'last_login' => '2024-04-13 10:30:00',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'role' => 'Editor',
                'last_login' => '2024-04-13 09:45:00',
                'status' => 'Active',
            ],
            // Add more dummy data as needed
        ];

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validation and storage logic will be added once we have the database schema
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        // This will be replaced with actual data once we have the database schema
        $user = [
            'id' => $id,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'role' => 'Admin',
            'last_login' => '2024-04-13 10:30:00',
            'status' => 'Active',
        ];

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validation and update logic will be added once we have the database schema
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        // Delete logic will be added once we have the database schema
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
