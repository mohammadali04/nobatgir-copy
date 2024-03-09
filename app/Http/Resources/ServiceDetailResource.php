<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return ['days' =>$this->days,
        'service' => $this->service,
        'address' => $this->address,
        'all categories' => $this->categoryImages,
        'gallery images' => $this->galleryImages,
        'comments' => $this->comments,
        'friday' => $this->friday,
        'today' => $this->today,
    ];
    }
}
