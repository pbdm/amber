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

         <!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1><?php echo (L("cv_name")); ?></h1>
        <p>26ans, Célibataire</p>
        <p>33 Rue Antoine Thomas 94200 IVRY SUR SEINE</p>
        <p>+33 6 18 37 24 67 pbdm915@gmail.com www.pbdm.cc</p>
    </div>
</header>
<div class="container">
    <!-- Docs nav ================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#formation"><i class="icon-chevron-right"></i> Formation</a></li>
                <li><a href="#projets"><i class="icon-chevron-right"></i> Projets réalises</a></li>
                <li><a href="#competences"><i class="icon-chevron-right"></i> Compétences informatique</a></li>
                <li><a href="#experience"><i class="icon-chevron-right"></i> Expérience professionnelle</a></li>
                <li><a href="#langues"><i class="icon-chevron-right"></i> Langues</a></li>
                <li><a href="#loisirs"><i class="icon-chevron-right"></i> Loisirs</a></li>
            </ul>
        </div>
        <div class="span9">
            <!-- Formation ================================================== -->
            <section id="formation">
                <div class="page-header">
                    <h1>Formation</h1>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th>2010 2012</th>
                            <td>Master Informatique à l’université Paris7 Master2 Informatique à l’université Paris7</td>
                        </tr>
                        <tr>
                            <th>2009 2010</th>
                            <td>Master Management et Administration des Entreprises à l’université d’Auvergne</td>
                        </tr>
                        <tr>
                            <th>2008 2009</th>
                            <td>Diplôme Universitaire Langue et civilisation française à l’université d’Auvergne</td>
                        </tr>
                        <tr>
                            <th>2007 2008</th>
                            <td>Formation de français à l’institut Tellhow en Chine</td>
                        </tr>
                        <tr>
                            <th>2003 2007</th>
                            <td>Équivalence d’une maîtrise (BAC+4ans) des sciences informatiques et technologiques à l’université de polytechnique de TianJin, Chine</td>
                        </tr>
                    </tbody>
                </table>    
            </section> 
            <!-- Projects ================================================== -->
            <section id="projets">
                <div class="page-header">
                    <h1>Projets réalises</h1>
                </div>
                <ul>
                    <li>Logiciel de gestion d’un magasin en Java et postgresql(Project de Base de Donnée)</li>
                    <li>Programmation avec des langages synchrones (Lustre et Scade) avec un projet en Scade</li>
                    <li>Développement d’application Android(un agenda)</li>
                    <li>Développement d’application IPhone</li>
                    <li>Développement d’application Chrome</li>
                    <li>Réalisation d’un éditeur de diagrammes UML et un générateur de code(en java)</li>
                    <li>Réalisation d’un site web social (HTML, CSS, JavaScript et PHP)</li>
                    <li>Recherche préalable à l’importation de pulls en cachemire fabriqué en Chine</li>
                </ul>    
            </section>
            <!-- Competences ================================================== -->
            <section id="competences">
                <div class="page-header">
                    <h1>Compétences informatique</h1>
                </div>
                 <table>
                    <tbody>
                        <tr>
                            <th>Langages de Programmation</th>
                            <td>C, JAVA, Scala, Objective C, Lustre, SQL</td>
                        </tr>
                        <tr>
                            <th>Language Web</th>
                            <td>(X)HTML/CSS, PHP, JavaScript</td>
                        </tr>
                        <tr>
                            <th>Base de données</th>
                            <td>MySQL (phpMyAdmin) et PostgreSQL (pgdAdmin III)</td>
                        </tr>
                        <tr>
                            <th>Réseaux</th>
                            <td>TCP/IP, UDP/IP et Socket</td>
                        </tr>
                        <tr>
                            <th>Environnement de Développement</th>
                            <td>Eclipse, Xcode et GNU Emacs</td>
                        </tr>
                        <tr>
                            <th>Système d’exploitation</th>
                            <td>Windows, GNU/Linux Debian et Mac OS X</td>
                        </tr>
                        <tr>
                            <th>Système d'information</th>
                            <td>JBoss</td>
                        </tr>
                        <tr>
                            <th>Divers</th>
                            <td>MS Office et OpenOffice.org</td>
                        </tr>
                    </tbody>
                </table>    
            </section>
            <!-- Experience================================================== -->
            <section id="experience">
                <div class="page-header">
                    <h1>Expérience professionnelle</h1>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th>2012</th>
                            <td>Stage de fin d’étude chez British Marketing Services, Webmaster. Redéveloppement d’un site PHP, mise en place de liens XML en B2C</td>
                        </tr>
                        <tr>
                            <th>Septembre 2009</th>
                            <td>Cueilleur des friuts chez Gaec les devins</td>
                        </tr>
                        <tr>
                            <th>Mai 2007</th>
                            <td>Stage chez Société EasyCares (Entreprise de logiciel médical), Shanghai Chine</td>
                        </tr>
                    </tbody>
                </table>    
            </section>
            <!-- Langues================================================== -->
            <section id="langues">
                <div class="page-header">
                    <h1>Langues</h1>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th>Chinois</th>
                            <td>écrit, lu et parlé</td>
                        </tr>
                        <tr>
                            <th>Français</th>
                            <td>écrit, lu et parlé</td>
                        </tr>
                        <tr>
                            <th>Anglais</th>
                            <td>écrit, lu et parlé</td>
                        </tr>
                    </tbody>
                </table>    
            </section>
            <!-- Loisirs================================================== -->
            <section id="loisirs">
                <div class="page-header">
                    <h1>Loisirs</h1>
                </div>
                <p>Échecs, Informatique, Programmation, Nouvelles technologies, Jeux vidéo, Football, Basket-ball et Musique.</p>
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