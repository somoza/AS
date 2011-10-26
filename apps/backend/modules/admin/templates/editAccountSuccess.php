<?php use_helper('Date', 'I18N') ?>

<?php include_partial('global/flashes') ?>

<div id="box1" class="box altbox"><!-- box full-width -->
    <div class="boxin">

        <div class="header">
            <h3><?php echo __("Edit account details", null, "messages"); ?></h3>
        </div>
        <div class="content"><!-- content box 1 for tab switching -->

            <?php include_partial('admin/edit_account_form', array('form' => $sf_guard_user_edit_account_form)) ?>

        </div><!-- .content#box-1-holder -->
    </div>
</div>