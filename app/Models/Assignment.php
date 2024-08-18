<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'union_council_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'union_council_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function unionCouncil()
    {
        return $this->belongsTo(UnionCouncil::class);
    }
}
