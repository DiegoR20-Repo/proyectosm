<?php

/**
 * EtapaProyecto form base class.
 *
 * @method EtapaProyecto getObject() Returns the current form's model object
 *
 * @package    proyectosm
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEtapaProyectoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'idetaparef'  => new sfWidgetFormInputText(),
      'idproyecto'  => new sfWidgetFormInputText(),
      'informacion' => new sfWidgetFormTextarea(),
      'inicio'      => new sfWidgetFormDate(),
      'fin'         => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'idetaparef'  => new sfValidatorInteger(),
      'idproyecto'  => new sfValidatorInteger(),
      'informacion' => new sfValidatorString(array('max_length' => 300)),
      'inicio'      => new sfValidatorDate(),
      'fin'         => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('etapa_proyecto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EtapaProyecto';
  }

}
