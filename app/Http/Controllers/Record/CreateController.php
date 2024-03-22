<?php

namespace App\Http\Controllers\Record;

use App\Actions\Record\CreateAction;
use App\DTO\RecordDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Record\StoreRequest;

class CreateController extends Controller
{
    public function store(StoreRequest $request, CreateAction $action): \Illuminate\Http\JsonResponse
    {
        $dto = RecordDTO::formRequest($request); //создаем слойку Dto
        $record = $action->execute($dto); // бизнес логику выносим в экшены
        return $this->OkResponse($record, 'record'); // возвращаем отредактированный ответ
    }
}
