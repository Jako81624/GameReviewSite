<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\KeyGetRequest;
use App\Http\Controllers\Controller;
use App\Gamekey;

class KeyController extends Controller
{
    public function index($id = null)
    {
    	$data['game'] = false;
    	if($id)
    	{
    		$data['game'] = true;
    		$data['id'] = $id;
    	}
    	return view('pages.keysindex', $data);
    }

    public function saveKey(Request $request)
    {
    	$game = new Gamekey;
    	$game->gamekey = $request->input('gamekey');
    	$game->taken = false;
    	$game->save();
    	return $game;
    }

    public function retrieveKey(KeyGetRequest $request, $id)
    {
    	return $game = Gamekey::findOrFail($id);
    }
}
