<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function imageable(): MorphTo
    {
        return $this->morphTo(); // con esta funcion el framework reconocera con que modelo esta trabajando
    }
}
