<!DOCTYPE html>
<html lang="en">
<?php include 'akses_user.php'; ?>
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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <!--<div class="clearfix"></div>-->

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
						<h2>Edit Activity</h2>
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
                      
                      <!---- DATA PHP ----->      
				  <?php include 'activity_management_data2.php'; ?>
                      
				  <form action="activity_management_edit_data.php?id=<?php echo $id; ?>"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Activity Name <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="text" name="name" required="required" value="<?php echo $name;?>"class="form-control col-md-7 col-xs-12">
                        </div>
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Sequence<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="text" name="sequence" value="<?php echo $sequence;?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Activity Start Time<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="date" name="begin_time" value="<?php echo $begin_time;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Activity End Time<span >*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="date" name="end_time" value="<?php echo $end_time;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Activity URL<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="text" name="url" value="<?php echo $url;?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    <!--</form>
					<!----------------------- form upload ------------------------->
					 <!--<br/>
					 <p>Activity Banner Upload</p>
					 <form action="activity_management_add.php" class="dropzone"></form>
					 <br/>-->
					 <!----------------------- form upload end ------------------------->
					 
					  <div class="form-group">
                        <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" onclick="history.back();">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="Submit1" type="submit" class="btn btn-success">Submit</button>
                        </div> 
                      </div>
                      <?php include 'activity_management_edit_data.php'; ?>
                      </form>
                  </div>
                </div>
              </div>
			  
             </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
		<?php include 'footer.php'; ?>
		<!-- footer content -->
	
  </body>
</html>