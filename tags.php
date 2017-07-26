<div class="widget widget_tags">
    <h3>Post Tags.</h3>
    <div class="tagcloud group">
        <?php
         $query = $db -> query("SELECT * FROM tag", PDO::FETCH_ASSOC);
        if ($query->rowCount()) {
        foreach ($query as $row) { ?>
        <a href="tagPage.php?tag=<?php echo $row["tagName"];?>"><?php echo $row["tagName"];?></a>
        <?php
                      }
                    }
                    ?>
    </div>
</div>
