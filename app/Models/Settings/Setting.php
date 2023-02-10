<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Setting extends Model
{
    use HasFactory;

    public function logos():HasMany
    {
        return $this->hasMany(Logo::class);
    }

    public function socials():HasMany {
        return $this->hasMany(Social::class);
    }

    public function singleSettingItems():HasOne {
        return $this->hasOne(SingleSettingItem::class);
    }

    public function advantages():HasMany {
        return $this->hasMany(Advantage::class);
    }
}
