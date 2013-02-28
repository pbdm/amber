<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="<?php echo (LANG_SET); ?>">
    <head>
        <meta charset="utf-8">
        <title><?php echo (L("welcome")); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site perso of Bo PENG">
        <meta name="author" content="Bo PENG">

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
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../public/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../public/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../public/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../public/assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../public/assets/ico/favicon.png">
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
                    <a class="brand" href=""><?php echo (L("name")); ?></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href=""><?php echo (L("home")); ?></a></li>
                            <li><a href="http://blog.pbdm.cc"><?php echo (L("blog")); ?></a></li>
                            <li><a href="/cv"><?php echo (L("cv")); ?></a></li>
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