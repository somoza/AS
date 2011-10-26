<?php if ($sf_user->hasFlash('error')): ?>
<div class="msg msg-error">
    <p><?php echo __($sf_user->getFlash("error")); ?></p>
</div>
<?php endif; ?>

<?php if ($sf_user->hasFlash('info')): ?>
    <div class="msg msg-info">
        <p><?php echo __($sf_user->getFlash("info")); ?></p>
    </div>
<?php endif; ?>

<?php if ($sf_user->hasFlash('notice')): ?>
    <div class="msg msg-warn">
        <p><?php echo __($sf_user->getFlash("notice")); ?></p>
    </div>
<?php endif; ?>

<?php if ($sf_user->hasFlash('success')): ?>
    <div class="msg msg-ok">
        <p><?php echo __($sf_user->getFlash("success")); ?></p>
    </div>
<?php endif; ?>