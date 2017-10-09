@extends('layouts.app')

@section('content')
  <div class="content-body" style="margin-top: 100px">
    <section class="page-section pt-0 pb-50">
    <!-- review -->
    <div class="container">
      <div class="row" style="">
        <div class="col-md-12">
          <h4 class="trans-uppercase mb-10">Send an Inquiry about <strong>{{ $_GET['name'] }}</strong> - <strong>{{ $_GET['type'] }}</strong></h4>
          <div class="cws_divider mb-30"></div>
        </div>
      </div>
      
      <div class="review-content pattern relative">
        

        <div class="row">
          <div class="col-md-5 mb-md-30 mb-xs-0 mb-30">
            
          </div>
        </div>
        <form method="get" class="form clearfix">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $_GET['id'] }}">
          <input type="hidden" name="name" value="{{ $_GET['name'] }}">
          <input type="hidden" name="type" value="{{ $_GET['type'] }}">
          <div class="row">
            <div class="col-md-4">
              <input type="text" name="email" value="" size="40" placeholder="First Name" aria-required="true" class="form-row form-row-first">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" value="" size="40" placeholder="Last Name" aria-required="true" class="form-row form-row-first">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" value="" size="40" placeholder="Phone Number" aria-required="true" class="form-row form-row-first">
            </div>
            <div class="col-md-12">
              <input type="text" name="email" value="" size="40" placeholder="Title of your Inquiry" aria-required="true" class="form-row form-row-last">
            </div>
            <div class="col-md-12">
              <textarea name="message" cols="40" rows="4" placeholder="Message of your Inquiry" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
              <input type="submit" value="Send Inquiry" class="cws-button alt float-right">
            </div>
          </div>
        </form>

        

                
      </div>
    </div>
    <!-- ! review -->
    </section>
  </div>
@endsection