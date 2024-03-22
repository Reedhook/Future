<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function OkResponse(Model $model, string $alias = 'data'): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'status' => true,
            'body' => [
                $alias => $model
            ]
        ]);
    }
}
