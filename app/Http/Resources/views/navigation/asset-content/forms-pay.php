<?php

namespace App\Http\Resources\views\navigation\asset-content;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class forms-pay extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
