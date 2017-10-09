@extends('layouts.app-admin')

@section('content')

    <div class="content-body" style="margin-top: 100px">
      <section class="page-section pt-0 pb-50">
        <div class="container">
          <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))

              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              
              @endif
            @endforeach
          </div> 
          <!-- end .flash-message -->
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">Add a new liveaboard</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div>
          <form class="form clearfix" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="review-content pattern relative mb-15" style="">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="trans-uppercase mb-10">Basic Details</h6>
                  <div class="cws_divider mb-30"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10">
                  <label for="name">Name</label>
                  <input id="name" itype="text" name="name" size="191" placeholder="   Name of liveaboard" aria-required="true" class="form-row">
                </div>
                <div class="col-md-2">
                  <label for="rating">Select rating</label>
                  <select class="form-control form-row" name="star" id="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="description">Description</label>
                  <textarea class="description" id="description" name="description" cols="40" rows="4" placeholder="Write a description" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
                </div>
                <div class="col-md-12">
                  <label for="boat_features">Boat Features</label>
                  <textarea class="boat_features" id="boat_features" name="boat_features" cols="40" rows="4" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
                </div>
              </div>
            </div>
            
            <div class="review-content pattern relative mb-15" style="">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="trans-uppercase mb-10">Features</h6>
                  <div class="cws_divider mb-30"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="food_and_drinks">Food and Drinks</label>
                  <textarea class="food_and_drinks" id="food_and_drinks" name="food_and_drinks" cols="40" rows="4" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
                </div>
                <div class="col-md-12">
                  <label for="diving">Diving</label>
                  <textarea class="diving" id="diving" name="diving" cols="40" rows="4" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
                </div>
                <div class="col-md-12">
                  <label for="gear_rental">Gear rental</label>
                  <textarea class="gear_rental" id="gear_rental" name="gear_rental" cols="40" rows="4" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
                </div>
              </div>
            </div>
            <div class="review-content pattern relative mb-15" style="">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="trans-uppercase mb-10">Add Vessel Layout Photo</h6>
                  <div class="cws_divider mb-30"></div>
                </div>
              </div>
              <div class="row mt-15">
                <div class="col-md-12">
                    <input type="file" class="form-control" name="catamaran_layout_photo"/>
                </div>
              </div>
            </div>
            <div class="review-content pattern relative mb-15" style="">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="trans-uppercase mb-10">Add Photos to gallery</h6>
                  <div class="cws_divider mb-30"></div>
                </div>
              </div>
              <div class="row mt-15">
                <div class="col-md-12">
                    <input type="file" class="form-control" id="images" name="image[]" onchange="preview_images();" multiple/>
                </div>
              </div>
              <div class="row mt-15 mb-15" id="image_preview" style="margin-top: 10px"></div>
              <div class="row mt-15">
                <div class="col-md-12">
                  <input type="submit" value="Add Liveaboard" class="cws-button alt float-right">
                </div>
              </div>
            </div>
          </form>
        </div>
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
  $('.description').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  })
  $('.boat_features').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  })
  $('.food_and_drinks').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  })
  $('.diving').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  })
  $('.gear_rental').froalaEditor({
    heightMin: 200,
    toolbarSticky: false
  }) 
}); 
</script>
<script>
  function preview_images() {
      var total_file = document.getElementById("images").files.length;
      for (var i = 0; i < total_file; i++) {
          $('#image_preview').append("<div class='col-md-3' style='margin: 5px'><img class='img-responsive img-thumbnail' src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
      }
  }
</script>
@endsection