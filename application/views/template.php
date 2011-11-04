<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <title>Simpla Admin</title>

        <!--                       CSS                       -->

        <!-- Reset Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/simplaadmin/resources/css/reset.css" type="text/css" media="screen" />

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/simplaadmin/resources/css/style.css" type="text/css" media="screen" />

        <!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/simplaadmin/resources/css/invalid.css" type="text/css" media="screen" />

        <!-- Colour Schemes

		Default colour scheme is green. Uncomment prefered stylesheet to use it.

		<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />

		<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />

		-->

        <!-- Internet Explorer Fixes Stylesheet -->

        <!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->

        <!--                       Javascripts                       -->

        <!-- jQuery -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery-1.3.2.min.js"></script>

        <!-- jQuery Configuration -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/simpla.jquery.configuration.js"></script>

        <!-- Facebox jQuery Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/facebox.js"></script>

        <!-- jQuery WYSIWYG Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery.wysiwyg.js"></script>

        <!-- jQuery Datepicker Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery.datePicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery.date.js"></script>
        <!--[if IE]><script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery.bgiframe.js"></script><![endif]-->


        <!-- Internet Explorer .png-fix -->

        <!--[if IE 6]>
                <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
                <script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->

    </head>

    <body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

            <div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

                    <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>

                    <!-- Logo (221px wide) -->
                    <a href="#"><img id="logo" src="<?php echo base_url(); ?>template/simplaadmin/resources/images/logo.png" alt="Simpla Admin logo" /></a>

                    <!-- Sidebar Profile links -->
                    <div id="profile-links">
				Hello, <a href="#" title="Edit your profile">John Doe</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
                        <br />
                        <a href="#" title="View the Site">View the Site</a> | <a href="#" title="Sign Out">Sign Out</a>
                    </div>

                    <ul id="main-nav">  <!-- Accordion Menu -->

                        <li>
                            <a href="../../../www.google.com" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
                            </a>
                        </li>

                        <li>
                            <a href="#" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
					Articles
                            </a>
                            <ul>
                                <li><a href="<?php echo site_url("dashboard/newpost");?>">Write a new Article</a></li>
                                <li><a class="" href="#">Manage Articles</a></li> <!-- Add class "current" to sub menu items also -->

                            </ul>
                        </li>



                    </ul> <!-- End #main-nav -->


                </div></div> <!-- End #sidebar -->

            <div id="main-content"> <!-- Main Content Section with everything -->

                <?php
                if (!empty($content)) {
                    $this->load->view($content);
                }
                ?>


            </div> <!-- End #main-content -->

        </div></body>

</html>
