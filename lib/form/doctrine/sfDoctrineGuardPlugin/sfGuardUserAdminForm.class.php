<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class sfGuardUserAdminForm extends BasesfGuardUserAdminForm
{

    /**
     * @see sfForm
     */
    public function configure()
    {
        parent::configure();

        if ($this->isNew())
        {
            $this->validatorSchema['password']->setOption('required', true);
            $this->validatorSchema['password_again'] = clone $this->validatorSchema['password'];
        }

        $this->validatorSchema['email_address'] = new sfValidatorEmail(array('max_length' => 255));

        $this->validatorSchema->setPostValidator(
                new sfValidatorAnd(array(
                    new sfValidatorDoctrineUnique(array('model' => 'sfGuardUser', 'column' => array('email_address')), array("invalid" => "This email address is already being used")),
                    new sfValidatorDoctrineUnique(array('model' => 'sfGuardUser', 'column' => array('username')), array("invalid" => "This username is already being used")),
                    new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_again', array(), array('invalid' => 'The two passwords must be the same.'))
                ))
        );
        
        $this->widgetSchema['groups_list']->setOption('multiple', false);
        $this->widgetSchema['groups_list']->setOption('expanded', false);
        $this->widgetSchema['groups_list']->setOption('add_empty', false);
        
        $profileForm = new sfGuardUserProfileForm($this->object->Profile);
        unset($profileForm['id'], $profileForm['sf_guard_user_id']);
        $this->embedForm('Profile', $profileForm);

        $this->widgetSchema->setLabels(array(
            "Profile" => "Datos de perfil"
        ));

        unset($this['permissions_list'], $this['course_session_list'], $this['is_super_admin']);
    }
}
