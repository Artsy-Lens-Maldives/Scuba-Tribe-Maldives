@extends('layouts.app')

@section('content')


<div class="content-body">
      <div class="container page">
        <h2 class="title-section mb-5"><span>Search</span> Diving</h2>
        <div class="search-hotels mb-40 pattern">
          <div class="tours-container">
            <div class="tours-box">
              <div class="tours-search mb-20">
                <form method="post" class="form search divider-skew">
                  <div class="search-wrap">
                    <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                  </div>
                </form>
                <div class="tours-calendar divider-skew"> 
                  <input placeholder="Depart date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                </div>
                <div class="tours-calendar divider-skew"> 
                  <input placeholder="Return date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                </div>
                <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                  <select>
                    <option>Adult</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="selection-box divider-skew"><i class="flaticon-suntour-children box-icon"></i>
                  <select>
                    <option>Child</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="selection-box"><i class="flaticon-suntour-bed box-icon"></i>
                  <select>
                    <option>Room</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 clearfix">
                  <div class="widget-price-slider float-left">
                    <form method="get" action="#">
                      <div class="price_slider_wrapper">
                        <div aria-disabled="false" class="price_slider price_slider_amount ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                          <div class="ui-slider-range ui-widget-header ui-corner-all"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">
                            <div style="" class="price_label"><span class="from"></span></div></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">
                            <div style="" class="price_label"><span class="to"></span></div></a>
                        </div>
                        <div class="price_slider_amount addon">
                          <input id="min_price" type="text" name="min_price" value="" data-min="0" placeholder="Min price" style="display: none;">
                          <input id="max_price" type="text" name="max_price" value="" data-max="200" placeholder="Max price" style="display: none;">
                          <input type="hidden" name="post_type" value="product">
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="rating">Rating
                    <div class="stars stars-5"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="tours-search">
                    <form method="post" class="form search">
                      <div class="search-wrap">
                        <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                      </div>
                    </form>
                    <div class="button-search">Search</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Recomended item-->
          <div class="col-md-6">
            <div class="recom-item border">
              <div class="recom-media"><a href="hotels-details.html">
                  <div class="pic"><img src="pic/recomended/1.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                <div class="location"><i class="flaticon-suntour-map"></i> Istanbul, Turkey</div>
              </div>
              <!-- Recomended Content-->
              <div class="recom-item-body"><a href="hotels-details.html">
                  <h6 class="blog-title">Hotel Bohemians</h6></a>
                <div class="stars stars-4"></div>
                <div class="recom-price"><span class="font-4">$90</span> per night</div>
                <p class="mb-30">Quisque egestas a est in convallis. Maecenas pellentesque.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                <div class="action font-2">20%</div>
              </div>
              <!-- Recomended Image-->
            </div>
          </div>
          <!-- ! Recomended item-->
          <!-- Recomended item-->
          <div class="col-md-6">
            <div class="recom-item border">
              <div class="recom-media"><a href="hotels-details.html">
                  <div class="pic"><img src="pic/recomended/2.jpg" data-at2x="pic/recomended/2@2x.jpg" alt></div></a>
                <div class="location"><i class="flaticon-suntour-map"></i> Praga, Czech Republic</div>
              </div>
              <!-- Recomended Content-->
              <div class="recom-item-body"><a href="hotels-details.html">
                  <h6 class="blog-title">Easyhotel</h6></a>
                <div class="stars stars-3"></div>
                <div class="recom-price"><span class="font-4">$35</span> per night</div>
                <p class="mb-30">Mauris eget hendrerit diam. Praesent a lacinia ex.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
              </div>
              <!-- Recomended Image-->
            </div>
          </div>
          <!-- ! Recomended item-->
          <!-- Recomended item-->
          <div class="col-md-6">
            <div class="recom-item border">
              <div class="recom-media"><a href="hotels-details.html">
                  <div class="pic"><img src="pic/recomended/3.jpg" data-at2x="pic/recomended/3@2x.jpg" alt></div></a>
                <div class="location"><i class="flaticon-suntour-map"></i> Isle of Colonsay, United...</div>
              </div>
              <!-- Recomended Content-->
              <div class="recom-item-body"><a href="hotels-details.html">
                  <h6 class="blog-title">Dolce Villa</h6></a>
                <div class="stars stars-5"></div>
                <div class="recom-price"><span class="font-4">$110</span> per night</div>
                <p class="mb-30">Suspe elit nibh, auctor ac quam id, maximus efficitur justo.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
              </div>
              <!-- Recomended Image-->
            </div>
          </div>
          <!-- ! Recomended item-->
          <!-- Recomended item-->
          <div class="col-md-6">
            <div class="recom-item border">
              <div class="recom-media"><a href="hotels-details.html">
                  <div class="pic"><img src="pic/recomended/4.jpg" data-at2x="pic/recomended/4@2x.jpg" alt></div></a>
                <div class="location"><i class="flaticon-suntour-map"></i> St. Petersburg, Russia</div>
              </div>
              <!-- Recomended Content-->
              <div class="recom-item-body"><a href="hotels-details.html">
                  <h6 class="blog-title">Hotel Stary Pivovar</h6></a>
                <div class="stars stars-4"></div>
                <div class="recom-price"><span class="font-4">$55</span> per night</div>
                <p class="mb-30">Nullam posuere tincidunt metus, nec pulvinar risus imperdiet.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
              </div>
              <!-- Recomended Image-->
            </div>
          </div>
          <!-- ! Recomended item-->
          <!-- Recomended item-->
          <div class="col-md-6">
            <div class="recom-item border">
              <div class="recom-media"><a href="hotels-details.html">
                  <div class="pic"><img src="pic/recomended/5.jpg" data-at2x="pic/recomended/5@2x.jpg" alt></div></a>
                <div class="location"><i class="flaticon-suntour-map"></i> Vienna, Austria</div>
              </div>
              <!-- Recomended Content-->
              <div class="recom-item-body"><a href="hotels-details.html">
                  <h6 class="blog-title">Grand Hotel Wien</h6></a>
                <div class="stars stars-5"></div>
                <div class="recom-price"><span class="font-4">$98</span> per night</div>
                <p class="mb-30">Quisque egestas a est in convallis. Maecenas pellentesque.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
              </div>
              <!-- Recomended Image-->
            </div>
          </div>
          <!-- ! Recomended item-->
          <!-- Recomended item-->
          <div class="col-md-6">
            <div class="recom-item border">
              <div class="recom-media"><a href="hotels-details.html">
                  <div class="pic"><img src="pic/recomended/6.jpg" data-at2x="pic/recomended/6@2x.jpg" alt></div></a>
                <div class="location"><i class="flaticon-suntour-map"></i> Kraków, Poland</div>
              </div>
              <!-- Recomended Content-->
              <div class="recom-item-body"><a href="hotels-details.html">
                  <h6 class="blog-title">Hotel Wit Stwosz</h6></a>
                <div class="stars stars-3"></div>
                <div class="recom-price"><span class="font-4">$75</span> per night</div>
                <p class="mb-30">Quisque egestas a est in convallis. Maecenas pellentesque.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
              </div>
              <!-- Recomended Image-->
            </div>
          </div>
          <!-- ! Recomended item-->
        </div>
      </div>
 
    </div>
@endsection
