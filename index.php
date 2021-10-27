<!DOCTYPE html>
<?php include 'akses.php'; ?>
<html lang="en">

<head>
  <?php include 'config.php'; ?>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"> <span>Asetku Dashboard</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <?php include 'profile_quick.php'; ?>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <?php include 'sidebar.php'; ?>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <?php include 'menufooter.php'; ?>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <?php include 'topnavigation.php'; ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <?php include 'index_data.php'; ?>
        <div class="row tile_count">
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
            <div class="count"> <?php echo number_format($j_user); ?> </div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Login User</span>
            <div class="count"> <?php echo number_format($l_user); ?> </div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Verified User</span>
            <div class="count"> <?php echo number_format($v_user); ?> </div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Withdraw User</span>
            <div class="count"> <?php echo number_format($w_user); ?> </div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Invest User</span>
            <div class="count"><?php echo number_format($i_user); ?> </div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Virtual Account Count</span>
            <div class="count"> <?php echo number_format($va_account); ?> </div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
        </div>


        <div class="row tile_count">
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-money"></i> Total Invest Amount</span>
            <div class="count green">IDR. <?php echo number_format($i_amount); ?></div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-money"></i> Total Withdraw Amount</span>
            <div class="count green">IDR. <?php echo number_format($w_amount); ?> </div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Virtual Account Amount</span>
            <div class="count green">IDR. <?php echo number_format($va_amount); ?></div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
          </div>
        </div>

        <div class="row tile_count">
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i>Total Repurchase Rate</span>
            <div class="count">72.59534660590069 % ?</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Pending Verification</span>
            <div class="count">125 ?</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
          </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-8 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>User Activites</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <div id="mainb" style="height:350px;">
                </div>

              </div>
            </div>
          </div>

        </div>
        <br />



      </div>
      <!-- /page content -->

      <!-- footer content -->
      <?php include 'footer.php'; ?>
      <!-- footer content -->

</body>

</html>