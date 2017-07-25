<ul>
    <?php
  $query = $db -> query("SELECT category.categoryName, category.cid, COUNT(*) AS number
    FROM article INNER JOIN category
    ON article.articleCategory=category.cid
    GROUP BY cid", PDO::FETCH_ASSOC);
    if ($query->rowCount()) {
    foreach ($query as $row) { ?>
    <li><a href="categoryPage.php?category=<?php echo $row[" categoryName"];?>"
        title=""><?php echo $row["categoryName"];?></a> (<?php echo $row["number"];?>)
    </li>
    <?php
              }
            }
            ?>
</ul>
