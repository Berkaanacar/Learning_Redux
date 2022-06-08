<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'employer_id',
        'job_taker_id',
        'defination_id',
        'description',
        'completed'

    ];
    public function get()
    {
        return $this->hasOne(Defination::class, 'defination_id');
    }
}
