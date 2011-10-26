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

        <form action="<?php echo url_for('@sf_guard_forgot_password_change?unique_key='.$sf_request->getParameter('unique_key')) ?>" method="post" class="table">
    <?php echo $form->renderHiddenFields() ?>
    <?php echo $form->renderGlobalErrors() ?>
                <div class="inner-form">

                    <div class="msg msg-info">
                        <p>
                <?php echo __('Hello %name%', array('%name%' => $user->getName())) ?> <br />
                <?php echo __('Enter your new password in the form below.') ?></p>
        </div>

        <?php include_partial("global/flashes"); ?>

        <table cellspacing="0">
            <tr>
                <th><?php echo $form['password']->renderLabel(); ?></th>
                <td><?php echo $form['password']->render(array("class" => "txt pwd")); ?>
                <?php echo $form['password']->renderError(); ?>
                </td>
            </tr>
            <tr>
                <th><?php echo $form['password_again']->renderLabel(); ?></th>
                <td><?php echo $form['password_again']->render(array("class" => "txt pwd")); ?>
                <?php echo $form['password_again']->renderError(); ?>
                </td>
            </tr>
            <tr>
                <th></th>
                <td class="tr proceed">
                    <input class="button" type="submit" value="<?php echo __("Change"); ?>" />
                </td>
            </tr>
        </table>
    </div>
</form>