<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePartner extends Model
{
    use HasFactory;

    protected $fillable = []; // Fillable fields

    public function services()
    {
        // Define the relationship if needed
    }
}
