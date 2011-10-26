<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>

        <title><?php include_slot("title", "Backend | " . $sf_request->getHost()); ?></title>

        <link rel="shortcut icon" href="/favicon.ico" />

        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="header">
            <div class="inner-container clearfix">
                <h1 id="logo">
                    <a class="home" href="<?php echo url_for("@homepage"); ?>" title="<?php echo sfConfig::get("app_admin_title"); ?>">
                        <?php echo sfConfig::get("app_admin_title"); ?>
                        <span class="ir"></span>
                    </a><br />
                    <a target="_blank" class="button" href="<?php echo $sf_request->getUriPrefix(); ?>"><?php echo __("View site"); ?>&nbsp;»</a>
                </h1>
                <div id="userbox">
                    <div class="inner">
                        <strong><?php echo $sf_user->getGuardUser()->getName(); ?></strong>
                        <ul class="clearfix">
                            <li><?php echo link_to(__("Settings"), "edit_account"); ?></li>
                        </ul>
                    </div>
                    <a id="logout" href="<?php echo url_for("@sf_guard_signout"); ?>"><?php echo __("Signout") ?><span class="ir"></span></a>
                </div><!-- #userbox -->
            </div><!-- .inner-container -->
        </div><!-- #header -->

        <?php include_component("admin", "menu"); ?>

                        <div id="container">
                            <div class="inner-container">

                                <!-- Main content – all content is within boxes. Feel free to add your boxes (see the examples on the bottom of this document) and your content within -->

                <?php echo $sf_content ?>

                        <div id="footer"><!-- footer, maybe you don't need it -->
                            <p>Programado por Julián Somoza - <a href="http://www.animus.com.ar" target="_blank">Animus Bariloche</a> <?php echo date("Y", time()); ?></p>
                        </div>

                    </div><!-- .inner-container -->
                </div><!-- #container -->
    </body>
</html>
