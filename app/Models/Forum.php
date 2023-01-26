<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $casts = [
        'created_at' => 'datetime:d-m-Y à H:i',
        'updated_at' => 'datetime:d-m-Y à H:i',
    ];
    protected $fillable = [
        'question',
        'created_by',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }

}
