@extends('layouts.errors')

@section('content')

    <!-- section 404-->
    <section class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="img-404"><img src="/pic/404.png" alt></div>
            <h2 class="mt-40 mb-50 align-center">Ooops ... We are sorry, the page you want isn’t here anymore.</h2>
            <div class="row">
              <div class="col-md-6 mb-md-30"> 
                <p>Are you trying to steal from us.?</p>
              </div>
              <div class="col-md-6"> 
                <p class="mb-15">Perhaps searching can help or go back to <a href="{{ url('/') }}" class="back-home">Homepage</a></p>
                <div class="widget-search">
                  <form role="search" method="get" action="#" class="search-form">
                    <label><span class="screen-reader-text">Search ...</span>
                      <input type="search" placeholder="Search ..." value="" name="s" title="Search:" class="search-field">
                    </label>
                    <button type="submit" class="search-submit"><i class="flaticon-interface"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ! section 404-->

@endsection