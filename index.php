<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
   <?php require_once "head.php"; ?>
</head>
<body>
<?php require_once "header.php"; ?>
   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

      <div id="main" class="eight columns">
          <?php
          $query = $db -> query("SELECT * FROM article ORDER BY time DESC", PDO::FETCH_ASSOC);
          if ($query->rowCount()) {
            foreach ($query as $row) { ?>

              <article class="entry">

                <header class="entry-header">

                  <h2 class="entry-title">
                    <a href="single.php" title=""><?php echo $row["name"];?></a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li><?php echo $row["time"]; ?></li>
                      <span class="meta-sep">&bull;</span>
                      <li><a href="#" title="" rel="category tag">Ghost</a></li>
                      <span class="meta-sep">&bull;</span>
                      <li>John Doe</li>
                    </ul>
                  </div>

                </header>

                <div class="entry-content">
                  <p><?php echo $row["content"]; ?></p>
                </div>

              </article> <!-- end entry -->
<?php
            }
          }
          ?>


   		</div> <!-- end main -->

   		<?php require_once "sidebar.php" ?>

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->

  <?php require_once "footer.php";
   require_once "javascript.php"; ?>
</body>

</html>
