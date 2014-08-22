<?php

use Smurf\AppBundle\Helper\WidgetsHelper;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title><?php $view['slots']->output('application_title', 'Smurf Application Symfony') ?> | <?php $view['slots']->output('page_title', 'Accueil') ?></title>
        <meta name="keywords" lang="fr" content="<?php $view['slots']->output('keywords', 'smurf,application,symfony') ?>" />
        <meta name="description" content="<?php $view['slots']->output('description', 'Smurf Application Symfony') ?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="fr" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <link rel="shortcut icon" href="<?php echo $view['assets']->getUrl('favicon.ico') ?>" />
        <?php $view['slots']->output('stylesheets') ?>
        <?php /*
          <?php foreach ($view['assetic']->stylesheets(array('@SmurfAppBundle/Resources/public/css/*'), array('lessphp', 'cssrewrite')) as $url): ?>
          <link rel="stylesheet" href="<?php echo $view->escape($url) ?>" />
          <?php endforeach; ?> */
        ?>
        <link rel="stylesheet/less" href="<?php echo $view['assets']->getUrl('bundles/smurfapp/css/bootstrap.less') ?>" type="text/css" media="all" />
        <link rel="stylesheet/less" href="<?php echo $view['assets']->getUrl('bundles/smurfapp/css/bootstrap-theme.less') ?>" type="text/css" media="all" />
        <link rel="stylesheet/less" href="<?php echo $view['assets']->getUrl('bundles/smurfapp/css/style.less') ?>" type="text/css" media="all" />
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><?php $view['slots']->output('application_title', 'Smurf Application Symfony') ?></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Utilisateur</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="navbar-right"><a href="#">Connexion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <?php $view['slots']->output('_content') ?>

            <?php if ($view['slots']->has('customer')) : ?>
                <p class="text-left">Licence accordé à "<?php $view['slots']->output('customer', 'NA') ?>"</p>
            <?php endif; ?>
            <?php if ($view['slots']->has('author_sign')) : ?>
                <p class="text-right"><?php $view['slots']->output('author_sign', 'Julien Buonocore<br />Conseil en systèmes et logiciels informatiques<br />EIRL') ?></p>
        <?php endif; ?>
        </div>
<?php $view['slots']->output('javascripts') ?>
        <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/smurfapp/js/jquery-2.1.1.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/smurfapp/js/bootstrap-3.1.1.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/smurfapp/js/less-1.7.3.min.js') ?>"></script>
        <script type="text/javascript">
            $(function() {
<?php $view['slots']->output('js_ready') ?>
            })
        </script>
    </body>
</html>
