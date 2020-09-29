<?php

/**
 * Contacto filter form base class.
 *
 * @package    proyectosm
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseContactoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idproyecto'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => true)),
      'nombre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pais'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'departamento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'municipio'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'idproyecto'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Proyecto'), 'column' => 'id')),
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'telefono'     => new sfValidatorPass(array('required' => false)),
      'pais'         => new sfValidatorPass(array('required' => false)),
      'departamento' => new sfValidatorPass(array('required' => false)),
      'municipio'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contacto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contacto';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'idproyecto'   => 'ForeignKey',
      'nombre'       => 'Text',
      'telefono'     => 'Text',
      'pais'         => 'Text',
      'departamento' => 'Text',
      'municipio'    => 'Text',
    );
  }
}
