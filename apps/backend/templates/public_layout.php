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
    <body id="login">
        <div class="box box-50 altbox">
            <div class="boxin">
                <?php echo $sf_content; ?>
            </div>
        </div>
    </body>
</html>
