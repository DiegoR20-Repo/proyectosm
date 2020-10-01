<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AreaProduccion', 'doctrine');

/**
 * BaseAreaProduccion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * 
 * @method integer        getId()     Returns the current record's "id" value
 * @method string         getNombre() Returns the current record's "nombre" value
 * @method AreaProduccion setId()     Sets the current record's "id" value
 * @method AreaProduccion setNombre() Sets the current record's "nombre" value
 * 
 * @package    proyectosm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAreaProduccion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('area_produccion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}