<?php

namespace App\Actions\Record;

use App\DTO\RecordDTO;
use Illuminate\Support\Facades\Storage;

class StoreFileAction
{
    public function execute(RecordDTO $dto): void
    {
        if (!Storage::exists('public/photos')) {
            Storage::makeDirectory('public/photos');
        } // Проверяем существует ли директория, если нет, то создаем

        $dto->photo->storeAs('public/photos', $dto->photo->getClientOriginalName()); // сохраняем фото
        $dto->photoUrl ="public/photos/{$dto->photo->getClientOriginalName()}";
    }

}
