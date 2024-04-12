<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\FeaturedService;
use App\Models\Category;
use App\Models\FeaturedCategory;

class FeaturedController extends Controller
{
    public function view_featured_categories(){
        $categories = Category::all();
        $featured_categories = FeaturedCategory::all();
        return view('admin.featured.category', compact('categories', 'featured_categories'));
    }

    public function store_featured_category(Request $request){
        $category = FeaturedCategory::where('category_id', $request->category_id)->first();
        if($category) {
            return redirect('/admin/featured/categories')->with('error','Category already added to Featured List !');
        } 
        else{ 
            $featuredCategory = new FeaturedCategory;
            $featuredCategory->category_id = $request->category_id;
            $featuredCategory->save();
           
            return redirect('/admin/featured/categories')->with('success','Category Successfully added to Featured List !');
        }
        
     }

     public function remove_featured_category($id){
        $featuredCategories = FeaturedCategory::find($id);
        if ($featuredCategories) {
            $featuredCategories->delete();
            return redirect('/admin/featured/categories')->with('success','Category Successfully remove form the Featured List !');
        } 
        else {
            return redirect('/admin/featured/categories')->with('error','Category not found !');
            
        }
        
     }

    public function view_featured_services(){
        $services = Service::all();
        $featured_services = FeaturedService::all();
        return view('admin.featured.services', compact('services','featured_services'));
    }

    public function store_featured_service(Request $request){
        $service = Featuredservice::where('service_id', $request->service_id)->first();
        if($service) {
            return redirect('/admin/featured/services')->with('error','service already added to Featured List !');
        } 
        else{ 
            $featuredservice = new FeaturedService;
            $featuredservice->service_id = $request->service_id;
            $featuredservice->save();
           
            return redirect('/admin/featured/services')->with('success','service Successfully added to Featured List !');
        }
        
     }

     public function remove_featured_service($id){
        $featuredservices = FeaturedService::find($id);
        if ($featuredServices) {
            $featuredServices->delete();
            return redirect('/admin/featured/services')->with('success','service Successfully remove form the Featured List !');
        } 
        else {
            return redirect('/admin/featured/services')->with('error','service not found !');
            
        }
        
     }
    
}
