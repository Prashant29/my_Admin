<?php
$get_data = "SELECT * FROM `tbl_about_me`";
$res = mysqli_query($connect, $get_data) or die(mysqli_error($connect));
$arr_data = array();
while($row = mysqli_fetch_assoc($res)){
	$arr_data[] = $row;
}
$minID= $arr_data[0]['id'];
?>
<style media="screen">
	.link a:hover{
		cursor: pointer;
	}
</style>
<main id="main">

	<div class="container" >

		<div class="row topspace" id="about">

			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<ul class="nav text-right nav-side">
					<?php foreach ($arr_data as $key => $value) {

						?>
						<li id="li<?=$value['id']?>" class="link">
							<a  onclick="showDiv(<?=$value['id']?>)" ><?=$value['about_title']?></a>
						</li>
					<?php
					} ?>
				</ul>

			</aside>
			<!-- /Sidebar -->
			<?php  ?>
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
			<?php foreach ($arr_data as $key => $value) {
				?>
				<div id="<?="desc".$value['id']?>" class="desc">
					<?php
					$myfile = fopen("file/".$value['Description'], "r") or die("Unable to open file!");
		            echo fread($myfile,filesize("file/".$value['Description']));
					?>
				</div>
				<?php
				 }
				 ?>
			</article>
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->

</main>
