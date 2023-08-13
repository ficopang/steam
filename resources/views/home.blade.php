@extends('layouts.master')
@section('title', 'Home')

@section('content')

    <div class="row m-0 p-0">
        <div class="col-2 p-3">
            <p class="m-0 text-light">DISCOVERY QUEUES</p>
            <ul class="text-primary">
                <li>DISCOVERY QUEUES</li>
                <li>New Releases</li>
            </ul>
            <p class="m-0 text-light">BROWSE CATEGORIES
            </p>
            <ul class="text-primary">
                <li>Top Sellers
                </li>
                <li>New Releases
                </li>
                <li>Community
                </li>
                <li>Specials
                </li>
                <li>Specials
                </li>
            </ul>
            <p class="m-0 text-light">BROWSE BY GENRE
            </p>
            <ul class="text-primary">
                <li>Free to play
                </li>
                <li>Early AccesS
                </li>
                <li>Adventure
                </li>
                <li>Horror
                </li>
                <li>Dating Sim
                </li>
                <li>RPG
                </li>
                <li>Massively Multiplayer

                </li>
                <li>Futuristic
                </li>
                <li>Simulation
                </li>
                <li>Farming Sim
                </li>
                <li>Strategy
                </li>
            </ul>
        </div>
        <div class="col-10 p-2 pe-5">
            <div> <input type="text" class="w-100 bg-blue2 text-light"></div>
            <div>
                <h5 class="text-light mt-4">Featured & Recommended</h5>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @php
                        $first = true
                        @endphp
                        @foreach ($featureds as $featured)
                        <div class="carousel-item @php
                        if($first) {
                            echo 'active';
                        }
                        $first = false;
                        @endphp">
                            <div class="row bg-dark">
                                <div class="col-9">
                                    <img width="100%" src="assets/@php
                                        $img = DB::select(DB::raw('SELECT * FROM `game_image_details` JOIN game_images ON img_id = game_images.id WHERE game_id = "'.$featured->id.'"'));
                                        echo $img[count($img)-1]->image;
                                    @endphp" alt="">
                                </div>
                                <div class="col-3 p-2 text-light">
                                    <h5>{{$featured->title}}</h5>
                                    <p>{{$featured->description}}</p>
                                    <p>Now Available
                                    </p>
                                    <div class="">
                                        <p class="text-secondary text-decoration-line-through m-0">{{ ($featured->price!=0) ? $featured->price : "FREE"}}</p>
                                        <p class="m-0">{{ ($featured->price!=0) ? $featured->price-($featured->price*$featured->discount/100) : "FREE"}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <h5 class="text-light">Special Offer</h5>
            <div class="row">
                @foreach ($specials as $special)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/game{{$special->id}}.jpg" class="card-img-top" alt="...">
                            <div class="card-body bg-blue2">
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-9">
                                        <div class="row">
                                            <div class="col-4 bg-success d-flex align-items-center">
                                                <p class="fs-6 text-light m-0">{{$special->discount}}%</p>
                                            </div>
                                            <div class="col-8 bg-dark">
                                                <p class="fs-6 text-secondary m-0 text-decoration-line-through">Rp.
                                                    {{ ($special->price!=0) ? $special->price : "FREE"}}</p>
                                                <p class="fs-6 text-light m-0">Rp. {{ ($special->price!=0) ? $special->price-($special->price*$special->discount/100) : "FREE"}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-dark text-white active" id="trending-tab" data-bs-toggle="tab" data-bs-target="#trending" type="button" role="tab" aria-controls="trending" aria-selected="true">Now and Trending</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-dark text-white" id="topseller-tab" data-bs-toggle="tab" data-bs-target="#topseller" type="button" role="tab" aria-controls="topseller" aria-selected="false">Top Sellers</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-dark text-white" id="freegame-tab" data-bs-toggle="tab" data-bs-target="#freegame" type="button" role="tab" aria-controls="freegame" aria-selected="false">Free Games</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                    <div class="row">
                        <div class="col-9">
                            @foreach ($trendings as $trending)
                            <div class="row bg-dark">
                                <div class="col-3"><img width="100%" src="assets/game{{$trending->id}}.jpg" alt=""></div>
                                <div class="col-9 py-2">
                                    <h5 class="text-light">{{$trending->title}}</h5>
                                    <p class="text-secondary text-decoration-line-through m-0">{{ ($trending->price!=0) ? $trending->price : "FREE" }}</p>
                                    <p class="m-0 text-light">{{ ($trending->price!=0) ? $trending->price-($trending->price*$trending->discount/100) : "FREE"}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="topseller" role="tabpanel" aria-labelledby="topseller-tab">
                    <div class="row">
                        <div class="col-9">
                            @foreach ($topsellers as $topseller)
                            <div class="row bg-dark">
                                <div class="col-3"><img width="100%" src="assets/game{{$topseller->id}}.jpg" alt=""></div>
                                <div class="col-9 py-2">
                                    <h5 class="text-light">{{$topseller->title}}</h5>
                                    <p class="text-secondary text-decoration-line-through m-0">{{ ($topseller->price!=0) ? $topseller->price : "FREE" }}</p>
                                    <p class="m-0 text-light">{{ ($topseller->price!=0) ? $topseller->price-($topseller->price*$topseller->discount/100) : "FREE"}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="freegame" role="tabpanel" aria-labelledby="freegame-tab">
                    <div class="row">
                        <div class="col-9">
                            @foreach ($frees as $free)
                            <div class="row bg-dark">
                                <div class="col-3"><img width="100%" src="assets/game{{$free->id}}.jpg" alt=""></div>
                                <div class="col-9 py-2">
                                    <h5 class="text-light">{{$free->title}}</h5>
                                    <p class="text-secondary text-decoration-line-through m-0">{{ ($free->price!=0) ? $free->price : "FREE" }}</p>
                                    <p class="m-0 text-light">{{ ($free->price!=0) ? $free->price-($free->price*$free->discount/100) : "FREE"}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
