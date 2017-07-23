<?php
$get_header_data_query = "SELECT * FROM tbl_main_header";
$header_resource = mysqli_query($connect, $get_header_data_query) or die(mysql_error());
$header_data = mysqli_fetch_array($header_resource);
?>
<header id="header">
	<div id="head" class="parallax" parallax-speed="2" style="background: #f4f4f4 url('assets/images/bg/<?=$header_data['background_pic']?>') top center;background-size: cover;">
		<?php include_once("header/logo.php") ?>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>

			<div class="navbar-collapse collapse">

				<?php include_once("header/menu.php"); ?>

			</div><!--/.nav-collapse -->
		</div>
	</nav>
</header>
