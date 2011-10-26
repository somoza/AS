<div class="header">
    <h3>
        <?php echo image_tag("/mrBoxieAdminThemePlugin/images/logo-login.png", array("alt" => sfConfig::get("app_admin_title"))); ?>
    </h3>
    <ul>
        <li><?php echo link_to(__("Signin"), "@sf_guard_signin", array("class" => "active")); ?></li><!-- .active for active tab -->

        <?php $routes = $sf_context->getRouting()->getRoutes() ?>
        <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <li><?php echo link_to(__("Forgot your password?"), "@sf_guard_forgot_password"); ?></li>
        <?php endif; ?>
        <?php if (isset($routes['sf_guard_register'])): ?>
                <li><?php echo link_to(__("Want to register?"), "@sf_guard_register"); ?></li>
        <?php endif; ?>
            </ul>
        </div>

        <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="table">
    <?php echo $form->renderHiddenFields() ?>
    <?php echo $form->renderGlobalErrors() ?>
                <div class="inner-form">

                    <div class="msg msg-info">
                        <p><?php echo __("Please enter your username and password to sign in"); ?></p>
                    </div>

        <?php include_partial("global/flashes"); ?>

                <table cellspacing="0">
                    <tr>
                        <th><?php echo $form['username']->renderLabel(); ?></th>
                        <td><?php echo $form['username']->render(array("class" => "txt")); ?>
                        <?php echo $form['username']->renderError(); ?>
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo $form['password']->renderLabel(); ?></th>
                        <td><?php echo $form['password']->render(array("class" => "txt pwd")); ?>
                        <?php echo $form['password']->renderError(); ?>
                        </td><!-- class error for wrong filled inputs -->
                    </tr>
                    <tr>
                        <th></th>
                        <td class="tr proceed">
                    <?php echo $form['remember']->render() ?>
                    <?php echo $form['remember']->renderLabel() ?>

                </td>
            </tr>
            <tr>
                <th></th>
                <td class="tr proceed">
                    <input class="button" type="submit" value="<?php echo __("Signin"); ?>" />
                </td>
            </tr>
        </table>
    </div>
</form>