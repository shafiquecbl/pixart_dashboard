<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspirationController extends Controller
{
    public function index()
    {
        // This will be replaced with actual data once we have the database schema
        $inspirations = [
            [
                'id' => 1,
                'image' => 'https://picsum.photos/800/600',
                'prompt' => 'A beautiful sunset over a mountain landscape with vibrant colors and dramatic clouds',
            ],
            [
                'id' => 2,
                'image' => 'https://picsum.photos/800/600',
                'prompt' => 'A futuristic cityscape with flying cars and neon lights reflecting off glass buildings',
            ],
            // Add more dummy data as needed
        ];

        return view('inspirations.index', compact('inspirations'));
    }

    public function create()
    {
        return view('inspirations.create');
    }

    public function store(Request $request)
    {
        // Validation and storage logic will be added once we have the database schema
        return redirect()->route('inspirations.index')->with('success', 'Inspiration created successfully.');
    }

    public function edit($id)
    {
        // This will be replaced with actual data once we have the database schema
        $inspiration = [
            'id' => $id,
            'image' => 'https://picsum.photos/800/600',
            'prompt' => 'A beautiful sunset over a mountain landscape',
        ];

        return view('inspirations.edit', compact('inspiration'));
    }

    public function update(Request $request, $id)
    {
        // Validation and update logic will be added once we have the database schema
        return redirect()->route('inspirations.index')->with('success', 'Inspiration updated successfully.');
    }

    public function destroy($id)
    {
        // Delete logic will be added once we have the database schema
        return redirect()->route('inspirations.index')->with('success', 'Inspiration deleted successfully.');
    }
}
