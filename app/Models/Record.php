<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $guarded = 'false';
    protected $table = 'records';
    protected $fillable = [
        'lfm',
        'company',
        'phone',
        'email',
        'date of birth',
        'photo_url'
    ];
}
