<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::orderBy('id', 'desc')->paginate(8);
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ddd($request->all());
        $val_data = $request->validate([
            'title' => ['required', 'max:200'],
            'thumb' => ['nullable', 'max:255'],
            'cover' => ['nullable', 'max:255'],
            'desc' => ['nullable'],
        ]);

        Game::create($val_data);

        return redirect()->route('games.index')->with('message', "Hai aggiunto correttamente il gioco");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $val_data = $request->validate([
            'title' => ['required', 'max:200'],
            'thumb' => ['nullable', 'max:255'],
            'cover' => ['nullable', 'max:255'],
            'desc' => ['nullable'],
        ]);

        $game->update($val_data);

        return redirect()->route('games.index')->with('message', "Hai modificato correttamente il gioco: $game->title");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('message', "Hai eliminato correttamente il gioco: $game->title");
    }
}
