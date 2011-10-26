<div class="summary">
    <dl>
                        <dt><?php echo __('Id', array(), 'messages') ?></dt>
        <dd><?php echo link_to($sf_guard_user->getId(), 'sf_guard_user_edit', $sf_guard_user) ?></dd>
                                <dt><?php echo __('First name', array(), 'messages') ?></dt>
        <dd><?php echo $sf_guard_user->getFirstName() ?></dd>
                                <dt><?php echo __('Last name', array(), 'messages') ?></dt>
        <dd><?php echo $sf_guard_user->getLastName() ?></dd>
                                <dt><?php echo __('Email address', array(), 'messages') ?></dt>
        <dd><?php echo $sf_guard_user->getEmailAddress() ?></dd>
                                <dt><?php echo __('Username', array(), 'messages') ?></dt>
        <dd><?php echo $sf_guard_user->getUsername() ?></dd>
                                <dt><?php echo __('Algorithm', array(), 'messages') ?></dt>
        <dd><?php echo $sf_guard_user->getAlgorithm() ?></dd>
                                <dt><?php echo __('Salt', array(), 'messages') ?></dt>
        <dd><?php echo $sf_guard_user->getSalt() ?></dd>
                                <dt><?php echo __('Password', array(), 'messages') ?></dt>
        <dd><?php echo $sf_guard_user->getPassword() ?></dd>
                                <dt><?php echo __('Is active', array(), 'messages') ?></dt>
        <dd><div class="<?php echo var_export($sf_guard_user->getIsActive()) ?>"><?php echo var_export($sf_guard_user->getIsActive()) ?></div></dd>
                                <dt><?php echo __('Is super admin', array(), 'messages') ?></dt>
        <dd><div class="<?php echo var_export($sf_guard_user->getIsSuperAdmin()) ?>"><?php echo var_export($sf_guard_user->getIsSuperAdmin()) ?></div></dd>
                                <dt><?php echo __('Last login', array(), 'messages') ?></dt>
        <dd><?php echo false !== strtotime($sf_guard_user->getLastLogin()) ? date('d/m/Y H:i:s', strtotime($sf_guard_user->getLastLogin())) : $sf_guard_user->getLastLogin() ?></dd>
                                <dt><?php echo __('Created at', array(), 'messages') ?></dt>
        <dd><?php echo false !== strtotime($sf_guard_user->getCreatedAt()) ? date('d/m/Y H:i:s', strtotime($sf_guard_user->getCreatedAt())) : $sf_guard_user->getCreatedAt() ?></dd>
                                <dt><?php echo __('Updated at', array(), 'messages') ?></dt>
        <dd><?php echo false !== strtotime($sf_guard_user->getUpdatedAt()) ? date('d/m/Y H:i:s', strtotime($sf_guard_user->getUpdatedAt())) : $sf_guard_user->getUpdatedAt() ?></dd>
                
        <dt></dt>
        <dd>
                        
<?php if ($sf_user->hasCredential('admin')): ?>
  <?php echo link_to(__('Edit', array(), 'messages'), 'sf_guard_user_edit', $sf_guard_user, array(  'class' => 'edit',  'title' => __('Edit sfGuardUser', array(), 'messages'))) ?>
<?php endif; ?>
                        
<?php if ($sf_user->hasCredential('admin')): ?>
  <?php echo link_to(__('Cancel', array(), 'messages'), 'sf_guard_user', array(), array(  'class' => 'cancel',  'title' => __('Back to List', array(), 'messages'))) ?>
<?php endif; ?>
                    </dd>
    </dl>
</div>