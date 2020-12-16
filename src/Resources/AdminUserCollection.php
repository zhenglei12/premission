<?php

namespace Cherish\Ly\Resources;


use Illuminate\Http\Resources\Json\ResourceCollection;

class AdminUserCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection
        ];
    }
}