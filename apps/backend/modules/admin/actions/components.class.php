<?php

class adminComponents extends sfComponents
{

    public function executeMenu(sfWebRequest $request)
    {
        $arr_menu = sfConfig::get('app_menus_admin_menu');
        $this->menu = ioMenuItem::createFromArray($arr_menu);
    }
}