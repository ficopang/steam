<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SteamController extends Controller
{
    public function showHomePage() {
        $featureds = DB::select(DB::raw('SELECT * FROM games ORDER BY rand() LIMIT 5'));
        $specials = DB::select(DB::raw('SELECT * FROM games ORDER BY discount DESC LIMIT 6'));
        $trendings = DB::select(DB::raw('SELECT * FROM games ORDER BY created_at DESC LIMIT 5'));
        $topsellers = DB::select(DB::raw('SELECT * FROM games ORDER BY seller DESC LIMIT 5'));
        $frees = DB::select(DB::raw('SELECT * FROM games WHERE price = 0 LIMIT 5'));

        return view('home', compact('featureds', 'specials', 'trendings', 'topsellers', 'frees'));
    }

    public function showPointShop()
    {
        $items = DB::select(DB::raw('SELECT * FROM items'));

        return view('point-shop', compact('items'));
    }

    public function showGameDetail($id)
    {
        // TODO (NOT FINISH)
        $game = DB::select(DB::raw('SELECT * FROM games WHERE id="'.$id.'"'));
        $img = DB::select(DB::raw('SELECT * FROM `game_tag_details` JOIN tags ON tag_id = tags.id WHERE game_id = "' . $id . '"'));

        return view('detail', compact('game'));
    }
}
