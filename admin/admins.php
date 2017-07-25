<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
<?php require_once "header.php";
require_once "sidemenu.php"
 ?>
          <div class="row">
            <div class="col-md-6">
              <div class="content-box-header">
                <div class="panel-title">Add Admin</div>

              <div class="panel-options">
                <a href="?" data-rel="reload"><i class="glyphicon glyphicon-refresh"></i></a>
              </div>
              </div>
              <div class="content-box-large box-with-header">

    <form action="addAdmin.php" method="post">
                <div class="form-group">
                <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="userName" placeholder="Name" class="form-control" type="text">
                        </div>

                </div>

                <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="userSurname" placeholder="Surname" class="form-control" type="text">
                        </div>

                </div>

                <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="userEmail" placeholder="E-Mail Address" class="form-control" type="text">
                        </div>

                </div>

                <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input name="userPassword" placeholder="Password" class="form-control" type="password">
                        </div>

                </div>

                <!-- Button -->
                <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-block btn-primary">Send
                        </button>
                </div>
</form>

            </div>
            </div>
          </div>


		  	</div>

<?php require_once "footer.php" ?>
  </body>
</html>
