<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FavoriteRequest;
use App\Http\Resources\FavoriteResource;
use App\Models\Favorite;
use App\Models\Recipe;
use Illuminate\Http\JsonResponse;

class FavoriteController extends Controller
{
    public function index(string $deviceId)
    {
        $favorites = Favorite::with('recipe:id,title,ingredients,steps')
            ->where('device_id', $deviceId)
            ->latest('id')
            ->get();

        return FavoriteResource::collection($favorites);
    }

    public function store(FavoriteRequest $request)
    {
        $data = $request->validated();

        $favorite = Favorite::firstOrCreate($data);

        $favorite->load('recipe:id,title,ingredients,steps');

        return (new FavoriteResource($favorite))
            ->response();
    }

    public function destroy(string $deviceId, Recipe $recipe): JsonResponse
    {
        $deleted = Favorite::where('device_id', $deviceId)
            ->where('recipe_id', $recipe->id)
            ->delete();

        return $deleted
            ? response()->json(['message' => 'Recipe removed from favorites successfully!'], 200)
            : response()->json(['message' => 'not_found'], 404);
    }
}
