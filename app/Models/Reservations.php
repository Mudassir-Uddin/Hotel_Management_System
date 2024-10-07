<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $table = "reservations";
    protected $primaryKey = "id";
    
    public function guests()
    {
        return $this->belongsTo(guests::class, 'guest_id');
    }
    public function rooms()
    {
        return $this->belongsTo(rooms::class, 'room_id');
    }
}
