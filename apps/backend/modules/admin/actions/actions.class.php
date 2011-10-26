<?php

/**
 * admin actions.
 *
 * @package    sfstartup
 * @subpackage admin
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adminActions extends sfActions
{

    /**
     * Executes dashboard action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
    }

    /**
     * Executes editAccount action
     *
     * @param sfRequest $request A request object
     */
    public function executeEditAccount(sfWebRequest $request)
    {
        $this->sf_guard_user_edit_account_form = new sfGuardUserEditAccountForm($this->getUser()->getGuardUser());

        if($request->isMethod(sfRequest::POST))
        {
            $this->sf_guard_user_edit_account_form->bind($request->getParameter($this->sf_guard_user_edit_account_form->getName()), $request->getFiles($this->sf_guard_user_edit_account_form->getName()));
        
            if($this->sf_guard_user_edit_account_form->isValid())
            {
                $this->sf_guard_user_edit_account_form->save();
                $this->getUser()->setFlash("notice", "Your information has been updated successfully");
                $this->redirect("@edit_account");
            }
        }
    }
}
