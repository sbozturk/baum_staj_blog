<div id="sidebar" class="four columns">

  <div class="widget widget_search">
            <h3>Search</h3>
            <form action="#">

               <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
               <input type="submit" value="" class="submit-search">

            </form>
         </div>

         <div class="widget widget_categories group">
           <h3>Categories.</h3>
           <?php require_once "categories.php"; ?>
         </div>



  <div class="widget widget_text group">
    <h3>Widget Text.</h3>

    <p>Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.</p>

  </div>

  <?php require_once "tags.php"; ?>

      <div class="widget widget_popular">
         <h3>Popular Post.</h3>

         <ul class="link-list">
            <li><a href="#">Sint cillum consectetur voluptate.</a></li>
            <li><a href="#">Lorem ipsum Ullamco commodo.</a></li>
            <li><a href="#">Fugiat minim eiusmod do.</a></li>
         </ul>

      </div>

</div> <!-- end sidebar -->
