<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Illuminate\Support\Facades\File;

use App\Models\Category;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view("admin.service.index", compact('services'));
    }
    public function create(){
        $categories = Category::all();
        return view("admin.service.create", compact('categories'));
    }
    
    public function store(Request $request){
        $request -> validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'long_description' => 'required',
            'slug' => 'required|unique:services',

        ]);
        $service = new Service;
        $service->category_id = $request->category_id;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->long_description = $request->long_description;
        $service->vedio = $request->vedio;
        $service->slug = str::slug ($request->slug);
        
        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/service/', $filename);
            $service->image = $filename;
        }

        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->price = $request->price;
        $service->save();
        return redirect('/admin/services')->with('success', 'service Created Successfully ');
    }
    
    public function edit($id){
        $service = Service::find($id);
        if($service){
            return view('admin.service.edit', compact('service'));
        }
        else{
            return redirect('admin/services')->with('error', 'Category not Found!');  
        }
    }
    public function update(Request $request,$id){
        $service = Service::find($id);
        if($service){
            $service->title = $request->title;
            $service->description = $request->description;
            $service->slug = str::slug ($request->slug);

    
            if($request->hasfile('image')){
                $destination = 'uploads/service/'.$service->image;
                if(file::exists($destination)){
                    file::delete($destination);
                }
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $file->move('uploads/service/',$filename);
                $service->image = $filename;
            }

            $service->price = $request->price;
            $service->meta_title = $request->meta_title;
            $service->meta_description = $request->meta_description;
            $service->update();
            return redirect('admin/services')->with('success', 'Service Updated Successfully!');
        }
        else{
            return redirect()->back()->with('error','Service not Found!');
        }
    }
    public function destory($id){
        $service = Service::find($id);
        if($service){
            $service->delete();
            return redirect()->back()->with('success','Service moved to Trash!');
        }
        else{
            return redirect()->back()->with('error','Service not Found!');
        }
    }
    public function delete($id){
        $service = service::withTrashed()->where('id', $id)->first();
        if($service){
            $destination = 'uploads/service/'.$service->image;
            if(file::exists($destination)){
                file::delete($destination);
            }
            $service->forceDelete();
            return redirect()->back()->with('success','Service Deleted Successfully!');
        }
        else{
            return redirect()->back()->with('error','Service not Found!');
        }
    }
    public function trash(){
        $trashed_services = Service::onlyTrashed()->get();
        return view('admin.service.trash', compact('trashed_services'));
    }

}
