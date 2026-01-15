<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Players::latest()->get();
        return view('players.index', compact('players'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|max:30',
            'phone' => 'required|integer',
            'password' => 'required|max:30',
        ]);

        Players::create($data);
        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Players $players)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Players $players)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Players $player)
    {
        $data = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|max:30',
            'phone' => 'required|integer',
            'password' => 'required|max:30',
        ]);

        $player->update($data);
        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Players $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}
