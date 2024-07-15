<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\UserLocation;
use Illuminate\Http\Request;

class GeoQuery extends Controller
{
    //
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        UserLocation::updateOrCreate(
            ['user_id' => $request->user_id],
            $validated);

        return response()->json(['message' => 'Data stored successfully']);
    }
}
