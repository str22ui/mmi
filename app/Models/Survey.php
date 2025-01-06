<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $table = 'survey';

    protected $fillable = [
        'nama_konsumen',
        'no_hp',
        'email',
        'domisili',
        'pekerjaan',
        'nama_kantor',
        'perumahan',
        'tanggal_janjian',
        'waktu_janjian',
        'sumber_informasi',
        'agent_id',
    ];

    // Relasi ke model Agent (optional)
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
}
