@extends('layouts.master')
@section('title', 'Home')

@section('content')

    <h1>The Point shop</h1>
    <div class="container">
        <h6 class="text-light">ALL ANIMATED AVATAR</h6>
        <div class="row">
            @foreach ($items as $item)
                @if (strcmp($item->category, 'avatar') == 0)
                    <div class="col-2">
                        <div class="card bg-dark">
                            <img src="assets/point-shop/{{ $item->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8 d-flex flex-column text-light">
                                        <p class="m-0">{{ $item->name }}</p>
                                        <p class="m-0 text-secondary">{{ $item->category }}</p>
                                    </div>
                                    <div class="col-4 d-flex align-self-end text-light">
                                        <p class="m-0 text-end">{{ $item->points }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <h6 class="text-light mt-5">ALL AVATAR FRAMES</h6>
        <div class="row">
            @foreach ($items as $item)
                @if (strcmp($item->category, 'frame') == 0)
                    <div class="col-2">
                        <div class="card bg-dark">
                            <img src="assets/point-shop/{{ $item->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8 d-flex flex-column text-light">
                                        <p class="m-0">{{ $item->name }}</p>
                                        <p class="m-0 text-secondary">{{ $item->category }}</p>
                                    </div>
                                    <div class="col-4 d-flex align-self-end text-light">
                                        <p class="m-0 text-end">{{ $item->points }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <h6 class="text-light mt-5">ALL MINI PROFILES</h6>
        <div class="row">
            @foreach ($items as $item)
                @if (strcmp($item->category, 'profile') == 0)
                    <div class="col-2">
                        <div class="card bg-dark">
                            <img src="assets/point-shop/{{ $item->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8 d-flex flex-column text-light">
                                        <p class="m-0">{{ $item->name }}</p>
                                        <p class="m-0 text-secondary">{{ $item->category }}</p>
                                    </div>
                                    <div class="col-4 d-flex align-self-end text-light">
                                        <p class="m-0 text-end">{{ $item->points }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <h6 class="text-light mt-5">ALL SEASONAL BADGES</h6>
        <div class="row">
            @foreach ($items as $item)
                @if (strcmp($item->category, 'badge') == 0)
                    <div class="col-2">
                        <div class="card bg-dark">
                            <img src="assets/point-shop/{{ $item->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8 d-flex flex-column text-light">
                                        <p class="m-0">{{ $item->name }}</p>
                                        <p class="m-0 text-secondary">{{ $item->category }}</p>
                                    </div>
                                    <div class="col-4 d-flex align-self-end text-light">
                                        <p class="m-0 text-end">{{ $item->points }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <h6 class="text-light mt-5">ALL CHAT STICKERS</h6>
        <div class="row">
            @foreach ($items as $item)
                @if (strcmp($item->category, 'sticker') == 0)
                    <div class="col-2">
                        <div class="card bg-dark">
                            <img src="assets/point-shop/{{ $item->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8 d-flex flex-column text-light">
                                        <p class="m-0">{{ $item->name }}</p>
                                        <p class="m-0 text-secondary">{{ $item->category }}</p>
                                    </div>
                                    <div class="col-4 d-flex align-self-end text-light">
                                        <p class="m-0 text-end">{{ $item->points }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection
