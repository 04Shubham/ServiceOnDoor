@extends('layouts.client.master')

@section('title', $service->title . '-DoorIn')

@section('content')
@include('layouts.client.nav ')
    <div class="container-fluid py-5">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <h1 class="text-center">{{ $service->title }}</h1>
                
            </div>
        </div>
    </div>
@endsection
