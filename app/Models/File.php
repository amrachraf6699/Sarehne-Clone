<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function fileable()
    {
        return $this->morphTo();
    }

    public function getPathAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
