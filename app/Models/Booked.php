<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Service;
class Booked extends Model
{
    use HasFactory;

    public function service(){
        return $this->belongsTo(Service::class, 'service_id','id');
    }
}
