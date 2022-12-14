<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public $preserveKeys = true;
    
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this-> profile_id,
            'name' => $this-> name,
            'phone' => $this-> phone,
            'created_at' => $this-> created_at,
            'lists' => $this->lists,
        ];
    }
}
