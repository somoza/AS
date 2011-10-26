<?php

/**
 * sf_guard_group actions.
 *
 * @package    sfstartup
 * @subpackage sf_guard_group
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sf_guard_groupActions extends autoSf_guard_groupActions
{
    public function getBaseQuery()
    {
        return sfGuardGroupTable::getInstance()->createQuery("a")
                ->leftJoin("a.Users u");
    }
}
