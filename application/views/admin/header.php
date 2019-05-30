<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $pageTitle; ?></title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.4 -->

	<!-- FontAwesome 4.3.0 -->
	<link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons 2.0.0 -->
	<link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
			 folder instead of downloading all of them to reduce the load. -->
	<link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	<style>
		.error{
			color:red;
			font-weight: normal;
		}
	</style>
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
			var baseURL = "<?php echo base_url(); ?>";
	</script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CI</b>AS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>RPA 24</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
<!--
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-history"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                </ul>
              </li>
-->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
								<?php
								if (! empty( $this->db )) {
									$query = $this->db->from('tbl_last_login');

									$query = $this->db->order_by('id','desc')->limit(1)->get();

									$user_info = $query->row(  );
									if (! empty( $user_info->sessionData )) {
										$decode = json_decode( $user_info->sessionData );
									}

								}

						    ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Hello <?php  if(!empty( $decode->username )) { echo $decode->username; } ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php
											if (! empty( $user_info->sessionData ))
											{
												echo $decode->username;
												echo '<small>'.$decode->role.'</small>';
											}
											?>
                     </p>

                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
<!--
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>profile" class="btn btn-warning btn-flat"><i class="fa fa-user-circle"></i> Profile</a>
                    </div>
-->
										<div class="pull-right">
                      <a href="<?php echo base_url(); ?>index.php/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
						<?php
				        $query = $this->db->from('tbl_last_login');

				        $query = $this->db->order_by('id','desc')->limit(1)->get();

				        $user_info = $query->row(  );
								if (! empty( $user_info->sessionData )) {
									$decode = json_decode( $user_info->sessionData );
								}
								if (! empty( $decode->role )) {

										if ( 'seller' == $decode->role )
							      {  ?>
											<li>
					              <a href="<?php echo base_url(); ?>index.php/dashboard/DashboardSellerBid" >
					                <i class="fa fa-dashboard"></i> <span>Start Auction</span></i>
					              </a>
					            </li>
							      <?php } elseif ( 'buyer' == $decode->role )
							      { ?>
											<li>
					              <a href="<?php echo base_url(); ?>index.php/dashboard/DashboardIdentifyingBuyerVehicle" >
					                <i class="fa fa-dashboard"></i> <span>Start Auction</span></i>
					              </a>
					            </li>
							     <?php  }
								 }

				    ?>
            <li>
              <a href="<?php echo base_url(); ?>index.php/dashboard/home" >
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/dashboard/about" >
                <i class="fa fa-plane"></i>
                <span>About</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#" >
                <i class="fa fa-share"></i> <span>Language</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Estonian</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> English
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Finnish</a></li>
              </ul>
            </li>

            <?php
        //    if( $role == ROLE_ADMIN || $role == ROLE_MANAGER )
        //    {
            ?>
            <li>
              <a href="<?php echo base_url(); ?>index.php/dashboard/contacts" >
                <i class="fa fa-thumb-tack"></i>
                <span>Contacts</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/dashboard/privacy-policy" >
                <i class="fa fa-upload"></i>
                <span>Privacy Policy</span>
              </a>
            </li>
            <?php
          //  }
          //  if($role == ROLE_ADMIN)
          //{
            ?>
            <li>
              <a href="<?php echo base_url(); ?>index.php/dashboard/how-it-works" >
                <i class="fa fa-users"></i>
                <span>Hows it works</span>
              </a>
            </li>
          <li>
            <a href="<?php echo base_url(); ?>index.php/dashboard/notifications" >
              <i class="fa fa-files-o"></i>
              <span>Notifications</span>
            </a>
          </li>
					<li>
            <a href="<?php echo base_url(); ?>index.php/dashboard/transport" >
              <i class="fa fa-files-o"></i>
              <span>Transport</span>
            </a>
          </li>
					<li>
            <a href="<?php echo base_url(); ?>index.php/dashboard/askquestion" >
              <i class="fa fa-files-o"></i>
              <span>Questions</span>
            </a>
          </li>
            <?php
          //  }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
