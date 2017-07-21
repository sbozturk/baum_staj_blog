<!-- Footer
================================================== -->
<footer>

   <div class="row">

     <div class="twelve columns">
     <ul class="social-links">
            <li><a href="
              <?php
              $query = $db -> query("SELECT * FROM social where smid = '1' ", PDO::FETCH_ASSOC);
              if ($query->rowCount()) {
                foreach ($query as $row) {
                  echo $row["socialUsername"];
                }} ?>
              "><i class="fa fa-facebook"></i></a></li>
            <li><a href="
              <?php
              $query = $db -> query("SELECT * FROM social where smid = '2' ", PDO::FETCH_ASSOC);
              if ($query->rowCount()) {
                foreach ($query as $row) {
                  echo $row["socialUsername"];
                }} ?>
              "><i class="fa fa-twitter"></i></a></li>
            <li><a href="
              <?php
              $query = $db -> query("SELECT * FROM social where smid = '3' ", PDO::FETCH_ASSOC);
              if ($query->rowCount()) {
                foreach ($query as $row) {
                  echo $row["socialUsername"];
                }} ?>
              "><i class="fa fa-github-square"></i></a></li>
            <li><a href="
              <?php
              $query = $db -> query("SELECT * FROM social where smid = '4' ", PDO::FETCH_ASSOC);
              if ($query->rowCount()) {
                foreach ($query as $row) {
                  echo $row["socialUsername"];
                }} ?>
              "><i class="fa fa-instagram"></i></a></li>
         </ul>
     </div>

      <div class="six columns info">

         <h3>About Keep It Simple</h3>

         <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
         Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
         nibh id elit.
         </p>

         <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint
         sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

      </div>

      <div class="four columns">

         <h3>Photostream</h3>

         <ul class="photostream group">
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
         </ul>

      </div>

      <div class="two columns">
         <h3 class="social">Navigate</h3>
         <?php
         $query = $db -> query("SELECT * FROM menu", PDO::FETCH_ASSOC);
         if ($query->rowCount()) {
           foreach ($query as $row) { ?>
         <ul class="navigate group">
            <li><a href="<?php echo $row["menuFolderName"];?>.php"><?php echo $row["menuName"];?></a></li>
         </ul>
         <?php
                     }
                   }
                   ?>
      </div>

      <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>

   </div> <!-- End row -->

   <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

</footer> <!-- End Footer-->
