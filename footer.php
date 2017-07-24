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

      <p class="copyright">&copy; Copyright 2017 Satuk Buğrahan ÖZTÜRK. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>

   </div> <!-- End row -->

   <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

</footer> <!-- End Footer-->
