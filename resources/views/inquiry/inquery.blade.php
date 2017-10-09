@extends('layouts.app')

@section('content')
  <div class="content-body" style="margin-top: 100px">
    <section class="page-section pt-0 pb-50">
    <!-- review -->
    <div class="container">
      <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))

          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          <div class="cws_divider mb-30"></div>
          @endif
        @endforeach
      </div> <!-- end .flash-message -->

      <div class="row" style="">
        <div class="col-md-12">
          <h4 class="trans-uppercase mb-10">Send an Inquiry about <strong>{{ $name }}</strong> - <strong>{{ $type }}</strong></h4>
          <div class="cws_divider mb-30"></div>
        </div>
      </div>
      
      <div class="review-content pattern relative">
        

        <div class="row">
          <div class="col-md-5 mb-md-30 mb-xs-0 mb-30">
            
          </div>
        </div>
        <form method="post" class="form clearfix">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-4">
              <input type="text" name="fname" value="" size="40" placeholder="First Name" aria-required="true" class="form-row form-row-first" required>
            </div>
            <div class="col-md-4">
              <input type="text" name="lname" value="" size="40" placeholder="Last Name" aria-required="true" class="form-row form-row-first" required>
            </div>
            <div class="col-md-4">
              <input type="text" name="phone" value="" size="40" placeholder="Enter Phone Number" aria-required="true" class="form-row form-row-last" required>
            </div>
            <div class="col-md-12">
              <input type="text" name="email" value="" size="40" placeholder="Enter Email" aria-required="true" class="form-row form-row-last" required>
            </div>
            <div class="col-md-12">
              <input type="text" name="title" value="" size="40" placeholder="Title of your Inquiry" aria-required="true" class="form-row form-row-last" required>
            </div>
            <div class="col-md-12">
              <textarea name="inquiry" cols="40" rows="4" placeholder="Message of your Inquiry" aria-invalid="false" aria-required="true" class="mb-20" required></textarea>
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