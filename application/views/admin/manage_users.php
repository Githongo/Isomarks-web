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

<div style="margin-left: 20%;">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">USER_ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">ROLE</th>
      <th scope="col">COURSE</th>
      <th scope="col">ACTIONS</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  <?php 
  foreach($row as $r)
  {
  ?>
    <tr>
      <td></td>
      <td><?php echo $r->user_id; ?></td>
      <td><?php echo $r->user_name; ?></td>
      <td><?php echo $r->user_email; ?></td>
      <td><?php echo $r->user_address; ?></td>
      
      <td><?php
        if($r->user_role_id == 1){
            echo "ADMIN";
        }
        elseif($r->user_role_id== 2){
            echo "<h6 style = 'color: green'>STUDENT</h6>";
        }
        
      ?></td>
      <td><?php echo $r->course_name; ?></td>
      <td><button onclick=" //modal content setting js
                  var user_id = document.getElementById('user_ID');
                  user_id.value = '<?php echo $r->user_id; ?>';
                  var userName = document.getElementById('user_name');
                  userName.value = '<?php echo $r->user_name; ?>';
                  var userEmail = document.getElementById('user_email');
                  userEmail.value = '<?php echo $r->user_email; ?>';
                  "
             class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fas fa-user-cog"></i></button></td>
    
      <td>
          <?php
          if($r->suspended == false){
              echo "<a href = '".base_url()."admin/block_user/".$r->user_id."' class = 'btn btn-danger'>Block <i class='fas fa-user-slash'></i></a>";
          }
          else{
            echo "<a href = '".base_url()."admin/unblock_user/".$r->user_id."' class = 'btn btn-danger'>UNBLOCK <i class='fas fa-user-check'></i></a>";
          }
          
            
    
    ?>
  
    <?php } ?>

   
  </tbody>
</table>
</div>

<div class="modal " id="myModal" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="item_name" class="modal-title">Change Access Level <i class="fas fa-user-shield"></i></h4>
        <button onclick="location.reload()" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal_body">
      <form method="POST" action='<?php echo base_url(); ?>admin/change_access' enctype='multipart/form-data'>
        <input type = "hidden" id="user_ID" name="user_id" readonly>
        <label> Username: (<i class="fas fa-comment-slash"></i>):<input type = "text" id="user_name" name="userName" readonly></label><br>
        <label> Email: (<i class="fas fa-comment-slash"></i>):<input type = "email" id="user_email" name="userEmail" readonly style="width: 100%"></label><br>
        <label style ="font-size: 20px;">Choose new access level: </label>
        <select name="userType" id="selector"  >
            <option value = "admin">Admin</option>
            <option value = "student">Student</option>
        </select>
        
      
      </div>

  

      <!-- Modal footer -->
      <div class="modal-footer">
        
        <center><button class="btnstyle" type="submit" value="Submit" name="upload">Save</button><br><br></center>
        
      </div>
      </form>
    </div>
  </div>
</div>
<!--modale end-->
<br>
<br>
<br>
<br>
<br>
<br>



</div>