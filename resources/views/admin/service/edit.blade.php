@extends('layouts.admin.master')

@section('title', 'Edit services - ELearner')

@section('custom_style')
<link rel="stylesheet" href="{{asset('admin/summernote.min.css')}}">
@endsection

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Services</h1>
        <a href="{{url('/admin/services/')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> View All Services</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('/admin/service/update/'.$service->id) }}" method="post" class="card shadow rounded  p-3"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="md-3">
                        <label form="">Service Title</label>
                        <input class="form-control" type="text" name="title" value="{{$service->title}}">
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label form="">Short Desceription</label>
                        <input class="form-control" type="text" name="description" value="{{$service->description}}">
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                         @enderror
                    </div>
                    <div class="md-3">
                        <label form="">Long Desceription</label>
                        <textarea name="long_description" id="service_summernote" cols="30" rows="10" value="{{$service->long_description}}"></textarea>
                        @error('long_description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label form="">Vedio URL</label>
                        <input class="form-control" type="text" name="vedio" value="{{$service->vedio}}">
                    </div>
                    <div class="md-3">
                        <label form="">Slug</label>
                        <input class="form-control" type="text" name="slug" value="{{$service->slug}}">
                        @error('slug')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="row md-3">
                        <div class="col-md-6">
                            <label form="">Services Thumbnail</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('uploads/service/'.$service->image)}}" alt="" height="200">
                        </div>
                    </div>
                    <div class="md-3">
                        <label form="">Price</label>
                        <input class="form-control" type="text" name="price" value="{{$service->price}}">
                    </div>
                    <div class="md-3">
                        <label form="">Meta Service Title</label>
                        <input class="form-control" type="text" name="meta_title" value="{{$service->meta_title}}">
                    </div>
                    <div class="md-3">
                        <label form="">Meta Service Desceription</label>
                        <input class="form-control" type="text" name="meta_description" value="{{$service->meta_description}}">
                    </div>
                    <div class="md-3 p-3">
                        <button class="btn btn-primary" type="Submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom_script')
<script src="{{asset('admin/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('admin/summernote.min.js')}}"></script>
<script>
        $(document).ready(function() {
            $('#service_summernote').summernote({height: 200});
        });
    </script>
@endsection