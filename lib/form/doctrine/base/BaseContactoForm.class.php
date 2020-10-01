<?php

/**
 * Contacto form base class.
 *
 * @method Contacto getObject() Returns the current form's model object
 *
 * @package    proyectosm
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContactoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'idproyecto'   => new sfWidgetFormInputText(),
      'nombre'       => new sfWidgetFormInputText(),
      'telefono'     => new sfWidgetFormInputText(),
      'pais'         => new sfWidgetFormInputText(),
      'departamento' => new sfWidgetFormInputText(),
      'municipio'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'idproyecto'   => new sfValidatorInteger(),
      'nombre'       => new sfValidatorString(array('max_length' => 150)),
      'telefono'     => new sfValidatorString(array('max_length' => 11)),
      'pais'         => new sfValidatorString(array('max_length' => 50)),
      'departamento' => new sfValidatorString(array('max_length' => 50)),
      'municipio'    => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('contacto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contacto';
  }

}
