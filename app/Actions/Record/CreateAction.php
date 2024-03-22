<?php

namespace App\Actions\Record;

use App\DTO\RecordDTO;
use App\Models\Record;
use App\Services\DbService;
use Illuminate\Database\Eloquent\Model;

class CreateAction
{
    private DbService $dbService;
    private Model $model;
    private StoreFileAction $fileAction;

    public function __construct(DbService $dbService, StoreFileAction $fileAction)
    {
        $this->dbService = $dbService;
        $this->model = new Record();
        $this->fileAction = $fileAction;
    }

    public function execute(RecordDTO $dto): Model
    {
        $this->fileAction->execute($dto);
        return $this->dbService->create($this->model, $dto);
    }
}
