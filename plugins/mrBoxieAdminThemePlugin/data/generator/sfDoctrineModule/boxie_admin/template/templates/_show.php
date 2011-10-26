<div class="summary">
    <dl>
        <?php foreach ($this->get('show_display') as $name => $field): ?>
        <?php echo $this->startCredentialCondition($field->getOptions()) ?>
        <dt><?php echo $this->renderHtmlText($field->getOption('label', '', true)) ?></dt>
        <dd><?php echo $this->renderField($field) ?></dd>
        <?php echo $this->endCredentialCondition($field->getOptions()) ?>
        <?php endforeach; ?>

        <dt></dt>
        <dd>
            <?php foreach ($this->get('show_actions') as $name => $params): ?>
            <?php echo $this->linkTo($name, $params) ?>
            <?php endforeach; ?>
        </dd>
    </dl>
</div>