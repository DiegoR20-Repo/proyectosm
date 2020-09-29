<?php

/**
 * Actividad filter form base class.
 *
 * @package    proyectosm
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseActividadFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idarea'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaProduccion'), 'add_empty' => true)),
      'idusuario'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion'      => new sfWidgetFormFilterInput(),
      'fechacreacion'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fechacompletada'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'porcentajeavance' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'idarea'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AreaProduccion'), 'column' => 'id')),
      'idusuario'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'descripcion'      => new sfValidatorPass(array('required' => false)),
      'fechacreacion'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fechacompletada'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'porcentajeavance' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('actividad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Actividad';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'idarea'           => 'ForeignKey',
      'idusuario'        => 'Number',
      'nombre'           => 'Text',
      'descripcion'      => 'Text',
      'fechacreacion'    => 'Date',
      'fechacompletada'  => 'Date',
      'porcentajeavance' => 'Number',
      'estado'           => 'Text',
    );
  }
}
