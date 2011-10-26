<?php include_javascripts_for_form($form) ?>
<?php include_stylesheets_for_form($form) ?>
<?php echo form_tag_for($form, '@sf_guard_user', array("class" => "basic")) ?>
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
                        <dt><?php echo $form['is_active']->renderLabel(null, $form['is_active']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element input_checkbox">
                <?php echo $form['is_active']->render($form['is_active']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['is_active']->renderHelp()): ?>
                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['is_active']->renderError() ?>
            </dd>
                        <dt><?php echo $form['groups_list']->renderLabel(null, $form['groups_list']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element doctrine_choice">
                <?php echo $form['groups_list']->render($form['groups_list']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['groups_list']->renderHelp()): ?>
                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['groups_list']->renderError() ?>
            </dd>
            
            <div id="profile" style="display:none;">
            <dt><?php echo $form['Profile']->renderLabel(null, $form['Profile']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element required">
                <?php echo $form['Profile']->render($form['Profile']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['Profile']->renderHelp()): ?>
                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['Profile']->renderError() ?>
            </dd>
            </div>
                        <dt></dt>
            <dd>
                <?php if ($form->isNew()): ?>

                                
<?php if ($sf_user->hasCredential('admin')): ?>
  <input class="button altbutton" type="submit" value="<?php echo __('Save', array(), 'messages') ?>" />
<?php endif; ?>
                                
<?php if ($sf_user->hasCredential('admin')): ?>
    <input class="button altbutton" type="submit" value="<?php echo __('Save and Add', array(), 'messages') ?>" name="_save_and_add" />
<?php endif; ?>
                                
<?php if ($sf_user->hasCredential('admin')): ?>
  <?php echo link_to(__('Cancel', array(), 'messages'), 'sf_guard_user', array(), array(  'class' => 'cancel',  'title' => __('Back to List', array(), 'messages'))) ?>
<?php endif; ?>
                
                <?php else: ?>

                                
<?php if ($sf_user->hasCredential('admin')): ?>
  <input class="button altbutton" type="submit" value="<?php echo __('Save', array(), 'messages') ?>" />
<?php endif; ?>
                                
<?php if ($sf_user->hasCredential('admin')): ?>
  <?php echo link_to(__('Cancel', array(), 'messages'), 'sf_guard_user', array(), array(  'class' => 'cancel',  'title' => __('Back to List', array(), 'messages'))) ?>
<?php endif; ?>
                                
<?php if ($sf_user->hasCredential('admin')): ?>
  <?php echo link_to(__('Delete', array(), 'messages'), 'sf_guard_user_delete', $sf_guard_user, array(  'class' => 'delete',  'method' => 'delete',  'confirm' => __('Are You Sure?', array(), 'messages'))) ?>
<?php endif; ?>
                
                <?php endif; ?>
            </dd>
        </dl>
    </div>
</form>
<script>
    $('#sf_guard_user_groups_list').change(function()
    {
        if($(this).val() == 5 || $(this).val() == 4)
        {
            $('div#profile').fadeIn();
        }
        else
        {
            $('div#profile').hide();
        }
    });
    
    <?php if(!$form->isNew()): ?>
    if($('#sf_guard_user_groups_list option:selected').val() == 5 || $('#sf_guard_user_groups_list option:selected').val() == 4)
    {
        $('div#profile').fadeIn();
    }
    <?php endif ?>
</script>