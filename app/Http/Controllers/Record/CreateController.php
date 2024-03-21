<?php

namespace App\Http\Controllers\Record;

use App\Actions\Record\CreateAction;
use App\DTO\RecordDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Record\StoreRequest;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function store(StoreRequest $request, CreateAction $action)
    {
        $dto = RecordDTO::formRequest($request);
        $action->execute($dto);
    }
}
