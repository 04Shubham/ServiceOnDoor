<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Service;
use App\Models\Booked;

class ProfileController extends Controller
{
    public function dashboard(){
        $booked_services = [];
        return view('client.profile.index', compact('booked_services'));
    }
    public function index(){
        $bookeds = Booked::where('user_id', Auth::user()->id)->get();
        $booked_services = [];
        foreach($bookeds as $item){
            $service = service::find($item->service_id);
            array_push($booked_services, $service);
        }
        // dd($enrolled_services);
        // die;
        return view('client.profile.index', compact('booked_services'));
    }
}
