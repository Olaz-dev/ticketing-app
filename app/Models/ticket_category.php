<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket_category extends Model
{
    use HasFactory;

    public function ticket()
    {
        $this->hasMany(Ticket::class);
    }
}
