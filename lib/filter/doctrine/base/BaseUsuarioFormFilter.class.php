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
      'idareaproduccion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Areaproduccion'), 'add_empty' => true)),
      'nombre'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rol'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Rol'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'idareaproduccion' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Areaproduccion'), 'column' => 'id')),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'telefono'         => new sfValidatorPass(array('required' => false)),
      'rol'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Rol'), 'column' => 'id')),
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
      'idareaproduccion' => 'ForeignKey',
      'nombre'           => 'Text',
      'telefono'         => 'Text',
      'rol'              => 'ForeignKey',
    );
  }
}
