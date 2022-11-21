<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Models\Player;
use Illuminate\Http\Response;

class PlayerController extends Controller
{

    public function store(StorePlayerRequest $request)
    {
        Player::create($request->all());

        return response()->json([
            'status' => 201,
            'message' => 'Successfully added player data',
            'data' => $request->all()
        ], Response::HTTP_CREATED);
    }

    public function update(UpdatePlayerRequest $request, Player $player)
    {
        Player::find($player->id)->update($request->all());

        return response()->json([
            'status' => 200,
            'message' => 'successfully updated player data',
            'data' => $request->all()
        ], Response::HTTP_OK);
    }

    public function destroy(Player $player)
    {
        Player::find($player->id)->delete();

        return response()->json([
            'status' => 200,
            'message' => 'successfully deleted player data',
            'data' => [
                'id' => $player->id
            ]
        ], Response::HTTP_OK);
    }
}
