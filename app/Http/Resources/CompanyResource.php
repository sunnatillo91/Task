<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this-> company_id,
            'name' => $this-> name,
            'creator' => $this-> creator,
            'created_at' => $this-> created_at,
            'lists' => $this->lists,

        ];
    }
}
