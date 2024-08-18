<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnionCouncil extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tehsil_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'tehsil_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function tehsil()
    {
        return $this->belongsTo(Tehsil::class);
    }

    public function households()
    {
        return $this->hasMany(Household::class);
    }
}
