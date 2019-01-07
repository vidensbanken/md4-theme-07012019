<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vidensbanken</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
<!--     <link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled.min.css" rel="stylesheet"> -->

    <style>
        .bg-skin-lp {
            /*background-image: url('https://mdbootstrap.com/img/Photos/Lightbox/Orignal/img%20%281%29.jpg');*/
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }
    </style>
	<?php date_default_timezone_set('Europe/Copenhagen');?>
	<script type="text/javascript">
	var templateUrl = '<?= get_bloginfo("template_url"); ?>';
	</script>

</head>
<body class="fixed-sn light-blue-skin">
<?php wp_head();?>
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
      <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <!-- <ul id="slide-out" class="side-nav mdb-color lighten-1 fixed custom-scrollbar"> -->
        <ul id="sidebar" class="custom-scrollbar">
              <!-- Logo -->
            <li>
              <div class="logo-wrapper waves-light">
                  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/abd.png' ; ?>" class="img-fluid flex-center"></a>
              </div>
            </li>
            <li>
                <form class="search-form" role="search">
                    <div class="form-group waves-light">
                        <input type="text" id="soeg" class="form-control " placeholder="Søg...">
                    </div>
                </form>
            </li>
            <li>
          		<div class="sidenav-ikoner">
          			 <ul class="nav-icons">
          					
          			</ul>
          		</div>
            </li>
            <?php echo do_shortcode('[custom-twitter-feeds screenname="vejdirektoratet" num=1 class="vb-feed-sidebar-twitter "]'); ?>
            <?php echo do_shortcode('[custom-twitter-feeds screenname="dmidk" num=1 class="vb-feed-sidebar-twitter "]'); ?>
          </ul>
        <div class="sidenav-bg mask-strong"></div>
      </div>

          <!--/. Sidebar navigation -->
          <!-- Navbar -->
          <!-- <nav class="navbar fixed-top navbar-toggleable-md mdb-color lighten-2 scrolling-navbar double-nav"> -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
			<div class="breadcrumb-dn mr-auto">
					<p>
						<span>Vidensbanken</span>
						<span id="visAfdelingNavn"></span>
						<span id="visModulNavn"></span>
					</p>
			</div>
				<ul class="nav navbar-nav ml-auto flex-row nav-icons" id="top_nav_bar">
<!-- 						<li><a href="#" class="" data-toggle="modal" data-target="#modal-contact"><i class="fa fa-envelope-o"></i><br><span>Kontakt</span></a></li> -->
						<li><a href="#" class=""><i class="fa fa-comments-o"></i><br><span>Support</span></a></li>
<!-- 						<li data-toggle="modal" data-target="#modal-login"><a href="#" class=""><i class="fa fa-sign-in"></i><br><span>Log ind</span></a></li> -->
						<li><a href="#" class=""><i class="fa fa-sign-out"></i><br><span>Log ud</span></a></li>
<!-- 						<li><a href="#" class=""><i class="fa fa-user"></i><br><span>Min konto</span></a></li> -->
<!-- 						<li><a href="#cart-modal-ex"  data-toggle="modal" class=""><i class="fa fa-check"></i><br><span>Agenda</span></a></li> -->
				</ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
