[?php include_javascripts_for_form($form) ?]
[?php include_stylesheets_for_form($form) ?]
[?php echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>', array("class" => "basic")) ?]
[?php echo $form->renderGlobalErrors() ?]
[?php echo $form->renderHiddenFields() ?]

<?php $formClass = $this->getFormClass() ?>
<?php $form = new $formClass() ?>

    <div class="inner-form">
        <dl>
            <?php foreach ($form as $name => $config): if ($config->isHidden()) continue ?>
            <dt>[?php echo $form['<?php echo $name; ?>']->renderLabel(null, $form['<?php echo $name; ?>']->hasError() ? array("class" => "error") : null) ?]:</dt>
            <dd class="<?php echo $this->getFormFieldContainerClass($form, $name) ?>">
                [?php echo $form['<?php echo $name; ?>']->render($form['<?php echo $name; ?>']->hasError() ? array("class" => "error") : array()) ?]
                [?php if ($help = $form['<?php echo $name; ?>']->renderHelp()): ?]
                <small>[?php echo $help ?]</small>
                [?php endif; ?]
                [?php echo $form['<?php echo $name; ?>']->renderError() ?]
            </dd>
            <?php endforeach; ?>
            <dt></dt>
            <dd>
                [?php if ($form->isNew()): ?]

                <?php foreach ($this->get('new_actions') as $name => $params): ?>
                <?php echo $this->linkTo($name, $params) ?>
                <?php endforeach; ?>

                [?php else: ?]

                <?php foreach ($this->get('edit_actions') as $name => $params): ?>
                <?php echo $this->linkTo($name, $params) ?>
                <?php endforeach; ?>

                [?php endif; ?]
            </dd>
        </dl>
    </div>
</form>