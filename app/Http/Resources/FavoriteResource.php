<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'device_id' => $this->device_id,
            'recipe' => $this->whenLoaded('recipe', function () {
                return [
                    'id' => $this->recipe->id,
                    'title' => $this->recipe->title,
                    'ingredients' => $this->recipe->ingredients,
                    'steps' => $this->recipe->steps,
                ];
            }),
            'created_at' => $this->created_at,
        ];
    }
}
