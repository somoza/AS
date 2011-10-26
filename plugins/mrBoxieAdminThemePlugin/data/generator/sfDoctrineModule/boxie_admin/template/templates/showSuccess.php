[?php use_helper('Date'<?php echo $this->get('i18n') ? ', \'I18N\'' : '' ?>) ?]

<?php if (sfConfig::get('app_boxie_admin_include_flashes')): ?>

    [?php include_partial('global/flashes') ?]

<?php endif ?>
    <div id="box1" class="box altbox"><!-- box full-width -->
        <div class="boxin">

            <div class="header">
                <h3><?php echo $this->renderHtmlText($this->get('show_title')) ?></h3>
            </div>

            <div class="content"><!-- content box 1 for tab switching -->

                [?php include_partial('<?php echo $this->getModuleName() ?>/show', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'helper' => $helper)) ?]

        </div><!-- .content#box-1-holder -->
    </div>
</div>