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

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
						<h2>Add News</h2>
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
                      
				  <form action="news_management_add_data.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Tittle<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input name="title" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Notification Title<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input name="system_notice" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Content<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="msg" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10">
				          </textarea>
                        </div>
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Notification Content<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="system_notice_content" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10">
				          </textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">UIDS<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="text" name="uid" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Time<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input type="date" name="create_time" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                      </div>
                    
					<!----------------------- form upload ------------------------
					 </br>
					 <p>Picture</p>
					 <form action="activity_management_add.php" class="dropzone"></form>
					 </br>
					 <!----------------------- form upload end ------------------------->
					 
					  <div class="form-group">
                        <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" onclick="history.back();">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button name ="submit" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      <?php include 'news_management_add_data.php'; ?>
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