<?php

namespace App\Http\Controllers;

use App\Models\HouseListing;
use Illuminate\Http\Request;

class HouseListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $HouseListing = HouseListing::query()->orderBy('created_at', 'desc')->paginate(10);
        return view('HouseListing.index', ['HouseListing' => $HouseListing]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $HouseListing = new HouseListing(); // Assign a value to $HouseListing
        return view('HouseListing.create', ['HouseListing' => $HouseListing]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HouseListing $houseListing)
    {
        return view('HouseListing.show', ['HouseListing' => $houseListing]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HouseListing $houseListing)
    {
        return view('HouseListing.edit', ['HouseListing' => $houseListing]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HouseListing $houseListing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HouseListing $houseListing)
    {
        //
    }
}