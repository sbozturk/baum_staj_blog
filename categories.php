<ul>
  <?php
  $query = $db -> query("SELECT category.name, COUNT(*) AS number
      FROM article INNER JOIN category
  		ON article.category=category.cid
  		GROUP BY cid", PDO::FETCH_ASSOC);
  if ($query->rowCount()) {
    foreach ($query as $row) { ?>
  <li><a href="#" title=""><?php echo $row["name"];?></a> (<?php echo $row["number"];?>)</li>
  <?php
              }
            }
            ?>
</ul>
