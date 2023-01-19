<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
    ];

    public function positions(){
        $this->hasMany(_positions::class);
    }
    public function teams(){
        $this->hasMany(_teams::class);
    }
}
