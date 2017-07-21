<!DOCTYPE html>
<html>
  <head>
    <title>Update Article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

  </head>
  <body>
    <?php require_once "header.php";
    require_once "sidemenu.php"
     ?>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Update Article</div>

					            <div class="panel-options">
					              <a href="?" data-rel="reload"><i class="glyphicon glyphicon-refresh"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
                  <?php
                  $query = $db -> query("SELECT * FROM article
                  INNER JOIN category ON category.cid = article.articleCategory
                  INNER JOIN user ON user.uid = article.articleUser WHERE article.aid = $_GET[updateArticle]", PDO::FETCH_ASSOC);
                  if ($query->rowCount()) {
                    foreach ($query as $row) { ?>
			  					<form class="form-horizontal" action="save.php" method="post" role="form">
								  <div class="form-group">
								    <label for="articleName" class="col-sm-2 control-label">Article Name</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="articleName" name="articleName" value="<?php echo $row["articleName"]; ?>" required ="true">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="articleContent" label class="col-sm-2 control-label">Article Content</label>
								    <div class="col-sm-10">
								      <textarea type="text" class="form-control" id="articleContent" name="articleContent" rows="5" required ="true"><?php echo $row["articleContent"]; ?></textarea>
								    </div>
								  </div>
                  <div class="form-group">
                   <label for="articleTag" class="col-sm-2 control-label"> Tags</label>
                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="articleTag" name="articleTag" value="<?php echo $row["articleTag"]; ?>" required ="true">
                   </div>
                 </div>
                 <div class="form-group">
    <label class="col-md-4 control-label">Category</label>
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"></span>
            <select name="articleCategory" class="form-control selectpicker" value="<?php echo $row["articleCategory"]; ?>">
                <option value="1">Uncategorized</option>
                <option value="2">Technology</option>
                <option value="3">Sport</option>
                <option value="4">Science</option>
                <option value="5">Culture</option>
                <option value="6">Cars</option>
                <option value="7">Blog</option>
            </select>
        </div>
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
            <?php
                        }
                      }
                      ?>
	  		<!--  Page content -->
		  </div>
		</div>
    </div>


    <?php require_once "footerForm.php" ?>
  </body>
</html>
