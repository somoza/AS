<?php

/**
 * Project form base class.
 *
 * @package    camaradecomercio
 * @subpackage form
 * @author     $AUTHOR
 * @version    SVN: $Id: sfDoctrineFormBaseTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class BaseFormDoctrine extends ahBaseFormDoctrine
{
  public function setup()
  {
  }

  public function  configure()
    {
        parent::configure();

        $this->disableCSRFProtection();
    }
    
    public function getErrors()
    {
        $errors = array();

        // individual widget errors
        foreach ($this as $form_field)
        {
            if ($form_field->hasError())
            {
                $error_obj = $form_field->getError();
                if ($error_obj instanceof sfValidatorErrorSchema)
                {
                    foreach ($error_obj->getErrors() as $error)
                    {
                        // if a field has more than 1 error, it'll be over-written
                        $errors[$form_field->renderId()] = $error->getMessage();
                    }
                }
                else
                {
                    $errors[$form_field->renderId()] = $error_obj->getMessage();
                }
            }
        }

        // global errors
        foreach ($this->getGlobalErrors() as $validator_error)
        {
            $errors[] = $validator_error->getMessage();
        }
        return $errors;
    }
}
