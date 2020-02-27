<html>
    <head>
        <title>School</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           

        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- External CSS -->
    <link href="<?php echo base_url();?>css/style.css" type="text/css" rel="stylesheet">
    
    
  </head>
<body>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-sm-6 bg-white mx-auto" >

    <form class="text-center border border-light p-5" method="post" action="<?php echo base_url(); ?>register/validation">

        <p class="h4 mb-4">Register</p>

        <!-- Username-->
        <input type="text"  name = "username" class="form-control mb-4" placeholder="Username"/>
        <span class="text-danger"><?php echo form_error('username'); ?></span>

        <!-- Email -->
        <input type="email " id="defaultLoginFormEmail" name = "u_email" class="form-control mb-4" placeholder="E-mail"/>
        <span class="text-danger"><?php echo form_error('u_email'); ?></span>

        <input type="text" name = "u_address" class="form-control mb-4" placeholder="Address"> 
        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" name = "pword" class="form-control mb-4" placeholder="Password">
        <span class="text-danger"><?php echo form_error('pword'); ?></span>

        <select class="form-control mb-4" id="user_id" name = "user_id">
            <option value=1>Admin</option>
            <option value=2>Student</option>
        </select>

        <select class="form-control mb-4" id="course" name="course">
        <?php 
                foreach($row as $r)
                {
                    echo("<option value=".$r->course_id.">".$r->course_name."</option>");
                }
                ?>
            
        </select>
    

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit" name = "register" value = "Register" >Sign up</button>

    </form>

</div>

</body>
</html>