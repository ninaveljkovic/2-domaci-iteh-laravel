<?php

namespace App\Http\Resources;

use App\Models\Frizer;
use App\Models\Frizura;
use Illuminate\Http\Resources\Json\JsonResource;

class TerminResource extends JsonResource
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
            'frizer'=> Frizer::find($this->resource->frizer_id),
            'frizura'=> Frizura::find($this->resource->frizura_id),
            'datum'=>$this->resource->datum, 
            'vreme'=>$this->resource->vreme, 
        ];
    }
}
