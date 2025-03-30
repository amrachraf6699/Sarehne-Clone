<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

    public function getFullNameAttribute()
    {
        return $this->user->full_name;
    }

    public function getAvatarAttribute($value)
    {
        return optional($this->file)->path ?? "https://ui-avatars.com/api/?name={$this->full_name}&color=7F9CF5&background=EBF4FF";
    }
}
