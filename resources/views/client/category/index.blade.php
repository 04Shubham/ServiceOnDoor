@extends('layouts.client.master')
@section('title', $category->title . '-OnDoor')


@section('content')
<div class="container-fluid bg-primary hero-header mb-0">
    <div class="container-fluid px-lg-5">

            <div class="col-md-12">
                <div class="row d-flex justify-content-center mb-4">
                @foreach ($services as $service)
                        <div class="rounded overflow-hidden mb-2" style="display: inline-block !important; width: 300px; margin-left: 10px;">
                            <div style="text-align: center;">
                                <img class="img-fluid" src="{{ asset('uploads/service/' . $service->image) }}" alt="">
                            </div>
                            <div class="bg-secondary p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>45 Students</small>
                                    <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>03h 30m</small>
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.4
                                        <small>(250)</small>
                                    </h6>
                                </div>
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <p class="card-text"></p>

                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="m-0">Rs.{{ $service->price }}/- </h5>
                                        <a class="btn btn-primary"
                                            href="{{ url('category/' . $category->slug . '/' . $service->slug) }}">Browse</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                <div class="d-flex justify-content-center md-5">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
