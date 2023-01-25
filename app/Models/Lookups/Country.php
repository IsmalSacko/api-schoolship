<?php

namespace App\Models\Lookups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'name',
        'country_code',
        'phone_code',
        //'flag',
    ];
}
