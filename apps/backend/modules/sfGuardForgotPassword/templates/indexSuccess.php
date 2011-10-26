<div class="header">
    <h3>
        <?php echo image_tag("/mrBoxieAdminThemePlugin/images/logo-login.png", array("alt" => sfConfig::get("app_admin_title"))); ?>
    </h3>
    <ul>
        <li><?php echo link_to(__("Signin"), "@sf_guard_signin"); ?></li><!-- .active for active tab -->

        <?php $routes = $sf_context->getRouting()->getRoutes() ?>
        <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <li><?php echo link_to(__("Forgot your password?"), "@sf_guard_forgot_password", array("class" => "active")); ?></li>
        <?php endif; ?>
        <?php if (isset($routes['sf_guard_register'])): ?>
                <li><?php echo link_to(__("Want to register?"), "@sf_guard_register"); ?></li>
        <?php endif; ?>
            </ul>
        </div>

        <form action="<?php echo url_for('@sf_guard_forgot_password') ?>" method="post" class="table">
    <?php echo $form->renderHiddenFields() ?>
    <?php echo $form->renderGlobalErrors() ?>
                <div class="inner-form">

                    <div class="msg msg-info">
                        <p>
                <?php echo __('Do not worry, we can help you get back in to your account safely!') ?> <br />
                <?php echo __('Fill out the form below to request an e-mail with information on how to reset your password.') ?></p>
        </div>

        <?php include_partial("global/flashes"); ?>

        <table cellspacing="0">
            <tr>
                <th><?php echo $form['email_address']->renderLabel(); ?></th>
                <td><?php echo $form['email_address']->render(array("class" => "txt")); ?></td>
            </tr>
            <tr>
                <th></th>
                <td class="tr proceed">
                    <input class="button" type="submit" value="<?php echo __("Request"); ?>" />
                </td>
            </tr>
        </table>
    </div>
</form>