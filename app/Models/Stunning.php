<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Stunning extends Model
{
    use Uuid, HasFactory;

    protected $table = 'stunning'; 
    
    protected $primaryKey = 'id'; 

    protected $fillable = ['name', 'gender', 'tanggal_lahir', 'nama_ayah', 'nama_ibu', 'berat_badan', 'tinggi_badan', 'asupan_gizi', 'status_kesehatan'];

    protected $casts = ['status_kesehatan' => 'boolean'];

    public function historyStunnings()
    {
        return $this->hasMany(HistoryStunning::class, 'stunning_id');
    }
}
