<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Player;

class PlayersController extends Controller
{
    public function show($playerId)
    {
        $player = Player::find($playerId);
        return view('nba.player', compact(['player']));
    }
}