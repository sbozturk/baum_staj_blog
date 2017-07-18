<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

  <?php require_once "head.php"; ?>

</head>

<body class="page">

  <?php require_once "header.php"; ?>

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

   			<section class="page">

					<h2>Archives.</h2>

					<p class="lead">Lorem ipsum Nisi enim est proident est magna occaecat dolore proident eu ex sunt consectetur consectetur dolore enim nisi exercitation adipisicing magna culpa commodo deserunt ut do Ut occaecat. Lorem ipsum Veniam consequat quis.</p>

					<div class="row archive-list">

						<div class="twelve columns">

							<h4>Last 10 Posts.</h4>

				      	<ul>
				      		<li><a href="">Dolor irure velit commodo cillum sit nulla</a></li>
				      		<li><a href="">laborum mollit quis nostrud sed</a></li>
				      		<li><a href="">consequat occaecat fugiat in adipisicing</a></li>
				      		<li><a href="">qui labore cillum sit in tempor veniam consequat</a></li>
				      		<li><a href="">quis nostrud sed sed</a></li>
				      		<li><a href="">quis proident ullamco ut dolore</a></li>
				      		<li><a href="">Dolor irure velit commodo cillum sit nulla</a></li>
				      		<li><a href="">veniam dolor dolor irure velit commodo cillum</a></li>
				      		<li><a href="">Dolor irure velit commodo cillum sit nulla</a></li>
				      		<li><a href="">voluptate enim veniam consequat occaecat</a></li>
				      	</ul>

						</div>

						<div class="twelve columns">

							<h4>Archives By Month.</h4>

					      	<ul>
					        		<li><a href="">July 2013</a></li>
					      		<li><a href="">August 2013</a></li>
					      		<li><a href="">September 2013</a></li>
					      		<li><a href="">October 2013</a></li>
					      		<li><a href="">November 2013</a></li>
					      		<li><a href="">December 2013</a></li>
					      	</ul>

						</div>

					</div> <!-- end row -->

			      <div class="row archive-list">

						<div class="twelve columns">

							<h4>Archives By Category.</h4>

				      	<?php require_once "categories.php"; ?>


						</div>

						<div class="twelve columns">

							<h4>Site Map.</h4>

				      	<ul>
				      		<li><a href="">Archives</a></li>
				      		<li><a href="">Home</a></li>
				      		<li><a href="">About Us</a></li>
				      		<li><a href="">Blog</a></li>
				      		<li><a href="">Demo</a></li>
				      		<li><a href="">Other Stuff</a></li>
				      	</ul>

						</div>

			      </div>

				</section> <!-- End page -->

   		</div> <!-- End main -->


   		<?php require_once "sidebar.php" ?>

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->


   <?php require_once "footer.php";
    require_once "javascript.php"; ?>

</body>

</html>
