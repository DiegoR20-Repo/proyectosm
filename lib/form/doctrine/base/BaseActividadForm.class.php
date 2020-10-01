<?php

/**
 * Actividad form base class.
 *
 * @method Actividad getObject() Returns the current form's model object
 *
 * @package    proyectosm
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseActividadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'idarea'           => new sfWidgetFormInputText(),
      'idusuario'        => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'descripcion'      => new sfWidgetFormInputText(),
      'fechacreacion'    => new sfWidgetFormDate(),
      'fechacompletada'  => new sfWidgetFormDate(),
      'porcentajeavance' => new sfWidgetFormInputText(),
      'estado'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'idarea'           => new sfValidatorInteger(),
      'idusuario'        => new sfValidatorInteger(),
      'nombre'           => new sfValidatorString(array('max_length' => 200)),
      'descripcion'      => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'fechacreacion'    => new sfValidatorDate(),
      'fechacompletada'  => new sfValidatorDate(array('required' => false)),
      'porcentajeavance' => new sfValidatorInteger(),
      'estado'           => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('actividad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Actividad';
  }

}
