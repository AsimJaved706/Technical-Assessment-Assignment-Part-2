<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'division_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'division_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function tehsils()
    {
        return $this->hasMany(Tehsil::class);
    }
}
