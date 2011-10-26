<?php include_javascripts_for_form($form) ?>
<?php include_stylesheets_for_form($form) ?>
<?php echo form_tag_for($form, '@cash', array("class" => "basic")) ?>
<?php echo $form->renderGlobalErrors() ?>
<?php echo $form->renderHiddenFields() ?>


    <div class="inner-form">
        <input type="hidden" value="<?php echo $sf_user->getGuardUser()->getId() ?>" name="cash[admin_id]">
                        <dt><?php echo $form['type']->renderLabel(null, $form['type']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element choice">
                <?php echo $form['type']->render($form['type']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['type']->renderHelp()): ?>
                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['type']->renderError() ?>
            </dd>
                        <dt><?php echo $form['cash_type']->renderLabel(null, $form['cash_type']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element choice">
                <?php echo $form['cash_type']->render($form['cash_type']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['cash_type']->renderHelp()): ?>
                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['cash_type']->renderError() ?>
            </dd>
                        <dt><?php echo $form['amount']->renderLabel(null, $form['amount']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element required">
                <?php echo $form['amount']->render($form['amount']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['amount']->renderHelp()): ?>
                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['amount']->renderError() ?>
            </dd>
                        <dt><?php echo $form['bill_type']->renderLabel(null, $form['bill_type']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element choice">
                <?php echo $form['bill_type']->render($form['bill_type']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['bill_type']->renderHelp()): ?>
                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['bill_type']->renderError() ?>
            </dd>
                        <dt><?php echo $form['bill_number']->renderLabel(null, $form['bill_number']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element input_text">
                <?php echo $form['bill_number']->render($form['bill_number']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['bill_number']->renderHelp()): ?>
                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['bill_number']->renderError() ?>
            </dd>
                        <dt><?php echo $form['file']->renderLabel(null, $form['file']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element input_file_editable">
                <?php echo $form['file']->render($form['file']->hasError() ? array("class" => "error") : array()) ?>
                <?php if ($help = $form['file']->renderHelp()): ?>
                <small><?php echo $help ?></small>
                <?php endif; ?>
                <?php echo $form['file']->renderError() ?>
            </dd>
            <dt><?php echo $form['concept']->renderLabel(null, $form['concept']->hasError() ? array("class" => "error") : null) ?>:</dt>
            <dd class="form-element input_text">
                <select name="cash[concept]" id="cash_concept">
                    <optgroup label="Egresos">
                    <option value="Gastos de Oficina">Gastos de Oficina</option>
                    <option value="Pago de servicios">Pago de servicios</option>
                    <option value="Pago de Honorarios">Pago de Honorarios</option>
                    <option value="Capacitación">Capacitación</option>
                    <option value="Alquiler del Salón">Alquiler del Salón</option>
                    <option value="Sueldos">Sueldos</option>
                    <option value="Gastos varios">Gastos varios</option>
                    </optgroup>
                    <optgroup label="Ingresos">
                    <option value="Ingresos varios">Ingresos varios</option>
                    <option value="Donaciones">Donaciones</option>
                    </optgroup>
                </select>
                <?php echo $form['concept']->renderError() ?>
            </dd>
                        <dt></dt>
            <dd>
                <?php if ($form->isNew()): ?>

                                <input class="button altbutton" type="submit" value="<?php echo __('Save', array(), 'messages') ?>" />                                  <input class="button altbutton" type="submit" value="<?php echo __('Save and Add', array(), 'messages') ?>" name="_save_and_add" />                                <?php echo link_to(__('Cancel', array(), 'messages'), 'cash', array(), array(  'class' => 'cancel',  'title' => __('Back to List', array(), 'messages'))) ?>                
                <?php else: ?>

                                <input class="button altbutton" type="submit" value="<?php echo __('Save', array(), 'messages') ?>" />                                <?php echo link_to(__('Cancel', array(), 'messages'), 'cash', array(), array(  'class' => 'cancel',  'title' => __('Back to List', array(), 'messages'))) ?>                                <?php echo link_to(__('Delete', array(), 'messages'), 'cash_delete', $cash, array(  'class' => 'delete',  'method' => 'delete',  'confirm' => __('Are You Sure?', array(), 'messages'))) ?>                
                <?php endif; ?>
            </dd>
        </dl>
    </div>
</form>