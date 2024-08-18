<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tehsil extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'district_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'district_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function unionCouncils()
    {
        return $this->hasMany(UnionCouncil::class);
    }
}
