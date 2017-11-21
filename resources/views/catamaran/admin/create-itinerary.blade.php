@extends('layouts.app-admin')

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
          <h4 class="trans-uppercase mb-10">Add a new Itinerary</h4>
          <div class="cws_divider mb-30"></div>
        </div>
      </div>
      
      <div class="review-content pattern relative">
        

        <div class="row">
          <div class="col-md-5 mb-md-30 mb-xs-0 mb-30">
            
          </div>
        </div>
        <form action="{{ url()->current() }}/post" method="post" class="form clearfix">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Select Catamaran:</label>
                    <select class="form-control" name="catamaran_id" required>
                        @foreach($catamarans as $catamaran)
                            <option value="{{ $catamaran->id }}">{{ $catamaran->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Current Capacitiy:</label>
                    <input type="number" name="current"placeholder="Enter Current Capacity" aria-required="true" class="form-row form-row-last" min="0" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Max Capacitiy:</label>
                    <input type="number" name="max"placeholder="Enter Max Capacity" aria-required="true" class="form-row form-row-last" min="1" required>
                </div>
            </div>

            <div class="col-md-12">
              <label>Enter Itinerary Date:</label>
              <input type="text" name="date" size="40" placeholder="Enter Date" aria-required="true" class="form-row form-row-last" required>
            </div>
            
            <div class="col-md-12">
              <label>Enter Itinerary Price:</label>
              <input type="number" min="0" name="price" size="40" placeholder="Enter Price" aria-required="true" class="form-row form-row-last" required>
            </div>
            
            <div class="col-md-12">
              <label>Enter Itinerary Details:</label>
              <textarea id="detail" name="detail" cols="40" rows="4" placeholder="Detail about itenary" aria-invalid="false" aria-required="true" class="mb-20" required></textarea>
              <input type="submit" value="Add itinerary" class="cws-button alt float-right">
            </div>
          </div>
        </form>

        

                
      </div>
    </div>
    <!-- ! review -->
    </section>
  </div>
@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
<!-- Include Editor style. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />    
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.0/js/froala_editor.pkgd.min.js"></script>

<script> 
$(function() { 
  $('#detail').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  })
}); 
</script>
@endsection