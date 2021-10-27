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
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Asetku Console</span></a>
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
						<h2>Lending Management</h2>
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
				  <?php include 'lending_management_data2.php'; ?>
                      
				  <form action="lending_management_data_edit.php?id=<?php echo $id; ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input name="name" type="text" id="first-name" required="required" value="<?php echo $name;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Interest Rate p.a. <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="rate" required="required"  value="<?php echo ceil($rate);?>" class="form-control col-md-7 col-xs-12" placeholder="(1 decimal at most) %">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product Total Amt Rp <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="total_amount" required="required" value="<?php echo ceil($total); ?>" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sequence <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="order" required="required" value="<?php echo $sequence ;?>" class="form-control col-md-7 col-xs-12" placeholder="(0 - 100)">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Invest Periode</label>
                          <div class="col-md-2 col-sm-9 col-xs-12">
                              <input type="text" name="period" required="required" value="<?php echo $period ;?>" class="form-control col-md-7 col-xs-12" placeholder="(0 - 100)">
                          </div>
                          <div class="col-md-2 col-sm-9 col-xs-12">
                          <select class="form-control ">
                            <option>Day</option>
                            <option>Month</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Quantity Limit Per User<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="times_limit" required="required"  value="<?php echo $limit ;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Start Amount<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="base_amount" required="required" value="<?php echo ceil($start) ;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Increasing Amt<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="increase_amount" required="required" value="<?php echo ceil($increase) ;?>" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Amt Limit Per User<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="personal_limit" required="required" value="<?php echo ceil($amt) ;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Start Time<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="date" id="last-name" name="start_time" required="required" value="<?php echo $start_time ;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">End Time<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="date" id="last-name" name="end_time" required="required" value="<?php echo $end_time ;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Selling Point<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="json_product_desc" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"><?php echo $desc[0]."\n". $desc[1] ;?>
				          </textarea>
                        </div>
                      </div>
					  <div class="form-group">
                        <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" onclick="history.back();">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="submit1" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      <?php include"lending_management_data_edit.php"; ?>
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