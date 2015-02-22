<?php include 'header.php';?>

    <div class="container-fluid">
      <div class="row">
        
        <?php include 'sidebar.php';?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Profile</h1>

          <div class="col-sm-5  col-md-5  main">
            <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          </div>

          <div class="col-sm-7  col-md-7 main">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Babina Waiba</h3>
              </div>
              <div class="panel-body">
                <table class="table table-condensed table-profile">
                  <tr>
                    <td colspan="2"><img src="image/photo.jpg" width="200px" /></td>
                  </tr>
                  <tr>
                    <td>Address:</td>
                    <td>Shantinagar</td>
                  </tr>
                  <tr>
                    <td>Mobile:</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>DOB:</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>POB:</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Gender:</td>
                    <td></td>
                  </tr>  
                </table>
              </div>
            </div>

          
          <div/>



      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>