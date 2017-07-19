<ul>
  <?php
  $query = $db -> query("SELECT category.categoryName, COUNT(*) AS number
      FROM article INNER JOIN category
  		ON article.articleCategory=category.cid
  		GROUP BY cid", PDO::FETCH_ASSOC);
  if ($query->rowCount()) {
    foreach ($query as $row) { ?>
  <li><a href="#" title=""><?php echo $row["categoryName"];?></a> (<?php echo $row["number"];?>)</li>
  <?php
              }
            }
            ?>
</ul>
