<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Games::all();
        return view('crud.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'ram' => 'required',
            'cpu' => 'required',
            'hddspace' => 'required',
            'price' => 'required'
        ]);
        Games::create($data);
        return redirect()->route('crud.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Games::find($id);
        return view('crud.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Games::find($id);
        return view('crud.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required',
            'ram' => 'required',
            'cpu' => 'required',
            'hddspace' => 'required',
            'price' => 'required'
        ]);

        $game = Games::find($id);
        $game->name = $request->name;
        $game->ram = $request->ram;
        $game->cpu = $request->cpu;
        $game->hddspace = $request->hddspace;
        $game->price = $request->price;
        $game->save();

        return redirect()->route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function destroy($game)
    {   
        $gameFind = Games::find($game);
        $gameFind->delete();
        return redirect()->route('crud.index');
    }
}
