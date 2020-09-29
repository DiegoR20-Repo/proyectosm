<?php

/**
 * EtapaProyecto filter form base class.
 *
 * @package    proyectosm
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEtapaProyectoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idetaparef'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EtapaRef'), 'add_empty' => true)),
      'idproyecto'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Proyecto'), 'add_empty' => true)),
      'informacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inicio'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fin'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'idetaparef'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EtapaRef'), 'column' => 'id')),
      'idproyecto'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Proyecto'), 'column' => 'id')),
      'informacion' => new sfValidatorPass(array('required' => false)),
      'inicio'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fin'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('etapa_proyecto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EtapaProyecto';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'idetaparef'  => 'ForeignKey',
      'idproyecto'  => 'ForeignKey',
      'informacion' => 'Text',
      'inicio'      => 'Date',
      'fin'         => 'Date',
    );
  }
}
