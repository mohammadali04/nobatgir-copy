<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class bookTurnResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'turn detail' => $this->turnDetail,
            'user' => $this->user,
            'service' => $this->service,
            'date' => $this->date,
        ];
    }
}
