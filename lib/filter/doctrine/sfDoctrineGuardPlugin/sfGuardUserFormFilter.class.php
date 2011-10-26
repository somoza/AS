<?php

/**
 * sfGuardUser filter form.
 *
 * @package    camaradecomercio
 * @subpackage filter
 * @author     $AUTHOR
 * @version    SVN: $Id: sfDoctrinePluginFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserFormFilter extends PluginsfGuardUserFormFilter
{
  public function configure()
  {
	parent::configure();
	$this->useFields(array('first_name', 'last_name', 'email_address', 'username', 'is_active', 'groups_list'));
	$this->widgetSchema['groups_list']->setLabel("Grupos");
  }
}
