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
                <li class="active"><a href="<?php echo base_url();?>welcome/features" class="nav-link">Features</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/pricing" class="nav-link">Pricing</a></li>
                
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
                  <h1 data-aos="fade-up" data-aos-delay="">IsoMarks Features</h1>
                  <p class="mb-5" data-aos="fade-up"  data-aos-delay="100">Our App is lined with features perfect for your school.</p>  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      

      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto">
              <h2 class="mb-4">Seamlessly Communicate</h2>
              <p class="mb-4">Communicate to parents as well as students through the messaging service. You can use it to send 
                  student results or general communication to specific or all parents.</p>
              <p><a href="<?php echo base_url()?>welcome/#mydiv">Read More</a></p>
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
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
              <p><a href="#">Read More</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="<?php echo base_url(); ?>images/note_list.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto">
              <h2 class="mb-4">Branded SMS</h2>
              <p class="mb-4">Send Text Messages with the name of your School rather than the default IsoMarks Sender ID. For Example if your
                  School's name is Example High School, Your sender ID could be Example High.
              </p>
              <p><a href="#">Read More</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="<?php echo base_url(); ?>images/verified.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2">
              <h2 class="mb-4">Classroom Tools </h2>
              <p class="mb-4">With additional tools in the app such as Group Maker, class register and Timer, the teaching experience in the classroom can be an easier one. </p>
              <p><a href="#">Read More</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="<?php echo base_url(); ?>images/mobile_app.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->


      <div class="site-section border-top border-bottom">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
              <h2 class="section-heading">Review From Our Users</h2>
            </div>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-md-7">
              <div class="owl-carousel testimonial-carousel">
                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Excellent App!</h3>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                  </blockquote>

                  

                  <p class="review-user">
                    <img src="<?php echo base_url(); ?>img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Jean Doe</span>, &mdash; App User
                    </span>
                  </p>

                </div>

                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>This App is easy to use!</h3>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                  </blockquote>

                  

                  <p class="review-user">
                    <img src="<?php echo base_url(); ?>img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Johan Smith</span>, &mdash; App User
                    </span>
                  </p>

                </div>


                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Awesome functionality!</h3>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                  </blockquote>

                  

                  <p class="review-user">
                    <img src="<?php echo base_url(); ?>img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Jean Thunberg</span>, &mdash; App User
                    </span>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      

      <div class="site-section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Get the Isomarks App</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p><a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div>


    </main>