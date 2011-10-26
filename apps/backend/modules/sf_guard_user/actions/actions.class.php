<?php

/**
 * sf_guard_user actions.
 *
 * @package    sfstartup
 * @subpackage sf_guard_user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sf_guard_userActions extends autoSf_guard_userActions
{
    public function executeListPay(sfWebRequest $request)
    {
        $this->pendingPays = CashFlowTable::getInstance()->findNotPayed($request['id']);
    }
    
    public function executeListDetail(sfWebRequest $request)
    {
        $this->pendingPays = CashFlowTable::getInstance()->findNotPayed($request['id']);
        $this->canceledPays = CashFlowTable::getInstance()->findPayed($request['id']);
        $this->tickets  = TicketTable::getInstance()->findAllByUser($request['id']);
        $this->polls = PollAnswerTable::getInstance()->findByUserId($request['id']);
        $this->courses = CourseStudentTable::getInstance()->findByStudent($request['id']);
    }
}
