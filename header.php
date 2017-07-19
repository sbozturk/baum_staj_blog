<!-- Header
================================================== -->
<?php require_once "database.php"; ?>
<header id="top">

 <div class="row">

   <div class="header-content twelve columns">

       <h1 id="logo-text"><a href="index.php" title="">Keep It Simple.</a></h1>
     <p id="intro">Put your awesome slogan here...</p>

   </div>

  </div>

  <nav id="nav-wrap">

   <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
    <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

   <div class="row">
     <?php
     $query = $db -> query("SELECT * FROM menu", PDO::FETCH_ASSOC);
     if ($query->rowCount()) {
       foreach ($query as $row) { ?>

       <ul id="nav" class="nav">
           <li><a href="<?php echo $row["menuFolderName"];?>.php"><?php echo $row["menuName"];?></a></li>

       </ul> <!-- end #nav -->
       <?php
                   }
                 }
                 ?>
   </div>

  </nav> <!-- end #nav-wrap -->

</header> <!-- Header End -->
