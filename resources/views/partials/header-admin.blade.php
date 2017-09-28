    <!-- header page-->
    <header>
      <!-- site top panel-->
      <div class="site-top-panel">
        <div class="container p-relative">
          <div class="row">
            <div class="col-md-6 col-sm-7">
              <!-- lang select wrapper-->
              <div class="top-left-wrap font-3">
                <div class="mail-top"><a href="mailto:info@scubatribemaldives.com"> <i class="flaticon-suntour-email"></i>info@scubatribemaldives.com</a></div><span>/</span>
                <div class="tel-top"><a href="tel:7465333"> <i class="flaticon-suntour-phone"></i>(960)-7465333</a></div>
              </div>
              <!-- ! lang select wrapper-->
            </div>
            <div class="col-md-6 col-sm-5 text-right">
              <div class="top-right-wrap">
                <div class="top-login"><a href="#">My Account</a></div>
                <div class="curr-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Currency<i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">USD</a></li>
                          <li><a href="#">EUR</a></li>
                          <li> <a href="#">GBP</a></li>
                          <li> <a href="#">AUD</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="lang-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Language <i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">English</a></li>
                          <li> <a href="#">Deutsch</a></li>
                          <li> <a href="#">Espanol</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ! site top panel-->
      <!-- Navigation panel-->
      <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <div class="nav-logo-wrap local-scroll"><a href="{{ url('/') }}" class="logo"><img src="/img/logo-scuba-admin.png" data-at2x="/img/logo-scuba-admin.png" alt height="50px"></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav">
            <ul class="clearlist">
              <!-- Home -->
              <li>
                <a href="{{ url('/') }}" class="active">Back to Home</a>
              </li>
              <li class="slash">/</li>
              <!-- End Home -->
              
              <!-- Liveaboard -->
              <li class="active">
                <a href="{{ url('/liveaboard') }}">All Liveaboards</a>
              </li>
              <li class="slash">/</li>
              <!-- End Liveaboard -->

              <!-- Catamaran -->
              <li>
                <a href="{{ url('/catamaran') }}">All Catamarans</a>
              </li>
              <li class="slash">/</li>
              <!-- End Catamaran -->

              <!-- Diving Spots -->
              <li>
                <a href="{{ url('/diving-spots') }}">All Diving Spots</a>
              </li>              
              <li class="slash">/</li>
              <!-- End Diving Spots -->
              <!-- Search
              <li class="search"><a href="#" class="mn-has-sub">Search</a>
                <ul class="search-sub">
                  <li>
                    <div class="container">
                      <div class="mn-wrap">
                        <form method="post" class="form">
                          <div class="search-wrap">
                            <input type="text" placeholder="Where will you go next?" class="form-control search-field"><i class="flaticon-suntour-search search-icon"></i>
                          </div>
                        </form>
                      </div>
                      <div class="close-button"><span>Search</span></div>
                    </div>
                  </li>
                </ul>
              </li>
              End Search-->
            </ul>
          </div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
    </header>
    <!-- ! header page-->