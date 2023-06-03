<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMINISTRATOR = 1;
    const RECEPTIONIST = 2;
    const CONCIERGE = 3;
    const HOTEL_MANAGER = 4;
    const DIRECTOR_OF_PURCHASING = 5;
    const CLEANING_MANAGER = 6;
    const EVENT_PLANNER = 7;
    const RESERVATIONS_MANAGER = 8;
    const SALES_MANAGER = 9;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_users')->using(RoleUser::class);
    }
}
