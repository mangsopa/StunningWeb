<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class HistoryStunning extends Model
{
    use Uuid, HasFactory;

    protected $table = 'history_stunnings'; 
    
    protected $primaryKey = 'id'; 

    protected $fillable = ['h_berat_badan', 'h_tinggi_badan', 'stunning_id'];
}
