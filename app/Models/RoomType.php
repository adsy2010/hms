<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomTypePrices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RoomTypePrice::class);
    }
}
