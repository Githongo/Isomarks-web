<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
                <li><a href="<?php echo base_url(); ?>welcome/pricing" class="nav-link">Pricing</a></li>
                
                <li class="has-children active">
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

      <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Institution Account</h3></div>
                                    <div class="card-body">
                                        <form  runat="server" method="post" action="<?php echo base_url(); ?>registerschool/validation" enctype='multipart/form-data' autocomplete="off">
                                            
                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="imgInp">Upload Logo:</label>
                                                        <input type="file" name="logo_file" id="imgInp" class="form-control py-2" />
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group"><img id="blah" src="<?php echo base_url(); ?>images/default_logo.png" alt="logo image" class="img-fluid img-thumbnail" style="height: 30%; width: 30%" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">School Code</label><input class="form-control py-4" id="inputSchoolCode" name="schoolCode" type="text" placeholder="School Code" required="true" /></div>
                                                    <span class="text-danger"><?php echo form_error('schoolCode'); ?></span>
                                                  </div>
                                                <div class="col-md-8">
                                                    <div class="form-group"><label class="small mb-1" for="inputName">Institution's Name</label><input class="form-control py-4" id="inputLastName" name="schoolName" type="text" placeholder="Enter Official name" required="true" /></div>
                                                    <span class="text-danger"><?php echo form_error('schoolName'); ?></span>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-7">
                                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required="true" />
                                                    <span class="text-danger"><?php echo form_error('email'); ?></span></div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group"><label class="small mb-1" for="phone">Phone</label><input class="form-control py-4" id="phone" name="phone" type="number" placeholder="e.g 0712345678" required="true" />
                                                    <span class="text-danger"><?php echo form_error('phone'); ?></span></div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" name="inputPword" type="password" placeholder="Enter password" required="true" /></div>
                                                </div>
                                                <span class="text-danger"><?php echo form_error('inputPword'); ?></span>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input class="form-control py-4" id="inputConfirmPassword" name="confirmPword" type="password" placeholder="Confirm password" required="true" /></div>
                                                </div>
                                                <span class="text-danger"><?php echo form_error('confirmPword'); ?></span>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="true" >
                                                <label class="form-check-label" for="invalidCheck">
                                                  Agree to terms and conditions
                                                </label>
                                              </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-info btn-block my-4" type="submit" name = "register" value = "Register" >Sign up</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="#">Not sure about this process? Learn more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </main>

        <script>

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
                }

                $("#imgInp").change(function() {
                readURL(this);
                });
        </script>