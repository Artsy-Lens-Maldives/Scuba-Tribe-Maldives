@extends('layouts.app')

@section('content')

    <div class="content-body" style="margin-top: 100px">
      <section class="page-section pt-0 pb-50">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="trans-uppercase mb-10">Add a new liveaboard</h4>
              <div class="cws_divider mb-30"></div>
            </div>
          </div>
          
          <div class="review-content pattern relative">
            <form class="form clearfix">
              <div class="row">
                <div class="col-md-10">
                  <label for="name">Name</label>
                  <input id="name" itype="text" name="name" value="" size="191" placeholder="Name of liveaboard" aria-required="true" class="form-row">
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
                  <input type="submit" value="Add a review" class="cws-button alt float-right">
              </div>
            </form>
            
          </div>
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
  })
  $('.boat_features').froalaEditor({
    heightMin: 200,
  })
  $('.food_and_drinks').froalaEditor({
    heightMin: 200,
  })
  $('.diving').froalaEditor({
    heightMin: 200,
  })
  $('.gear_rental').froalaEditor({
    heightMin: 200,
  }) 
}); 
</script>
@endsection