<?php

/**
 * Departamentos form base class.
 *
 * @method Departamentos getObject() Returns the current form's model object
 *
 * @package    proyectosm
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDepartamentosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_departamento' => new sfWidgetFormInputHidden(),
      'departamento'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_departamento' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_departamento')), 'empty_value' => $this->getObject()->get('id_departamento'), 'required' => false)),
      'departamento'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('departamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Departamentos';
  }

}
