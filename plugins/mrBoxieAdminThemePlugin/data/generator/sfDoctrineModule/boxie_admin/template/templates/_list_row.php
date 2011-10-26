<tr id="<?php echo $this->getModuleName() ?>_[?php echo $<?php echo $this->getSingularName() ?>['id'] ?]" class="[?php if ($i == 1): ?]first [?php endif; ?][?php echo $odd ?]">

    <?php if ($this->get('list_batch_actions')): ?>
    <td class="tc checkboxes">
        <input type="checkbox" name="ids[]" value="[?php echo $<?php echo $this->getSingularName() ?>->getPrimaryKey() ?]" class="checkbox" />
    </td>
    <?php endif ?>

    <?php foreach ($this->get('list_display') as $name => $field): ?>
    <?php echo $this->startCredentialCondition($field->getOptions()) ?>
    <td class="<?php if($field->getType() == "Boolean"): ?>tc <?php endif; ?><?php echo $name ?>">
        <?php echo $this->renderField($field) . "\n" ?>
    </td>
    <?php echo $this->endCredentialCondition($field->getOptions()) ?>
    <?php endforeach; ?>
        
    <?php if ($this->get('list_object_actions')): ?>
    <td class="tc">
        <ul class="actions">
            <?php foreach ($this->get('list_object_actions', array()) as $name => $params): ?>
                <li>
                    <?php echo $this->linkTo($name, $params) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </td>
    <?php endif; ?>

</tr>