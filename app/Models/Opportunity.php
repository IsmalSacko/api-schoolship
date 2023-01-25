<?php

namespace App\Models;


use App\Models\Lookups\Category;
use App\Models\Lookups\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;
    protected $casts = [
        'deadline' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'country_id',
        'deadline',
        'created_by',
        'updated_by',
    ];
    public function details()
    {
        return $this->hasOne(OpportunityDetails::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }


}
