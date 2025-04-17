<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function coordinator()
    {
        return $this->belongsTo(User::class, 'coordinator_id');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

}
