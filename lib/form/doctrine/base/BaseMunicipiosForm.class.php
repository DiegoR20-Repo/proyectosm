<?php

/**
 * Municipios form base class.
 *
 * @method Municipios getObject() Returns the current form's model object
 *
 * @package    proyectosm
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMunicipiosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_municipio'    => new sfWidgetFormInputHidden(),
      'municipio'       => new sfWidgetFormInputText(),
      'estado'          => new sfWidgetFormInputText(),
      'departamento_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_municipio'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_municipio')), 'empty_value' => $this->getObject()->get('id_municipio'), 'required' => false)),
      'municipio'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'estado'          => new sfValidatorInteger(),
      'departamento_id' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('municipios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Municipios';
  }

}
