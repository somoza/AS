<?php include_javascripts_for_form($form) ?>
<?php include_stylesheets_for_form($form) ?>
<form method="post" action="<?php echo url_for("@edit_account"); ?>" class="basic">
    <?php echo $form->renderGlobalErrors() ?>
    <?php echo $form->renderHiddenFields() ?>

    <div class="inner-form">
        <dl>
            <dt><?php echo $form['first_name']->renderLabel(null, $form['first_name']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element input_text">
                <?php echo $form['first_name']->render($form['first_name']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['first_name']->renderHelp()): ?>
                    <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['first_name']->renderError() ?>
                </dd>
                <dt><?php echo $form['last_name']->renderLabel(null, $form['last_name']->hasError() ? array("class" => "error") : null) ?>:</dt>
                <dd class="form-element input_text">
                <?php echo $form['last_name']->render($form['last_name']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['last_name']->renderHelp()): ?>
                        <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['last_name']->renderError() ?>
                    </dd>
                    <dt><?php echo $form['email_address']->renderLabel(null, $form['email_address']->hasError() ? array("class" => "error") : null) ?>:</dt>
                    <dd class="form-element required">
                <?php echo $form['email_address']->render($form['email_address']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['email_address']->renderHelp()): ?>
                            <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['email_address']->renderError() ?>
                        </dd>
                        <dt><?php echo $form['username']->renderLabel(null, $form['username']->hasError() ? array("class" => "error") : null) ?>:</dt>
                        <dd class="form-element required">
                <?php echo $form['username']->render($form['username']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['username']->renderHelp()): ?>
                                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['username']->renderError() ?>
                            </dd>
                            <dt><?php echo $form['password']->renderLabel(null, $form['password']->hasError() ? array("class" => "error") : null) ?>:</dt>
                            <dd class="form-element required">
                <?php echo $form['password']->render($form['password']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['password']->renderHelp()): ?>
                                    <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['password']->renderError() ?>
                                </dd>
                                <dt><?php echo $form['password_again']->renderLabel(null, $form['password_again']->hasError() ? array("class" => "error") : null) ?>:</dt>
                                <dd class="form-element required">
                <?php echo $form['password_again']->render($form['password_again']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['password_again']->renderHelp()): ?>
                                        <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['password_again']->renderError() ?>
                                    </dd>
                                    <dt></dt>
                                    <dd>
                                        <input class="button altbutton" type="submit" value="<?php echo __('Save', array(), 'messages') ?>" />
                <?php echo link_to(__('Cancel', array(), 'messages'), 'homepage') ?>
            </dd>
        </dl>
    </div>
</form>
