<?php

/**
 * Municipios filter form base class.
 *
 * @package    proyectosm
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMunicipiosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'municipio'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'departamento_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'municipio'       => new sfValidatorPass(array('required' => false)),
      'estado'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departamento_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('municipios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Municipios';
  }

  public function getFields()
  {
    return array(
      'id_municipio'    => 'Number',
      'municipio'       => 'Text',
      'estado'          => 'Number',
      'departamento_id' => 'Number',
    );
  }
}
