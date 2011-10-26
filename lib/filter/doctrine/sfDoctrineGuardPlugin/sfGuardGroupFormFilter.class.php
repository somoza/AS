<?php

/**
 * sfGuardGroup filter form.
 *
 * @package    camaradecomercio
 * @subpackage filter
 * @author     $AUTHOR
 * @version    SVN: $Id: sfDoctrinePluginFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardGroupFormFilter extends PluginsfGuardGroupFormFilter
{
  public function configure()
  {
	parent::configure();
	$this->useFields(array('name', 'permissions_list'));
	$this->widgetSchema['permissions_list']->setLabel("Tipo");
  }
}
