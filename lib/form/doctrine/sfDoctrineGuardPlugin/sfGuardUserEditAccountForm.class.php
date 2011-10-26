<?php

/**
 * sfGuardUser form.
 *
 * @package    sfstartup
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserEditAccountForm extends sfGuardUserAdminForm
{

    public function configure()
    {
        parent::configure();

        unset(
                $this['is_active'],
                $this['is_super_admin'],
                $this['groups_list'],
                $this['permissions_list']
        );
    }
}
