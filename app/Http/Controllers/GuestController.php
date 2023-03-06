<?php

namespace App\Http\Controllers;



use App\Models\Guest;
use Illuminate\Http\Request;


class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('guests.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('guests.create');
        return view('guests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $guest = new Guest();


        $guest->fill($data);
        $guest->save();
        // per tornare alla route
        return to_route('guests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guest = Guest::findOrFail($id);
        return view('guests.show', compact('guest'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        return view('guests.edit', compact('guest'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guest $guest)
    {
        $data = $request->all();

        $guest->fill($data);

        $guest->save();

        return to_route('guests.show', $guest->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        $guest->delete();
        return to_route('guests.index');
    }
}
