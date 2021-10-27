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
                <h3>Lender Profile</h3>
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
                    <h2>Lender Biodata Info</h2>
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
				  <?php include 'edit.php'; ?>
                      
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo $name;?></h3>

                      <ul class="list-unstyled user_data">
						<li><i class="fa fa-user"></i>   UID : <?php echo $uid;?>
                        </li>
						<li><i class="fa fa-certificate"></i>   ID Card Number : <?php echo $uid;?>
                        </li>
                      </ul>
                      <a href="edit_profile.php?id=<?php echo $uid; ?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br/>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      
                 

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
						  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Personal Info</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Legal And Entity</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Bank Account Info</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Security Info</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <form class="form-horizontal form-label-left input_mask">
							  <div class="form-group">
								<label class="control-label col-md-1 col-sm-3 col-xs-12">UID</label>
								<div class="col-md-1 col-sm-6 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $uid;?></p>
										</li>
                                    </ul>
								</div>
								 <label class="control-label col-md-2 col-sm-3 col-xs-12">Name</label>
								<div class="col-md-3 col-sm-6 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $name;?></p>
										 </li>
                                    </ul>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-md-1 col-sm-3 col-xs-12">Phone</label>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $phone;?></p>
										</li>
                                    </ul>
								</div>
								 <label class="control-label col-md-1 col-sm-3 col-xs-12">Gender</label>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $gender;?></p>
										</li>
                                    </ul>
								</div>
							  </div>
							   <div class="form-group">
								<label class="control-label col-md-1 col-sm-1 col-xs-1">Age</label>
								<div class="col-md-1 col-sm-1 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $age?></p>
										</li>
                                    </ul>
								</div>
								<label class="control-label col-md-2 col-sm-3 col-xs-12">Religion</label>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $rlgi;?></p>
										</li>
                                    </ul>
								</div>
							  </div>
							  <div class="form-group">
							   <label class="control-label col-md-1 col-sm-3 col-xs-12">Place Of Birth</label>
								<div class="col-md-2 col-sm-3 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $plcBr;?></p>
										</li>
                                    </ul>
								</div>
								<label class="control-label col-md-1 col-sm-3 col-xs-12">Date Of Birth</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $dtBr;?></p>
										</li>
                                    </ul>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-md-1 col-sm-3 col-xs-12">Address</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<textarea id="message" readonly="readonly" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"><?php echo $addrs;?>
									</textarea>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-md-1 col-sm-3 col-xs-12">City</label>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $city;?></p>
										</li>
                                    </ul>
								</div>
								<label class="control-label col-md-1 col-sm-3 col-xs-12">Province</label>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $provi;?></p>
										</li>
                                    </ul>
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-md-1 col-sm-3 col-xs-12">Country</label>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $cntry;?></p>
										</li>
                                    </ul>
								</div>
								<label class="control-label col-md-1 col-sm-3 col-xs-12">Occupation</label>
								<div class="col-md-2 col-sm-6 col-xs-12">
									<ul class="to_do">
										<li>
										<p><?php echo $occup;?></p>
										</li>
                                    </ul>
								</div>
							  </div>
							</form>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <form class="form-horizontal form-label-left input_mask">
								<div class="form-group">
									<label class="control-label col-md-1 col-sm-3 col-xs-12">Education</label>
									<div class="col-md-2 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $edu;?></p>
											</li>
                                            </ul>
										</div>
									</div>
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Field Of Job</label>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $fldJb;?></p>
											</li>
                                            </ul>
										</div>
									</div>
								 </div>
								 <div class="form-group">
									<label class="control-label col-md-1 col-sm-3 col-xs-12">Type Of User</label>
									<div class="col-md-2 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $tpUsr;?></p>
											</li>
                                            </ul>
										</div>
									</div>
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Name ofLegal Entity</label>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $nmLeg;?></p>
											</li>
                                            </ul>
										</div>
									</div>
								 </div>
								 <div class="form-group">
									<label class="control-label col-md-1 col-sm-3 col-xs-12">Type Of Legal Entity</label>
									<div class="col-md-2 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $tpLeg;?></p>
											</li>
                                            </ul>
										</div>
									</div>
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Legal Entity / Corporation ID</label>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $legal;?></p>
											</li>
                                            </ul>
										</div>
									</div>
								 </div>
							</form>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
							<!-- start user projects -->
                            <form class="form-horizontal form-label-left input_mask">
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Bank</label>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $bank;?></p>
											</li>
                                            </ul>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Bank Account No.</label>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $accNo;?></p>
											</li>
                                            </ul>
										</div>
									</div>
								  </div>
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-3 col-xs-12">Bank Account Holder Name</label>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $accName;?></p>
											</li>
                                            </ul>
										</div>
									</div>
								</div>
							</form>
                            
                          </div>
						  <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                             <!-- start user projects -->
                            <form class="form-horizontal form-label-left input_mask">
								<div class="form-group">
									<label class="control-label col-md-1 col-sm-3 col-xs-12">Password Login</label>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $pLogn;?></p>
											</li>
                                            </ul>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-1 col-sm-3 col-xs-12">Password Withdraw</label>
									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="">
											<ul class="to_do">
											<li>
											<p><?php echo $pWith;?></p>
											</li>
                                            </ul>
										</div>
									</div>
								</div>
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
        </div>
        <!-- /page content -->

        <!-- footer content -->
		<?php include 'footer.php'; ?>
		<!-- footer content -->
        </div>
      </div>
  </body>
</html>