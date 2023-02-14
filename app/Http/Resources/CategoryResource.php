<?php

namespace App\Http\Resources;
use App\Http\Resources\BaseResource;
class CategoryResource extends BaseResource{
    public function toArray($request){
        $data = parent::toArray($request);
        $data['category_name'] = $this->category_name;
        return $data;
    }
}