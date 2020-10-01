<?php

/**
 * Departamentos filter form base class.
 *
 * @package    proyectosm
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDepartamentosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'departamento'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'departamento'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('departamentos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Departamentos';
  }

  public function getFields()
  {
    return array(
      'id_departamento' => 'Number',
      'departamento'    => 'Text',
    );
  }
}
