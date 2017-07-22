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


		  <div class="col-md-10">
		  	<div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12 panel-warning">
                <div class="content-box-header panel-heading">
                  <div class="panel-title">Articles</div>

                <div class="panel-options">
                  <a href="?" data-rel="reload"><i class="glyphicon glyphicon-refresh"></i></a>
                </div>
                </div>
                <div class="content-box-large box-with-header">

                  <?php
                  $query = $db -> query("SELECT * FROM article ORDER BY articleTime DESC", PDO::FETCH_ASSOC);
                  if ($query->rowCount()) {
                    foreach ($query as $row) { ?>
                    <ul>
                      <li><a href="updateArticle.php?updateArticle=<?php echo $row["aid"];?>"><?php echo $row["articleName"];?> (<?php echo $row["articleTime"];?>)</a></li>
                    </ul>
                    <?php
                                }
                              }
                              ?>

                    <br /><br />
              </div>
              </div>
            </div>

          </div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12 panel-warning">
		  					<div class="content-box-header panel-heading">
			  					<div class="panel-title">Waiting Comments</div>

								<div class="panel-options">
									<a href="?" data-rel="reload"><i class="glyphicon glyphicon-refresh"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">

                  <!-- commentlist -->
                       <?php
                       $query = $db -> query("SELECT * FROM comment WHERE  commentPermission='0' ORDER BY commentTime DESC", PDO::FETCH_ASSOC);
                       if ($query->rowCount()) {
                         foreach ($query as $row) { ?>
                           <ul class="commentlist">
                           <li>
                        <div class="comment-content">
                          <div class="comment-info">
                             <cite><?php echo $row["commentName"];?></cite>
                             <div class="comment-meta">
                                <time class="comment-time" datetime="2014-07-12T23:05"><?php echo $row["commentTime"];?></time>
                             </div>
                          </div>
                          <div class="comment-text">
                             <p><?php echo $row["commentContent"];?></p>
                          </div>
                       </div>
                     </li>
                  </ul> <!-- Commentlist End -->
                  <?php
                              }
                            }
                            ?>

                    <br /><br />
							</div>
		  				</div>
		  			</div>

		  		</div>

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
                    <input type="text" class="form-control" id="categoryName" name="categoryName" required ="true">
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


          <div class="row">
            <div class="col-md-12">
              <div class="content-box-header">
                <div class="panel-title">Add Admin</div>

              <div class="panel-options">
                <a href="?" data-rel="reload"><i class="glyphicon glyphicon-refresh"></i></a>
              </div>
              </div>
              <div class="content-box-large box-with-header">

                Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
              <br /><br />
            </div>
            </div>
          </div>


		  	</div>

<?php require_once "footer.php" ?>
  </body>
</html>
