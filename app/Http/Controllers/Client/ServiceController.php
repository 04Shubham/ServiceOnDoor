<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index($category_slug, $service_slug){
        $category = Category::where('slug', $category_slug)->first();
        $service = Service::where('slug', $service_slug)->first();
        return view('client.service.index',compact('category','service'));
    }
 
    public function view($slug){
        $service = Service::where('slug', $slug)->first();
        return view('client.service.chapter', compact('service'));
    }
}
