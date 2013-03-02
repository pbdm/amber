<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="<?php echo (LANG_SET); ?>">
    <head>
        <meta charset="utf-8">
        <title><?php echo (L("welcome")); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site perso of PENG Bo">
        <meta name="author" content="PENG Bo">

        <!-- Le styles -->
        <link href="../public/assets/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../public/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
        <link type="text/css" href="../public/assets/css/font-awesome.min.css" rel="stylesheet" />
        <!--[if IE 7]>
        <link rel="stylesheet" href="../public/assets/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="../public/css/custom-theme/jquery.ui.1.10.0.ie.css"/>
        <![endif]-->
        <link href="../public/assets/css/docs.css" rel="stylesheet">
        <link href="../public/assets/js/google-code-prettify/prettify.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../public/images/icons/icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../public/images/icons/icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../public/images/icons/icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="../public/images/icons/icon-57.png">
        <link rel="shortcut icon" href="../public/images/icons/favicon.png">
    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">

        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="/"><?php echo (L("name")); ?></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li <?php if($_GET["_URL_"][1]=='') echo "class=\"active\""; ?>><a href="/"><?php echo (L("home")); ?></a></li>
                            <li><a href="http://blog.pbdm.cc"><?php echo (L("blog")); ?></a></li>
                            <li <?php if($_GET["_URL_"][1]=='cv') echo "class=\"active\""; ?>><a href="/cv"><?php echo (L("cv")); ?></a></li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <ul class="nav">
                            <li><a href="?l=zh"><img src="../public/images/flags/cn.png"></a></li>
                            <li><a href="?l=fr"><img src="../public/images/flags/fr.png"></a></li>
                            <li><a href="?l=en"><img src="../public/images/flags/us.png"></a></li>         
                        </ul>
                    </div>
                </div>
            </div>
        </div>

         <!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1><?php echo (L("cv_name")); ?></h1>
        <p>26 <?php echo (L("age")); ?></p>
        <p>+33 6 18 37 24 67</p>
        <p>pbdm915@gmail.com</p> 
        <p>www.pbdm.cc</p>
    </div>
