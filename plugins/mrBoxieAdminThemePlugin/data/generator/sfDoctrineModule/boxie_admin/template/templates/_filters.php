<div class="box altbox">
    <div class="boxin">
        <div class="header">
            <h3><?php echo $this->renderHtmlText('Filters') ?></h3>
            [?php echo link_to(<?php echo $this->renderPhpText('Reset') ?>, <?php echo $this->urlFor('collection', false) ?>, array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post', 'class' => 'button')) ?]
        </div>
        <form action="[?php echo url_for(<?php echo $this->urlFor('collection', false) ?>, array('action' => 'filter')) ?]" method="post" class="basic"><!-- Default basic forms -->
            [?php if ($form->hasGlobalErrors()): ?]
            [?php echo $form->renderGlobalErrors() ?]
            [?php endif; ?]

            [?php echo $form->renderHiddenFields(); ?]

            [?php foreach ($form->getFormFieldSchema()->getHiddenFields() as $key => $field): ?]
            <input type="hidden" name="include[[?php echo $field->getName() ?]]" value="1"/>
            [?php endforeach ?]
            <div class="inner-form">
                <dl>
                    [?php foreach ($form as $name => $field): ?]
                    [?php if ($field->isHidden()) continue ?]

                    <dt>
                        <input type="hidden" name="include[[?php echo $name ?]]" value="1" />
                        [?php echo $field->renderLabel(null, $field->hasError() ? array("class" => "error") : null) ?]:</dt>
                    <dd>
                        [?php echo $field->render($field->hasError() ? array("class" => "error") : array()) ?]
                        [?php if ($help = $field->renderHelp()): ?]
                        <small>[?php echo $help ?]</small>
                        [?php endif; ?]
                        [?php echo $field->renderError() ?]
                    </dd>

                    [?php endforeach; ?]

                    <dt></dt>
                    <dd>
                        <input type="submit" value="<?php echo $this->renderHtmlText("Filter"); ?>" class="button">
                    </dd>
                </dl>
            </div>
        </form>
    </div>
</div>