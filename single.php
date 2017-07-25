<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php require_once "head.php";?>
</head>
<body class="single">
<?php require_once "header.php";?>
<!-- Content
================================================== -->
<div id="content-wrap">
    <div class="row">
        <div id="main" class="eight columns">
            <?php
        $query = $db -> query("SELECT * FROM article
            INNER JOIN category ON category.cid = article.articleCategory
            INNER JOIN user ON user.uid = article.articleUser WHERE article.aid=$_GET[article] ORDER BY articleTime
            DESC", PDO::FETCH_ASSOC);
            if ($query->rowCount()) {
            foreach ($query as $row) { ?>
            <article class="entry">
                <header class="entry-header">
                    <h2 class="entry-title">
                        <?php echo $row["articleName"];?>
                    </h2>
                    <div class="entry-meta">
                        <ul>
                            <li><?php echo $row["articleTime"];?></li>
                            <span class="meta-sep">&bull;</span>
                            <li>
                                <a href="#" title="" rel="category tag"><?php echo $row["categoryName"];?></a>
                            </li>
                            <span class="meta-sep">&bull;</span>
                            <li><?php echo $row["userName"];?> <?php echo $row["userSurname"];?></li>
                        </ul>
                    </div>
                </header>
                <div class="entry-content">
                    <p class="lead"></p>
                    <p><?php echo $row["articleContent"];?></p>
                </div>
                <p class="tags">
                    <span>Tagged in </span>:
                    <?php
                $tag=explode(" ",  $row["articleTag"]);
                foreach ($tag as $tags) {?>
                    <a href="tagPage.php?tag=<?php echo $tags;?>"><?php echo $tags; ?></a>  </a>
                    <?php  }?>
                </p>
                <ul class="post-nav group">
                    <li class="prev"><a rel="prev" href="single.php?article=<?php
                    if($row[" aid"]!="1"){
                        echo $row["aid"]-1;
                        } else {
                        echo $row["aid"];
                        }
                        ?>"><strong>Previous Article</strong></a></li>
                    <li class="next"><a rel="next" href="single.php?article=<?php echo $row[" aid"]+1;?>"><strong>Next
                        Article</strong></a></li>
                </ul>
            </article>
            <?php
                    }
                  }
                  ?>
            <!-- Comments
        ================================================== -->
            <div id="comments">
                <!-- commentlist -->
                <?php
                    $query = $db -> query("SELECT * FROM comment WHERE comment.commentArticle=$_GET[article] AND
                commentPermission='1' ORDER BY commentTime DESC", PDO::FETCH_ASSOC);
                if ($query->rowCount()) {
                foreach ($query as $row) { ?>
                <ol class="commentlist">
                    <li class="depth-1">
                        <div class="avatar">
                            <img width="50" height="50" class="avatar" src="images/user-01.png" alt="">
                        </div>
                        <div class="comment-content">
                            <div class="comment-info">
                                <cite><?php echo $row["commentName"];?></cite>
                                <div class="comment-meta">
                                    <time class="comment-time"
                                          datetime="2014-07-12T23:05"><?php echo $row["commentTime"];?></time>
                                </div>
                            </div>
                            <div class="comment-text">
                                <p><?php echo $row["commentContent"];?></p>
                            </div>
                        </div>
                    </li>
                </ol> <!-- Commentlist End -->
                <?php
                           }
                         }
                         ?>
                <!-- respond -->
                <div class="respond">
                    <h3>Leave a Comment</h3>
                    <!-- form -->
                    <form name="contactForm" id="contactForm" method="post" action="comment.php">
                        <fieldset>
                            <div class="group">
                                <label for="cName">Name <span class="required">*</span></label>
                                <input name="cName" type="text" id="cName" size="35" value=""/>
                            </div>
                            <div class="group">
                                <label for="cEmail">Email <span class="required">*</span></label>
                                <input name="cEmail" type="text" id="cEmail" size="35" value=""/>
                            </div>
                            <div class="group">
                                <label for="cWebsite">Website</label>
                                <input name="cWebsite" type="text" id="cWebsite" size="35" value=""/>
                            </div>
                            <div class="message group">
                                <label for="cMessage">Message <span class="required">*</span></label>
                                <textarea name="cMessage" id="cMessage" rows="10" cols="50"></textarea>
                            </div>
                            <input type="hidden" name="articleId" value="<?php echo $_GET[" article"]; ?>">
                            <button type="submit" class="submit">Submit</button>
                        </fieldset>
                    </form> <!-- Form End -->
                </div> <!-- Respond End -->
            </div>  <!-- Comments End -->
        </div> <!-- main End -->
        <?php require_once "sidebar.php";?>
    </div> <!-- end row -->
</div> <!-- end content-wrap -->
<?php require_once "footer.php";
    require_once "javascript.php"; ?>
</body>
</html>
