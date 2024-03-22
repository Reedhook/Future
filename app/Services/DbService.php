<?php

namespace App\Services;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class DbService
{
    public function create(Model $model, $dto):Model
    {
        $data = [];
        foreach ($dto->toArray() as $field => $value) {
            $data[$field] = $value;
            Log::info($data[$field]);
        }

        return $model::create($data) ?: throw new Exception('Ошибка сервера', 500);
    }
}
