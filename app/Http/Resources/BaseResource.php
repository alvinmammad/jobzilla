<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class BaseResource extends JsonResource{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at->toIso8601String(),
            'updated_at' => $this->updated_at->toIso8601String(),
        ];
        // $data = parent::toArray($request);
        // unset($data['id']);
        // unset($data['created_at']);
        // unset($data['updated_at']);
        // return $data;
        // dd($data);

    }
}