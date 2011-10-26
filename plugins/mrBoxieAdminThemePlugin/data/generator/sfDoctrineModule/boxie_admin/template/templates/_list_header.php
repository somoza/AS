<tr>
    <?php if ($this->get('list_batch_actions')): ?>
    <td class="tc batch checkboxes"><input type="checkbox" class="checkbox" /></td>
    <?php endif; ?>

    <?php foreach ($this->get('list_display') as $name => $field): ?>
    <?php echo $this->startCredentialCondition($field->getOptions()) ?>
        <th <?php if($field->getType() == "Boolean"): ?>class="tc"<?php endif; ?>>
            <?php if ($field->isReal()): ?>
                [?php echo link_to(<?php echo $this->renderPhpText($field->getOption('label', '', true)) ?>, <?php echo $this->urlFor('list') ?>, array('query_string' => 'sort=<?php echo $field->getName() ?>&sort_direction='.$helper->toggleSortDirection('<?php echo $field->getName() ?>'), 'class' => $helper->getSortDirection('<?php echo $field->getName() ?>'))) ?]
            <?php else: ?>
                <?php echo $this->renderHtmlText($field->getOption('label', '', true)) ?>
            <?php endif; ?>
        </th>
    <?php echo $this->endCredentialCondition($field->getOptions()) ?>
    <?php endforeach; ?>

    <?php if ($this->get('list_object_actions')): ?>
        <th class="tc actions"><?php echo $this->renderHtmlText('Actions') ?></th>
    <?php endif; ?>
</tr>