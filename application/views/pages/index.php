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
                <li class="active"><a href="<?php echo base_url();?>welcome" class="nav-link">Home</a></li>
                <li><a href="<?php echo base_url();?>welcome/features" class="nav-link">Features</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/pricing" class="nav-link">Pricing</a></li>
                
                <li class="has-children">
                  <a href="<?php echo base_url();?>login" class="nav-link">Account</a>
                  <ul class="dropdown">
                    <li><a href="<?php echo base_url();?>login" class="nav-link">Login</a></li>
                    <li><a href="<?php echo base_url();?>register" class="nav-link">Sign Up</a></li>
                    <li><a href="<?php echo base_url();?>registerschool" class="nav-link">Register School</a></li>
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
      <div class="hero-section">
        <div class="wave">

          <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                <path
                  d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                  id="Path"></path>
              </g>
            </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                  <h1 data-aos="fade-right">Isomarks App</h1>
                  <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Manage results and classroom activities on the go.</p>
                  <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#"
                      class="btn btn-outline-white">Get started</a></p>
                </div>
                <div class="col-lg-5 iphone-wrap">
                  <img src="<?php echo base_url(); ?>images/phone_2.png" alt="Image" class="phone-1" data-aos="fade-right">
                  <img src="<?php echo base_url(); ?>images/phone_1.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section">
        <div class="container">

          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
              <h2 class="section-heading">Save your time to using Isomarks</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon las la-globe"></span>
                </div>
                <h3 class="mb-3">Manage results anywhere</h3>
                <p>Insert and edit student results from your comfort place or the go.</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon las la-keyboard"></span>
                </div>
                <h3 class="mb-3">Simple User Interface</h3>
                <p>Easy to use User Interface making result management easier than ever.</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon las la-tools"></span>
                </div>
                <h3 class="mb-3">Useful tools</h3>
                <p>Teacher tools such as group maker, noise meter, parent communication services and more.</p>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5" data-aos="fade">
            <div class="col-md-6 mb-5">
              <img src="images/develop_app.svg" alt="Image" class="img-fluid">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="step">
                <span class="number">01</span>
                <h3>Sign Up</h3>
                <p>Register onto the IsoMarks platform by creating a profile.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">02</span>
                <h3>Verification</h3>
                <p>Your profile is verified by your school Administrator.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">03</span>
                <h3>Enjoy the app</h3>
                <p>Login to the app and enjoy the convinience of IsoMarks.</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->



      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto">
              <h2 class="mb-4">Seamlessly Communicate</h2>
              <p class="mb-4">Communicate to parents as well as students through the messaging service. You can use it to send 
                  student results or general communication to specific or all parents.</p>
              <p><a href="#">Download Now</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="<?php echo base_url(); ?>images/mail.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2">
              <h2 class="mb-4">Edit Results</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
                laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
                dolore mollitia esse natus beatae.</p>
              <p><a href="#">Download Now</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="images/note_list.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->


      <div class="site-section cta-section" id = "mydiv">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Get IsoMarks Today</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p> <a href="#"
                  class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div>


    </main>
    