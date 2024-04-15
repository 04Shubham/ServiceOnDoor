@extends('layouts.client.master')

@section('title', $service->title . '-ELearers')

@section('content')
    @include('layouts.client.nav ')

    <div class="container-fluid py-5">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <h1>{{ $service->title }}</h1>
                <p><span class="badge bg-secondary">{{ $category->title }}</span></p>
                <p>
                    {{ $service->description }}
                </p>
                <p>
                    {!! $service->long_description !!}
                </p>
                <div>
                    <h2 class="text-danger"><i class="fas fa-rupee-sign"></i> {{ $service->price }}</h2>
                    @guest
                        <a href="{{ url('/book/' . $service->id) }}" class="btn btn-primary">Enroll for free</a>
                    @else
                        @php
                            $isBook = App\Models\Booked::where('user_id', Auth::user()->id)
                                ->where('service_id', $service->id)
                                ->latest()
                                ->first();
                        @endphp
                        @if ( $isBook )
                        <a class="btn btn-danger disabled">Booked</a>
                        @else
                        <a href="{{ url('/book/' . $service->id) }}" class="btn btn-primary">Booking Now</a>
                        @endif
                        
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
