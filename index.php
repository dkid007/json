<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

<link rel="stylesheet" href="node_modules/jquery-mobile/dist/jquery.mobile.min.css">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<section data-role="page" id="home">

<!-- nav bar starts here -->

<?php include 'inc/header.inc.php'; ?>

<!-- nav bar ends -->

<!-- article starts -->

	<article data-role="content">
		<div id="postlist">
			<img src="img/brain.png">
			<h1>PHOTOGRAPHIC MEMORY</h1>
			<div data-role="content">
				<a class="ui-btn ui-corner-all" href="#page1">Blog</a>
				<a class="ui-btn ui-corner-all" href="#page2">Video</a>
				<a class="ui-btn ui-corner-all" href="#page3">Photos</a>
				<a class="ui-btn ui-corner-all" href="#info">Info</a>
			</div>
			</div>
	</article>

<!-- article ends -->

<!-- All pages loaded -->

<?php include 'inc/page1.inc.php'; ?>
	<?php include 'inc/page2.inc.php'; ?>
		<?php include 'inc/page3.inc.php'; ?>

<!-- footer starts -->

<?php include 'inc/footer.inc.php'; ?>

<!-- footer ends -->

</section>

<!-- footer ends -->


<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/jquery-mobile/dist/jquery.mobile.min.js"></script>
<script src="js/custom.js"></script>
<script src="http://veratech.co.nz/blog/?json=1&count=10&callback=listPosts"></script>


</body>

</html>