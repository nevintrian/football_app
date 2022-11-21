<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Response;

class TeamController extends Controller
{

    public function store(StoreTeamRequest $request)
    {
        Team::create($request->all());
        return response()->json([
            'status' => 201,
            'message' => 'successfully added team data',
            'data' => $request->all()
        ], Response::HTTP_CREATED);
    }

    public function update(UpdateTeamRequest $request, Team $team)
    {
        Team::find($team->id)->update($request);

        return response()->json([
            'status' => 200,
            'message' => 'successfully updated team data',
            'data' => $request->all()
        ], Response::HTTP_OK);
    }

    public function destroy(Team $team)
    {
        Team::find($team->id)->delete();

        return response()->json([
            'status' => 200,
            'message' => 'successfully deleted team data',
            'data' => [
                'id' => $team->id
            ]
        ]);
    }
}
