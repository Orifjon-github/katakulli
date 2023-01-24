<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Setting extends Model
{
    use HasFactory;

    public function logos():HasMany
    {
        return $this->hasMany(Logo::class);
    }
    public function phones():HasMany {
        return $this->hasMany(Phone::class);
    }
    public function socials():HasMany {
        return $this->hasMany(Social::class);
    }
}
