<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        // This will be replaced with actual data once we have the database schema
        $ads = [
            [
                'id' => 1,
                'position' => 'Home Banner',
                'android_ad_id' => 'ca-app-pub-xxx/xxx',
                'ios_ad_id' => 'ca-app-pub-xxx/xxx',
                'android_status' => 'Active',
                'ios_status' => 'Active',
            ],
            [
                'id' => 2,
                'position' => 'Results Interstitial',
                'android_ad_id' => 'ca-app-pub-xxx/xxx',
                'ios_ad_id' => 'ca-app-pub-xxx/xxx',
                'android_status' => 'Inactive',
                'ios_status' => 'Active',
            ],
            // Add more dummy data as needed
        ];

        return view('ads.index', compact('ads'));
    }

    public function create()
    {
        return view('ads.create');
    }

    public function store(Request $request)
    {
        // Validation and storage logic will be added once we have the database schema
        return redirect()->route('ads.index')->with('success', 'Ad created successfully.');
    }

    public function edit($id)
    {
        // This will be replaced with actual data once we have the database schema
        $ad = [
            'id' => $id,
            'position' => 'Home Banner',
            'android_ad_id' => 'ca-app-pub-xxx/xxx',
            'ios_ad_id' => 'ca-app-pub-xxx/xxx',
            'android_status' => 'Active',
            'ios_status' => 'Active',
        ];

        return view('ads.edit', compact('ad'));
    }

    public function update(Request $request, $id)
    {
        // Validation and update logic will be added once we have the database schema
        return redirect()->route('ads.index')->with('success', 'Ad updated successfully.');
    }

    public function destroy($id)
    {
        // Delete logic will be added once we have the database schema
        return redirect()->route('ads.index')->with('success', 'Ad deleted successfully.');
    }
}
