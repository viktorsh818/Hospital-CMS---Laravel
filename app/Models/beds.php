<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class beds extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'room_id',
        'patient_id',
        'alloted_time',
        'discharge_time',
    ];

    public function room()
    {
        return $this->belongsTo(rooms::class);
    }
}