</header>
<div class="container">
    <!-- Docs nav ================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#formation"><i class="icon-chevron-right"></i> <?php echo (L("cv_education")); ?></a></li>
                <li><a href="#projets"><i class="icon-chevron-right"></i> <?php echo (L("cv_project")); ?></a></li>
                <li><a href="#competences"><i class="icon-chevron-right"></i> <?php echo (L("cv_expertise")); ?></a></li>
                <li><a href="#experience"><i class="icon-chevron-right"></i> <?php echo (L("cv_experience")); ?></a></li>
                <li><a href="#langues"><i class="icon-chevron-right"></i> <?php echo (L("cv_language")); ?></a></li>
                <li><a href="#loisirs"><i class="icon-chevron-right"></i> <?php echo (L("cv_interest")); ?></a></li>
            </ul>
        </div>
        <div class="span9">
            <!-- Formation ================================================== -->
            <section id="formation">
                <div class="page-header">
                    <h1><?php echo (L("cv_education")); ?></h1>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th>2010 - 2012</th>
                            <td><?php echo (L("cv_diderot")); ?></td>
                        </tr>
                        <tr>
                            <th>2008 - 2010</th>
                            <td><?php echo (L("cv_auvergne")); ?></td>
                        </tr>
                        <tr>
                            <th>2007 - 2008</th>
                            <td><?php echo (L("cv_tellhow")); ?></td>
                        </tr>
                        <tr>
                            <th>2003 - 2007</th>
                            <td><?php echo (L("cv_tjpu")); ?></td>
                        </tr>
                    </tbody>
                </table>    
            </section> 
            <!-- Projects ================================================== -->
            <section id="projets">
                <div class="page-header">
                    <h1><?php echo (L("cv_project")); ?></h1>
                </div>
                <ul>
                    <li><?php echo (L("cv_bd")); ?></li>
                    <li><?php echo (L("cv_scade")); ?></li>
                    <li><?php echo (L("cv_android")); ?></li>
                    <li><?php echo (L("cv_iphone")); ?></li>
                    <li><?php echo (L("cv_chrome")); ?></li>
                    <li><?php echo (L("cv_uml")); ?></li>
                    <li><?php echo (L("cv_pulls")); ?></li>
                </ul>    
            </section>
            <!-- Competences ================================================== -->
            <section id="competences">
                <div class="page-header">
                    <h1><?php echo (L("cv_expertise")); ?></h1>
                </div>
                 <table>
                    <tbody>
                        <tr>
                            <th><?php echo (L("cv_programming")); ?></th>
                            <td>C, JAVA, Scala, Objective C, Lustre <?php echo (L("and")); ?> SQL</td>
                        </tr>
                        <tr>
                            <th><?php echo (L("cv_web")); ?></th>
                            <td>(X)HTML/CSS, PHP <?php echo (L("and")); ?> JavaScript</td>
                        </tr>
                        <tr>
                            <th><?php echo (L("cv_e_bd")); ?></th>
                            <td>MySQL (phpMyAdmin) <?php echo (L("and")); ?> PostgreSQL (pgdAdmin III)</td>
                        </tr>
                        <tr>
                            <th><?php echo (L("cv_network")); ?></th>
                            <td>TCP/IP, UDP/IP <?php echo (L("and")); ?> Socket</td>
                        </tr>
                        <tr>
                            <th><?php echo (L("cv_environment")); ?></th>
                            <td>Eclipse, Xcode <?php echo (L("and")); ?> GNU Emacs</td>
                        </tr>
                        <tr>
                            <th><?php echo (L("cv_operating")); ?></th>
                            <td>Windows, GNU/Linux Debian <?php echo (L("and")); ?> Mac OS X</td>
                        </tr>
                        <tr>
                            <th><?php echo (L("cv_information")); ?></th>
                            <td>JBoss</td>
                        </tr>
                        <tr>
                            <th><?php echo (L("cv_other")); ?></th>
                            <td>MS Office <?php echo (L("and")); ?> OpenOffice.org</td>
                        </tr>
                    </tbody>
                </table>    
            </section>
            <!-- Experience================================================== -->
            <section id="experience">
                <div class="page-header">
                    <h1><?php echo (L("cv_experience")); ?></h1>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th>2012</th>
                            <td><?php echo (L("cv_bms")); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo (L("september")); ?> 2009</th>
                            <td><?php echo (L("cv_apple")); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo (L("may")); ?> 2007</th>
                            <td><?php echo (L("cv_easycares")); ?></td>
                        </tr>
                    </tbody>
                </table>    
            </section>
            <!-- Langues================================================== -->
            <section id="langues">
                <div class="page-header">
                    <h1><?php echo (L("cv_language")); ?></h1>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th><?php echo (L("chinese")); ?></th>
                            <td><?php echo (L("wrs")); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo (L("french")); ?></th>
                            <td><?php echo (L("wrs")); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo (L("english")); ?></th>
                            <td><?php echo (L("wrs")); ?></td>
                        </tr>
                    </tbody>
                </table>    
            </section>
            <!-- Loisirs================================================== -->
            <section id="loisirs">
                <div class="page-header">
                    <h1><?php echo (L("cv_interest")); ?></h1>
                </div>
                <p><?php echo (L("chess")); ?>, <?php echo (L("informatique")); ?>, <?php echo (L("programming")); ?>, <?php echo (L("new_technologie")); ?>, <?php echo (L("video_game")); ?>, <?php echo (L("football")); ?>, <?php echo (L("basketball")); ?> <?php echo (L("and")); ?> <?php echo (L("music")); ?></p>
            </section>
        </div>
    </div>
</div>

        <!-- Footer
        ================================================== -->
        <footer class="footer">
            <div class="container">
                 <p><?php echo (L("written")); ?> <a href="mailto:g@pbdm.cc"><?php echo (L("name")); ?></a> ©2012-2013</p>
            </div>
        </footer>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../public/assets/js/jquery-1.9.0.min.js" type="text/javascript"></script>
        <script src="../public/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../public/assets/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
        <script src="../public/assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
        <script src="../public/assets/js/docs.js" type="text/javascript"></script>
        <script src="../public/assets/js/demo.js" type="text/javascript"></script>
    </body>
</html>