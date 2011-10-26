<?php

/**
 * sfGuardUserProfile form.
 *
 * @package    camaradecomercio
 * @subpackage form
 * @author     $AUTHOR
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserProfileForm extends BasesfGuardUserProfileForm
{

    public function configure()
    {
        parent::configure();

        $birthdate_years = range(date("Y"), date("Y") - 100);
        $this->widgetSchema['birthdate']->setOption("format", "%day%/%month%/%year%");
        $this->widgetSchema['birthdate']->setOption("years", array_combine($birthdate_years, $birthdate_years));

        $this->embedRelations(array(
            "FamilyMembers" => array(
                "newFormAfterExistingRelations" => true,
                'newFormLabel' => 'Nuevo miembro familiar',
                "considerNewFormEmptyFields" => array("first_name", "last_name", "email_address", "birthdate"),
                'multipleNewForms' => true,
                'newFormsInitialCount' => 1,
                'newRelationButtonLabel' => 'Agregar otro',
                'displayEmptyRelations' => false
            )
        ));
        
        $this->widgetSchema->setLabels(array(
            "company_id" => "Empresa",
            "birthdate" => "Fecha de nacimiento",
            "health_insurance_id" => "Obra social",
            "FamilyMembers" => "Grupo familiar"
        ));
    }

}
