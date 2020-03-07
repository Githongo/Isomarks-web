<body>
    
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="welcome" class="mb-0">IsoMarks</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?php echo base_url();?>welcome" class="nav-link">Home</a></li>
                <li><a href="<?php echo base_url();?>welcome/features" class="nav-link">Features</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>welcome/pricing" class="nav-link">Pricing</a></li>
                
                <li class="has-children">
                  <a href="<?php echo base_url();?>login" class="nav-link">Account</a>
                  <ul class="dropdown">
                    <li><a href="<?php echo base_url();?>login" class="nav-link">Login</a></li>
                    <li><a href="<?php echo base_url();?>register" class="nav-link">Sign Up</a></li>
                    <li><a href="<?php echo base_url();?>registerschool" class="nav-link">Register a School</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url();?>welcome/contact" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>
      
    </header>


<main id="main">
      <div class="hero-section inner-page">
        <div class="wave">
          
          <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                      <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                  </g>
              </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                  <h1 data-aos="fade-up" data-aos-delay="">Our Pricing</h1>
                  <p class="mb-5" data-aos="fade-up"  data-aos-delay="100">Our pricing structures are simple and transparent.</p>  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      

      <div class="site-section">
        <div class="container">
          
          <div class="row justify-content-center text-center">
            <div class="col-md-7 mb-5">
              <h2 class="section-heading">Calculate Price</h2>
              <p>Our price is based on the size of your school.</p>
            </div>
          </div>
          <div class="row justify-content-center">

            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="pricing h-100 text-center">
                <span>&nbsp;</span>
                <h5>Breakdown</h5>
                <ul class="list-unstyled">
                  <li>Registration fee - KES 10,000</li>
                  <li>Unit Record fee - KES 20/Student</li>
                </ul>
                <input type="number" class="form-control" placeholder="No. of Students" onchange="getTotal(this.value)" autofocus>
                <div class="my-2"></div>
                <div class="price-cta">
                  <strong class="price" id="Total">KES 10000</strong>
                  <p><a href="#" class="btn btn-white">Register</a></p>
                </div>
                <p id="Promo" style="color: red"></p>
              </div>
            </div>
          
          </div>
        </div>
      </div>

      

      <div class="site-section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Get the IsoMarks App</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p><a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div>


    </main>

    <script>
       function getTotal(stdnum){
          var Total = (stdnum*20)+10000;
          var SMS = (stdnum*2);
          document.getElementById('Total').innerHTML = "KES "+Total;
          if(Total > 12000){
            document.getElementById('Promo').innerHTML = "Eligible for "+SMS+" free SMS";
          }
          
          else{
            document.getElementById('Promo').innerHTML = "";
          }
      }

    </script>