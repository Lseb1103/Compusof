<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PedidoCollection extends ResourceCollection
{

    public function toArray(Request $request): array
    {
        $request = new Request();
        return parent::toArray($request);
    }
}
