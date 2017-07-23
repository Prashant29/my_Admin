<?php
$get_footer_data_query = "SELECT * FROM `tbl_footer_2`";
$header_resource = mysqli_query($connect, $get_footer_data_query) or die(mysqli_error($connect));
$footer_data = mysqli_fetch_array($header_resource);
 ?>
<footer id="underfooter">
	<div class="container">
		<div class="row">

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p><?=$contact['street_name'].", ".$contact['city_name']?></p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; <?=$footer_data['year']?>, <?=$footer_data['company_name']?><br>
						<!--Design: <a href="index.php" rel="designer"></a>--> </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>
