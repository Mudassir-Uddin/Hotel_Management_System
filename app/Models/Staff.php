<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    
    protected $table = "Staff";
    protected $primaryKey = "id";
    
    public function user()
    {
        return $this->belongsTo(user::class, 'User_id');
    }
}
