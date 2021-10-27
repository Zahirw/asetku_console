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
                <h3>Order Management Detail</h3>
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
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Order Management Info</h2>
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
				  <?php include 'lender_arrangement_data2.php'; ?>
						<div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Order Info</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Payment Info</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
							<form class="form-horizontal form-label-left input_mask">
									  <div class="form-group">
										  <label class="control-label col-md-1 col-sm-3 col-xs-12">Order ID</label>
												<div class="col-md-2 col-sm-9 col-xs-12">
													<div class="">
														<ul class="to_do">
														  <li>
															<p><?php echo $id; ?></p>
														  </li>
                                                        </ul>
                                                    </div>
												</div>
											<label class="control-label col-md-2 col-sm-3 col-xs-12">UID</label>
												<div class="col-md-2 col-sm-9 col-xs-12">
													<div class="">
														<ul class="to_do">
														  <li>
															<p><?php echo $uid; ?></p>
														  </li>
                                                        </ul>
                                                    </div>
												</div>
											<label class="control-label col-md-2 col-sm-3 col-xs-12">Username</label>
												<div class="col-md-2 col-sm-9 col-xs-12">
													<div class="">
														<ul class="to_do">
														  <li>
															<p><?php echo $name; ?></p>
														  </li>
                                                        </ul>
                                                    </div>
												</div>
									  </div>
									  <div class="form-group">
										  <label class="control-label col-md-1 col-sm-3 col-xs-12">Topup Amount</label>
												<div class="col-md-2 col-sm-9 col-xs-12">
													<div class="">
														<ul class="to_do">
														  <li>
															<p>Rp. <?php echo $amount; ?></p>
														  </li>
                                                        </ul>
                                                    </div>
												</div>
											<label class="control-label col-md-2 col-sm-3 col-xs-12">Coupon Discount</label>
												<div class="col-md-2 col-sm-9 col-xs-12">
													<div class="">
														<ul class="to_do">
														  <li>
															<p><?php echo $coupon_id; ?></p>
														  </li>
                                                        </ul>
                                                    </div>
												</div>
											<label class="control-label col-md-2 col-sm-3 col-xs-12">Coupon Type</label>
												<div class="col-md-2 col-sm-9 col-xs-12">
													<div class="">
														<ul class="to_do">
														  <li>
															<p><?php echo $coupon_id; ?></p>
														  </li>
                                                        </ul>
                                                    </div>
												</div>
									  </div>
									  <div class="form-group">
										  <label class="control-label col-md-1 col-sm-3 col-xs-12">Product Name</label>
												<div class="col-md-2 col-sm-9 col-xs-12">
													<div class="">
														<ul class="to_do">
														  <li>
															<p><?php echo $pname; ?></p>
														  </li>
                                                        </ul>
                                                    </div>
												</div>
											<label class="control-label col-md-2 col-sm-3 col-xs-12">Interest Rate p.a</label>
												<div class="col-md-2 col-sm-9 col-xs-12">
													<div class="">
														<ul class="to_do">
														  <li>
															<p><?php echo $rate; ?></p>
														  </li>
                                                        </ul>
                                                    </div>
												</div>
											<label class="control-label col-md-2 col-sm-3 col-xs-12">Invest Period</label>
												<div class="col-md-2 col-sm-9 col-xs-12">
													<div class="">
														<ul class="to_do">
														  <li>
															<p><?php echo $period; ?> Day</p>
														  </li>
                                                        </ul>
                                                    </div>
												</div>
									  </div>
									  <div class="ln_solid"></div>
							</form>
                         
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
							<form class="form-horizontal form-label-left input_mask">
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Pay Status</label>
									<div class="col-md-2 col-sm-9 col-xs-12">
										<div class="">
											<ul class="to_do">
												<li>
													<p><?php echo $status; ?></p>
												</li>
                                            </ul>
										</div>
									</div>
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Bank Name</label>
									<div class="col-md-2 col-sm-9 col-xs-12">
										<div class="">
											<ul class="to_do">
												<li>
													<p><?php echo $bank; ?></p>
												</li>
                                            </ul>
										</div>
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Transaction Number</label>
									<div class="col-md-2 col-sm-9 col-xs-12">
										<div class="">
											<ul class="to_do">
												<li>
													<p><?php echo $tnumber; ?></p>
												</li>
                                            </ul>
										</div>
									</div>
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Pay Time</label>
									<div class="col-md-2 col-sm-9 col-xs-12">
										<div class="">
											<ul class="to_do">
												<li>
													<p><?php echo $paytime; ?></p>
												</li>
                                            </ul>
										</div>
									</div>
								  </div>
								  <div class="ln_solid"></div>

                    </form>
                        </div>
                      </div>
                    </div>
                    
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

        </div>
      </div>
    </body>
</html>