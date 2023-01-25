<?php

namespace App\Models\Lookups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'name',
    ];
}
