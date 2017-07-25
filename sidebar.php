<div id="sidebar" class="four columns">
    <div class="widget widget_search">
        <h3>Search</h3>
        <form action="search.php" method="post">
            <input type="text" name="search" value="Search here..."
                   onblur="if(this.value == '') { this.value = 'Search here...'; }"
                   onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
            <input type="submit" value="" class="submit-search">
        </form>
    </div>
    <div class="widget widget_categories group">
        <h3>Categories.</h3>
        <?php include "categories.php"; ?>
    </div>
    <?php require_once "tags.php"; ?>
    <div class="widget widget_popular">
        <h3>Popular Posts.</h3>
        <?php
         $query = $db -> query("SELECT comment.commentArticle, COUNT(*) AS commentNumber
        FROM comment INNER JOIN article
        ON article.aid=comid
        GROUP BY commentArticle ORDER BY commentNumber DESC LIMIT 3", PDO::FETCH_ASSOC);
        if ($query->rowCount()) {
        foreach ($query as $row) { ?>
        <ul class="link-list">
            <li><a href="single.php?article=<?php echo $row[" commentArticle"];?>"><?php
                $commentArticle =  $row["commentArticle"];
                $query = $db -> query("SELECT * FROM article WHERE aid=$commentArticle", PDO::FETCH_ASSOC);
                if ($query->rowCount()) {
                foreach ($query as $row) {
                echo $row["articleName"];
                }
                }
                ?>.</a></li>
        </ul> <!-- end #nav -->
        <?php
                       }
                     }
                     ?>
    </div>
</div> <!-- end sidebar -->
