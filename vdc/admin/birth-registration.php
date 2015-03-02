<?php 
include 'header.php';
include 'class/birth-reg-class.php';
$birthobj = new birthReg;
$totalbirthreg = $birthobj->getTotalBirthRegistration();
?>


    <div class="container-fluid">
      <div class="row">
        
        <?php include 'sidebar.php';?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Birth Registration</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <button class="btn btn-primary" type="button">
                Total Birth Registration <span class="badge"><?php echo $totalbirthreg['NumberOfBirthRegistration']; ?></span>
              </button>
            </div>
           <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <button class="btn btn-primary" type="button">
                Messages <span class="badge">4</span>
              </button>
            </div>
            <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <button class="btn btn-primary" type="button">
                Messages <span class="badge">4</span>
              </button>
            </div>
            <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <button class="btn btn-primary" type="button">
                Messages <span class="badge">4</span>
              </button>
            </div>
          </div>
          <a class="btn btn-primary" href="add-birth-registration.php" role="button">New Birth Registration</a>
          <h2 class="sub-header">Birth Regestration List</h2>
           <?php
           
             if(isset($_GET['status']) && $_GET['status'] == 'success')
             { ?>
                <div class="alert alert-success" role="alert">Birth Registration Deleted Successfully</div>
            <?php }
             else if(isset($_GET['status']) && $_GET['status'] == 'failed')
             { ?>
                <div class="alert alert-danger" role="alert">Delete Operation Failed!</div>

            <?php }
            ?>
          <?php 

          $result = $birthobj->getAllBirthRegistration();

          ?>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>S.NO.</th>
                  <th>FULLNAME</th>
                  <th>GENDER</th>
                  <th>DOB</th>
                  <th>FATHER'S NAME</th>
                  <th>MOTHER'S NAME</th>
                  <th>GRANDFATHER'S NAME</th>
                  <th>ADDRESS NAME</th>
                  <th>WARD NO NAME</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $i = 1;
              while($row = mysql_fetch_assoc($result))
              {
                
                ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row['fullname'];?></td>
                  <td><?php echo $row['gender'];?></td>
                  <td><?php echo $row['dob'];?></td>
                  <td><?php echo $row['fathername'];?></td>
                  <td><?php echo $row['mothername'];?></td>
                  <td><?php echo $row['grandfathername'];?></td>
                  <td><?php echo $row['streetaddress'];?></td>
                  <td><?php echo $row['wardno'];?></td>
                  <td><a href="edit-birth-registration.php?id=<?php echo $row['id'];?>">Edit</a>|<a href="action_birthregistration.php?delete_birthid=<?php echo $row['id'];?>">Delete</a></td>

                </tr> 
              <?php 
              $i++;
              } ?>
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>