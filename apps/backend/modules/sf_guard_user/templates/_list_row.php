<tr id="sf_guard_user_<?php echo $sf_guard_user['id'] ?>" class="<?php if ($i == 1): ?>first <?php endif; ?><?php echo $odd ?>">

        <td class="tc checkboxes">
        <input type="checkbox" name="ids[]" value="<?php echo $sf_guard_user->getPrimaryKey() ?>" class="checkbox" />
    </td>
    
            <td class="first_name">
        <?php echo $sf_guard_user->getFirstName() ?>
    </td>
                <td class="last_name">
        <?php echo $sf_guard_user->getLastName() ?>
    </td>
                <td class="username">
        <?php echo $sf_guard_user->getUsername() ?>
    </td>
                <td class="email_address">
        <?php echo $sf_guard_user->getEmailAddress() ?>
    </td>
                <td class="tc is_active">
        <div class="<?php echo var_export($sf_guard_user->getIsActive()) ?>"><?php echo var_export($sf_guard_user->getIsActive()) ?></div>
    </td>
                <td class="company">
        <?php echo $sf_guard_user->getCompany() ?>
    </td>
                <td class="health_insurance">
        <?php echo $sf_guard_user->getHealthInsurance() ?>
    </td>
                <td class="birthdate">
        <?php echo $sf_guard_user->getBirthdate() ?>
    </td>
                
        <td class="tc">
        <ul class="actions">
                <li>                    
                <?php if ($sf_user->hasCredential('admin')): ?>
                  <?php echo link_to(image_tag("/mrBoxieAdminThemePlugin/images/edit.png", array("alt" => __('Editar', array(), 'messages'), "title" => __('Edit sfGuardUser', array(), 'messages'))), 'sf_guard_user_edit', $sf_guard_user, array(  'class' => 'ico edit',  'title' => __('Edit sfGuardUser', array(), 'messages'))) ?>
                <?php endif; ?>
                </li>
                <li>                    
                <?php if ($sf_user->hasCredential('admin')): ?>
                  <?php echo link_to(image_tag("/mrBoxieAdminThemePlugin/images/delete.png", array("alt" => __('Borrar', array(), 'messages'), "title" => __('Delete', array(), 'messages'))), 'sf_guard_user_delete', $sf_guard_user, array(  'class' => 'ico delete',  'method' => 'delete',  'confirm' => __('Are You Sure?', array(), 'messages'))) ?>
                <?php endif; ?>
                </li>
                <li>
                <?php if ($sf_user->hasCredential('admin')): ?>
                  <?php echo link_to(image_tag("/mrBoxieAdminThemePlugin/images/cash.png", array("alt" => __('pagos pendientes', array(), 'messages'), "title" => __('Pay', array(), 'messages'))), 'sf_guard_user_collection', array(  'action' => 'ListPay', 'id'=>$sf_guard_user->getId()), array(  'class' => 'ico cash')) ?>
                <?php endif; ?>
                </li>
                <li>
                <?php if ($sf_user->hasCredential('admin')): ?>
                        <?php echo link_to(image_tag("/mrBoxieAdminThemePlugin/images/detail.png", array("alt" => __('detalles', array(), 'messages'), "title" => __('Detalle', array(), 'messages'))), 'sf_guard_user_collection', array(  'action' => 'ListDetail', 'id'=>$sf_guard_user->getId()), array(  'class' => 'ico detail')) ?>
                <?php endif; ?>
                </li>
        </ul>
    </td>
    
</tr>