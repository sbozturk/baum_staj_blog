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
            <div class="panel-title">Add Category</div>

            <div class="panel-options">
                <a href="?" data-rel="reload"><i class="glyphicon glyphicon-refresh"></i></a>
            </div>
        </div>
        <div class="content-box-large box-with-header">
            <form class="form-horizontal" action="addCategory.php" method="post" role="form">
                <div class="form-group">
                    <label for="articleName" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="categoryName" name="categoryName" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
<?php require_once "footer.php" ?>
</body>
</html>
