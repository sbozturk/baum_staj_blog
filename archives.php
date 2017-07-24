<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

  <?php require_once "head.php"; ?>

</head>

<body class="page">

  <?php require_once "header.php"; ?>

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

   			<section class="page">

					<div class="row archive-list">

						<div class="twelve columns">

							<h4>Last 10 Posts.</h4>
              <?php
              $query = $db -> query("SELECT * FROM article ORDER BY articleTime DESC LIMIT 10", PDO::FETCH_ASSOC);
              if ($query->rowCount()) {
                foreach ($query as $row) { ?>
				      	<ul>
				      		<li><a href="single.php?article=<?php echo $row["aid"];?>"><?php echo $row["articleName"];?></a></li>
				      	</ul>
                <?php
                            }
                          }
                          ?>
						</div>


					</div> <!-- end row -->

			      <div class="row archive-list">

						<div class="twelve columns">

							<h4>Archives By Category.</h4>

				      	<?php require_once "categories.php"; ?>


						</div>

						<div class="twelve columns">

							<h4>Site Map.</h4>
              <?php
              $query = $db -> query("SELECT * FROM menu", PDO::FETCH_ASSOC);
              if ($query->rowCount()) {
                foreach ($query as $row) { ?>
				      	<ul>
				      		<li><a href="<?php echo $row["menuFolderName"];?>.php"><?php $name = $row["menuName"];
                  $name = strtolower($name);
                  $name = ucwords($name);
                  echo $name;
                  ?></a></li>
				      	</ul>
                <?php
                            }
                          }
                          ?>
						</div>

			      </div>

				</section> <!-- End page -->

   		</div> <!-- End main -->


   		<?php require_once "sidebar.php" ?>

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->


   <?php require_once "footer.php";
    require_once "javascript.php"; ?>

</body>

</html>
