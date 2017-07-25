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
          $search = $_POST['search'];
          $query = $db -> query("SELECT * FROM article
            INNER JOIN category ON category.cid = article.articleCategory
            INNER JOIN user ON user.uid = article.articleUser WHERE articleContent LIKE '%$search%' OR articleName LIKE
            '%$search%' ORDER BY articleTime DESC", PDO::FETCH_ASSOC);
            if ($query->rowCount()) {
            foreach ($query as $row) { ?>
            <article class="entry">
                <header class="entry-header">
                    <h2 class="entry-title">
                        <a href="single.php?article=<?php echo $row[" aid"];?>"
                        title=""><?php echo $row["articleName"];?></a>
                    </h2>
                    <div class="entry-meta">
                        <ul>
                            <li><?php echo $row["articleTime"]; ?></li>
                            <span class="meta-sep">&bull;</span>
                            <li><a href="categoryPage.php?category=<?php echo $row[" categoryName"];?>" title=""
                                rel="category tag"><?php echo $row["categoryName"];?></a></li>
                            <span class="meta-sep">&bull;</span>
                            <li><?php echo $row["userName"];?> <?php echo $row["userSurname"];?></li>
                        </ul>
                    </div>
                </header>
                <div class="entry-content">
                    <p><?php echo $row["articleContent"]; ?></p>
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
