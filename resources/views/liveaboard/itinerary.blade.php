@extends('layouts.app-live')

@section('content')
    <?php
      $itinerary = $liveaboard_itinerary;
    ?>
    
    <div class="content-body">
      <section class="page-section pt-0 pb-50">
        <div class="container" style="">
          <div class="row">
            <div class="col-md-12">
              <div id="flex-slider" class="flexslider">
                <ul class="slides">
                  @foreach($liveaboard->images as $image)
                  <li><img src="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
              <div id="flex-carousel" class="flexslider">
                <ul class="slides">
                  @foreach($liveaboard->images as $image)
                  <li><img src="{{ $image->photo_url }}" data-at2x="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="col-md-12">
              <div class="bg-gray-3 p-30-40"style="list-style: square;">
                <h4>Itinerary of {{ $liveaboard->name }} - {{ $itinerary->date }} <a href="{{ url('inquiry') }}/{{ $liveaboard->id }}/{{ $liveaboard->slug }}/liveaboard/{{ $itinerary->id }}" class="cws-button alt gray">Send Inquiry</a> </h4>
                <h5>Capacity: {{ $itinerary->current }}</strong> of <strong>{{ $itinerary->max }} - Price {!! $itinerary->price !!}</h5>
                <hr>
                <div class="">{!! $itinerary->detail !!}</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection