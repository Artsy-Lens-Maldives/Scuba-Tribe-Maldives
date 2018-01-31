@extends('layouts.app-dive')

@section('content')
    
    <div class="content-body">
      <section class="page-section pt-0 pb-50">
        <div class="container">
          <div class="menu-widget with-switch mt-30 mb-30">
            <ul class="magic-line">
              <li class="current_item"><a href="#overview" class="scrollto">Overview</a></li>
              <!-- <li><a href="#reviews" class="scrollto">Reviews</a></li> -->
            </ul>
          </div>
        </div>
        <div class="container" style="margin-bottom: 100px">
          <div class="row">
            <div class="col-md-12">
              <div id="flex-slider" class="flexslider">
                <ul class="slides">
                  @foreach($diving_spot->images as $image)
                  <li><img src="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
              <div id="flex-carousel" class="flexslider">
                <ul class="slides">
                  @foreach($diving_spot->images as $image)
                  <li><img src="{{ $image->photo_url }}" data-at2x="{{ $image->photo_url }}" alt></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="bg-gray-3 p-30-40">
                <h4>Description</h4>
                {!! $diving_spot->description !!}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection