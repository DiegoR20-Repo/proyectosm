<?php

/**
 * Usuario filter form base class.
 *
 * @package    proyectosm
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idareaproduccion' => new sfWidgetFormFilterInput(),
      'nombre'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rol'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'idareaproduccion' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'telefono'         => new sfValidatorPass(array('required' => false)),
      'rol'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'idareaproduccion' => 'Number',
      'nombre'           => 'Text',
      'telefono'         => 'Text',
      'rol'              => 'Number',
    );
  }
}
