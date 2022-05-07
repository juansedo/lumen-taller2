<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PokeneaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->resource['id'],
            'name' => $this->resource['name'],
            'height' => $this->resource['height'],
            'skill' => $this->resource['skill'],
        ];
    }
}
