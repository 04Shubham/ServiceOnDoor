<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booked;
use Illuminate\Support\Facades\Auth;

class BookedController extends Controller
{
    public function store($service_id){
        $isBook = Booked::where('user_id', Auth::user()->id)->where('service_id', $service_id)->latest()->first();
        if($isBook){
            return redirect('/profile');
        }
        else{
            $books = new Booked;
            $books->service_id = $service_id;
            $books->user_id = Auth::user()->id;
            $books->save();
            return redirect('/profile');
        }
    }
}
