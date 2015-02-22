<?php 
include 'header.php';
include 'class/dbconn.class.php';
$editobj = new dbconn;
$birth_id = $_GET['id'];
$result = $editobj->getBirthRegistrationById($birth_id);


?>

    <div class="container-fluid">
      <div class="row">
        
        <?php include 'sidebar.php';?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Edit Birth Registration</h1>

          <!-- Content goes below this -->
            <?php
           
             if($_GET['status'] == 'success')
             { ?>
                <div class="alert alert-success" role="alert">Birth Registration Updated Successfully</div>
            <?php }
             else if($_GET['status'] == 'failed')
             { ?>
                <div class="alert alert-danger" role="alert">Birth Registration Update Failed</div>

            <?php } 
            ?>
            
            
            <form action="action_birthregistration.php" method="POST">
            <input type="hidden" name="form_id" value="editbirthregistration">
            <input type="hidden" name="id" value="<?php echo $birth_id ; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="full_name" value="<?php echo $result['fullname'];  ?>" id="full-name" placeholder="Enter fullname">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Gender</label></br>
                <input type="radio" class="" name="gender" value="Male" <?php if($result['gender']=='Male'){?>checked="checked"<?php }?> > Male
                <input type="radio" class="" name="gender" value="Female" <?php if($result['gender']=='Female'){?> checked="checked"<?php }?> > Female
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Date Of Birth</label>
                <input type="text" class="form-control" name="date_of_birth" value="<?php echo $result['dob'];?>" id="date-of-birth" placeholder="Enter date of birth">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Father's Name</label>
                <input type="text" class="form-control" name="father_name" value="<?php echo $result['fathername'];?>"  id="father's-name" placeholder="Enter father's name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mother's Name</label>
                <input type="text" class="form-control" name="mother_name" value="<?php echo $result['mothername'];?>" id="mother's-name" placeholder="Enter mother's name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Grandfather's Name</label>
                <input type="text" class="form-control" name="grandfather_name" value="<?php echo $result['grandfathername'];?>" id="grandfather's-name" placeholder="Enter grandfather's name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Steert Address</label>
                <input type="text" class="form-control" name="street_address" value="<?php echo $result['streetaddress']; ?>" id="street-address" placeholder="Enter steet address">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Ward No</label>
                <select class="form-control" name="ward_no">
                <option>Select ward</option>
                  <?php for ($i=1; $i < 11 ; $i++) { ?> 
                    <option <?php if($result['wardno'] == $i){?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php } ?>
                  
                  
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
              <button type="submit" class="btn btn-default">Submit</button>
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