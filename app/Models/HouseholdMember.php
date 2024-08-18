<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseholdMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'household_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'household_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function household()
    {
        return $this->belongsTo(Household::class);
    }
}
