<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defination extends Model
{
    use HasFactory;
    protected $fillable = [
        'defination_id',
        'type',
        'name',
    ];
    public function post()
    {
        return $this->belongsTo(Job::class);
    }
}
