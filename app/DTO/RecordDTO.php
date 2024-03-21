<?php

namespace App\DTO;

use DateTime;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

class RecordDTO
{
    public ?string $lfm;
    public ?string $company;
    public ?string $phone;
    public ?string $email;
    public ?DateTime $dateOfBirth;
    public ?UploadedFile $photo;

    public string $photoUrl;

    public function __construct(?string $lfm, ?string $company, ?string $phone, ?string $email, ?dateTime $dateOfBirth, ?UploadedFile $photo)
    {

        $this->lfm = $lfm;
        $this->company = $company;
        $this->phone = $phone;
        $this->email = $email;
        $this->dateOfBirth = $dateOfBirth;
        $this->photo = $photo;
        $this->photoUrl = null;
    }

    public static function formRequest(FormRequest $request): static
    {
        return new static (
            $request->get('lfm'),
            $request->get('company'),
            $request->get('phone'),
            $request->get('email'),
            $request->get('dateOfBirth'),
            $request->file('photo'),
        );
    }

    public function toArray(): array
    {
        $data = [];
        $fields = ['lfm', 'company', 'phone', 'email', 'dateOfBirth', 'photoUrl'];

        foreach ($fields as $field) {
            if ($this->$field != null) {
                $data[$field] = $this->$field;
            }
        }

        return $data;
    }
}
