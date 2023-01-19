<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'Description',
        'average',
        'sport_id',
        'trainer_id',
    ];

    public function trainers(){
        $this->belongsTo(_trainers::class);
    }
    public function sports(){
        $this->belongsTo(_sports::class);
    }
}
