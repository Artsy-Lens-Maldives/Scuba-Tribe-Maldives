@extends('layouts.app')

@section('content')
<div class="content-body" style="margin-top: 100px">
  <section class="page-section pt-0 pb-50">
  <!-- review -->
  <div class="container">
    <div class="row" style="">
      <div class="col-md-12">
        <h4 class="trans-uppercase mb-10">Send an Inquery about (the fuck pacakge)</h4>
        <div class="cws_divider mb-30"></div>
      </div>
    </div>
    
    <div class="review-content pattern relative">
      

      <div class="row">
        <div class="col-md-5 mb-md-30 mb-xs-0 mb-30">
          <div class="review-total"><img src="/pic/blog/120x120.jpg" data-at2x="/pic/blog/120x120@2x.jpg" alt>
            <div class="review-total-content">
              
              <ul class="icon">
                <li>Maldives<i class="flaticon-suntour-map"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <form class="form clearfix">
        <div class="row">
          <div class="col-md-4">
            <input type="text" name="email" value="" size="40" placeholder="First Name" aria-required="true" class="form-row form-row-first">
          </div>
          <div class="col-md-4">
            <input type="text" name="email" value="" size="40" placeholder="Last Name" aria-required="true" class="form-row form-row-first">
          </div>
          <div class="col-md-4">
            <input type="text" name="email" value="" size="40" placeholder="Booking Number" aria-required="true" class="form-row form-row-first">
          </div>
          <div class="col-md-12">
            <input type="text" name="password" value="" size="40" placeholder="Title of your review" aria-required="true" class="form-row form-row-last">
          </div>
          <div class="col-md-12">
            <textarea name="message" cols="40" rows="4" placeholder="Message of your review" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
            <input type="submit" value="Add a review" class="cws-button alt float-right">
          </div>
        </div>
      </form>

      

              
    </div>
  </div>
  <!-- ! review -->
  </section>
</div>
@endsection