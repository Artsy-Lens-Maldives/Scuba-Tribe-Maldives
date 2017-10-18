@extends('layouts.app')

@section('content')


<div class="content-body">
      <div class="container page">
        <h2 class="title-section mb-5">Catamarans</h2>
        <hr style="border-bottom: 2px solid #000000;">
        
          @if(!$catamarans->isEmpty())
        <div class="row">  
            @foreach($catamarans as $catamaran)

            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item border">
                <div class="recom-media">
                  <a href="{{ url('catamaran/') }}/{{ $catamaran->slug }}">
                    <div class="pic">
                      @if($catamaran->first_image !== null)
                        <img src="{{ $catamaran->first_image->photo_url }}" alt="{{ $catamaran->name }} image" height="240px">    
                      @else
                        <img src="{{ url('/pic/recomended/1.jpg') }}" alt="{{ $catamaran->name }} image" height="240px">
                      @endif
                    </div>
                  </a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Maldives</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="{{ url('catamaran/') }}/{{ $catamaran->slug }}">
                    <h6 class="blog-title">{{ $catamaran->name }}</h6></a>
                  <div class="stars stars-{{ $catamaran->star }}"></div>
                  <div class="recom-price"><span style="font-size: 18px;" class="font-1"><b>Send an Inquiry for prices </b></div>
                  <p class="mb-30"></p><a href="{{ url('catamaran/') }}/{{ $catamaran->slug }}" class="recom-button">Read more</a><a href="{{ url('catamaran/') }}/{{ $catamaran->slug }}" class="cws-button small alt">Send Inquiry</a>
                  @if($catamaran->discount > 0)
                  <div class="action font-2">{{ $catamaran->discount }}%</div>
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
            <h3 class="title-section mb-5">No Catamarans found</h3>
          </div>

          @endif
          
        
      </div>
 
    </div>
@endsection
