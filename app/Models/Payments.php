<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $table = "payments";
    protected $primaryKey = "id";
    
    public function reservation()
    {
        return $this->belongsTo(Reservations::class, 'reservation_id');
    }
    public function guest()
    {
        return $this->belongsTo(guests::class, 'reservation_id');
    }
    
}
