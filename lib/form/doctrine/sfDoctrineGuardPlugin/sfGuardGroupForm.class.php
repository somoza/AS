<?php

/**
 * sfGuardGroup form.
 *
 * @package    camaradecomercio
 * @subpackage form
 * @author     $AUTHOR
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardGroupForm extends PluginsfGuardGroupForm
{
  public function configure()
  {
      parent::configure();

      unset($this['users_list'], $this['permissions_list']);
  }
}
