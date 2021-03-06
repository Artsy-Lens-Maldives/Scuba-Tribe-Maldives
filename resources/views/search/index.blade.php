@extends('layouts.app')

@section('content')
    <div class="content-body">
        <div class="container page">
            <h2 class="title-section mb-5">You searched for {{ "'".request()->q."'" }}</h2>
            <hr style="border-bottom: 2px solid #000000;">

            @if(!$liveaboards->isEmpty())
                <div class="row">
                    @foreach($liveaboards as $liveaboard)
                        <!-- Recomended item-->
                        <div class="col-md-6">
                            <div class="recom-item border">
                                <div class="recom-media">
                                    <a href="{{ url('liveaboard/') }}/{{ $liveaboard->slug }}">
                                        <div class="pic">
                                            @if($liveaboard->first_image !== null)
                                            <img src="{{ $liveaboard->first_image->photo_url }}" alt="{{ $liveaboard->name }} image" height="240px">    
                                            @else
                                            <img src="{{ url('/pic/recomended/1.jpg') }}" alt="{{ $liveaboard->name }} image">      
                                            @endif
                                        </div>
                                    </a>
                                    <div class="location"><i class="flaticon-suntour-map"></i> Maldives</div>
                                </div>
                                <!-- Recomended Content-->
                                <div class="recom-item-body">
                                    <a href="{{ url('liveaboard/') }}/{{ $liveaboard->slug }}">
                                        <h6 class="blog-title">{{ $liveaboard->name }}</h6>
                                    </a>
                                    <p class="mb-30"></p>
                                    <a href="{{ url('liveaboard/') }}/{{ $liveaboard->slug }}" class="recom-button">Read more</a>
                                    <a href="{{ url('liveaboard/') }}/{{ $liveaboard->slug }}" class="cws-button small alt">Send Inquiry</a>
                                    @if($liveaboard->discount > 0)
                                        <div class="action font-2">{{ $liveaboard->discount }}%</div>
                                    @endif
                                </div>
                                <!-- Recomended Image-->
                            </div>
                        </div>
                        <!-- ! Recomended item-->
                    @endforeach
                </div>
            @else
                <div style="min-height: 40vh;">
                    <h3 class="title-section mb-5">No Liveaboards found</h3>
                </div>
            @endif
        </div>
    </div>
@endsection

