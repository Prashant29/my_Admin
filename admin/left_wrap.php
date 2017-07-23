<div class="col-md-3 left_col ">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title"><i class="fa fa-user"></i> <span>ADMIN SIDE!</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="dist/images/<?=$user_data['profile_pic']?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?=ucfirst($user_data['first_name'])?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side  hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="index.php"><i class="fa fa-home"></i> Home</a>
          <li><a><i class="fa fa-edit"></i> Change <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="main_header.php">Main Header</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="main_footer.php">Main Footer</a></li>
              <li><a href="footer2.php">Secondary Footer </a></li>
            </ul>
          </li>
          <li><a href="recent_work.php"><i class="fa fa-desktop"></i> Recent Works </a></li>
          <li><a href="clients.php"><i class="fa fa-user"></i> Add / Change Client</a></li>
          <li><a><i class="fa fa-bar-chart-o"></i> About  <span class="fa fa-chevron-down"></span></a>
              <?php
                $get_about_title = "SELECT `id`, `about_title` from `tbl_about_me`";
                $res_get = mysqli_query($connect, $get_about_title) or die(mysqli_error($connect));
                $titles = array();
                while($row = mysqli_fetch_assoc($res_get)){
                    $titles[] = $row;
                }
              ?>
            <ul class="nav child_menu">
                <?php foreach ($titles as $key => $value) {
                ?>
                    <li><a href="about.php?id=<?=$value['id']?>"><?=$value['about_title']?></a></li>
                <?php
                } ?>
                <li><a href="about.php">Add New </a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-pencil-square-o"></i> Blog </a></li>
        </ul>
      </div>


    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a class="pull-right" style="width: 100%;" href="logout.php" data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
