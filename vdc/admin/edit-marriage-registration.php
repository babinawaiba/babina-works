<?php 

  include 'header.php';
  include 'class/birth-reg-class.php';
  $birth_obj = new birthReg;
  $allbirthreg = $birth_obj->getAllBirthRegistration();
  include 'class/marriage-reg-class.php';
  $marriage_obj = new marriageReg;
  $id = $_GET['id'];
  $marriagebyid = $marriage_obj->getMarriageRegistrationById($id);


?>

    <div class="container-fluid">
      <div class="row">
        
        <?php include 'sidebar.php';?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Edit Marriage Registration</h1>

          <!-- Content goes below this -->

            
          <?php //print_r($marriagebyid);?>
        
            <form action="action_marriage_registration.php" method="POST">
           
               <div class="form-group">
                <label for="exampleInputEmail1">Birth Registration</label>
                 <select class="form-control" name = "birthregid">
                  <?php 
                  while($row=mysql_fetch_assoc($allbirthreg))
                  
                  {?>


                    <option <?php if($row['id']==$marriagebyid['birthregid']){?>selected = "selected" <?php } ?> value = "<?php echo $row['id'];?> "><?php echo $row['fullname'];?> </option>
                    <?php
                  
                  } 
                  ?>
                  
                
              </select>
              </div>
            
              <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="full_name" value = "<?php echo $marriagebyid['fullname'];?>" id="full-name" placeholder="Enter fullname">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Spouse Name</label>
                <input type="text" class="form-control" name="spouse_name" value = "<?php echo $marriagebyid['spousename'];?>" id="spouse-name" placeholder="Enter Spouse fullname">
              </div>
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Date Of Marriage</label>
                <input type="text" class="form-control" name="date_of_marriage" value = "<?php echo $marriagebyid['dom']; ?>" id="date-of-marriage" placeholder="Enter date of marriage">
             
                   </select>
              </div>
              <!-- <div class="form-group"> 
                <label for="exampleInputFile">Father's Citizenship</label>
                <input type="file" id="exampleInputFile">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Your Photograph</label>
                <input type="file" id="exampleInputFile">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
              -->
              <button type="submit" name="action" value="editmarriagereg" class="btn btn-default">Submit</button>
            </form>


          <!-- Content goes above this -->
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>