<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

use App\Models\Category;
use App\Models\Booked;

class Service extends Model
{
    use HasFactory;
    use softDeletes;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function bookeds(){
        return $this->hasMany(Booked::class, 'service_id', 'id');
    }
}
