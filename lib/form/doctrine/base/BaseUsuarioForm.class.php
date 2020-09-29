<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    proyectosm
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'idareaproduccion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Areaproduccion'), 'add_empty' => true)),
      'nombre'           => new sfWidgetFormInputText(),
      'telefono'         => new sfWidgetFormInputText(),
      'rol'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Rol'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'idareaproduccion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Areaproduccion'), 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 150)),
      'telefono'         => new sfValidatorString(array('max_length' => 11)),
      'rol'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Rol'))),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
