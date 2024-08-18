<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'union_council_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'union_council_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function unionCouncil()
    {
        return $this->belongsTo(UnionCouncil::class);
    }

    public function members()
    {
        return $this->hasMany(HouseholdMember::class);
    }
}
