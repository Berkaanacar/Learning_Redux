<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable =[
        'contact_id',
        'title',
        'city',
        'discript'
    ];
    public function getContact() {

        return $this->belongsTo(Contact::class);
    }
}
