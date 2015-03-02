<?php 
include 'header.php';
include 'class/birth-reg-class.php';
include 'class/marriage-reg-class.php';
$birthobj = new birthReg;
$totalbirthreg = $birthobj->getTotalBirthRegistration();
$marriageobj = new marriageReg;
$result = $marriageobj->getAllMarriageRegistration();


?>


    <div class="container-fluid">
      <div class="row">
        
        <?php include 'sidebar.php';?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Marriage Registration</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <button class="btn btn-primary" type="button">
                Total Birth Registration <span class="badge"><?php echo $totalbirthreg['NumberOfBirthRegistration']; ?></span>
              </button>
            </div>
           <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <button class="btn btn-primary" type="button">
                Total Marriage Registration <span class="badge">4</span>
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
          <a class="btn btn-primary" href="add-marriage-registration.php" role="button">New Marriage Registration</a>
          <h2 class="sub-header">Marriage Regestration List</h2>
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

         // $result = $birthobj->getAllBirthRegistration();

          ?>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>S.NO.</th>
                  <th>Full Name</th>
                  <th>Spouse Name</th>
                  <th>Date Of Marriage</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $i = 1;
              while($row = mysql_fetch_assoc($result))
              {
               // print_r($row);
                //exit;

                
                ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row['fullname'];?></td>
                  <td><?php echo $row['spousename'];?></td>
                  <td><?php echo $row['dom'];?></td>
                  <td><a href="edit-marriage-registration.php?id=<?php echo $row['id'];?>">Edit</a>|<a href="action_marriage_registration.php?delete_marriageid=<?php echo $row['id'];?>">Delete</a></td>

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