<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    
    protected $table = "Staff";
    protected $primaryKey = "id";
    
    public function Users()
    {
        return $this->belongsTo(Users::class, 'User_id');
    }
}
