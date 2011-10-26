[?php if (!$pager->getNbResults()): ?]

<div class="margin msg msg-info">
    <p><?php echo $this->renderHtmlText('No Results') ?></p>
</div>

[?php else: ?]

<?php if ($this->get('list_batch_actions')): ?>
    
<form class="plain" action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
    
<?php endif; ?>

    <fieldset>

        <table cellspacing="0">
            <thead><!-- universal table heading -->
                [?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('helper' => $helper)) ?]
            </thead>
            
            <tbody>
                [?php foreach ($pager->getResults() as $i => $<?php echo $this->getSingularName() ?>): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?]
                    [?php include_partial('<?php echo $this->getModuleName() ?>/list_row', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'helper' => $helper, 'i' => $i, 'odd' => $odd, 'checkbox' => <?php echo $this->asPhp($this->get('list_batch_actions') != false) ?>)) ?]
                [?php endforeach; ?]
            </tbody>

            <?php if ( ($batchActions = $this->get('list_batch_actions')) OR  count((array) $batchActions) > 0 ): // there is batch actions or actions ?>

            <tfoot><!-- table foot - what to do with selected items -->
                <tr>
                    <?php

                   // Calculates "colspan"
                    $nb_fields = count($this->get('list_display'));
                    $batch_actions = 1;
                    $object_actions = $this->get('list_object_actions') ? 1 : 0;

                    $colspan = $nb_fields + $batch_actions + $object_actions;
                    ?>
                    <td colspan="<?php echo $colspan; ?>"><!-- do not forget to set appropriate colspan if you will edit this table -->
                        <select name="batch_action">
                            <option value=""><?php echo $this->renderHtmlText('Choose an action') ?></option>
                            <?php foreach ((array) $batchActions as $name => $params): ?>
                                <?php echo $this->addCredentialCondition('<option value="' . $params['action'] . '">' . $this->renderHtmlText($params['label']) . '</option>', $params) ?>
                            <?php endforeach; ?>
                        </select>
                        <input class="button altbutton" type="submit" value="<?php echo $this->renderHtmlText('go') ?>" />
                    </td>
                </tr>
            </tfoot>

            <?php endif; ?>

        </table>
    </fieldset>

<?php if ($this->get('list_batch_actions')): ?>
    
</form>    
    
<?php endif; ?>

[?php include_partial('<?php echo $this->getModuleName() ?>/pagination', array('pager' => $pager, 'helper' => $helper)) ?]

[?php endif; ?]