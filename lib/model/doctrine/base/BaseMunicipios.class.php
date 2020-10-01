<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Municipios', 'doctrine');

/**
 * BaseMunicipios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_municipio
 * @property string $municipio
 * @property integer $estado
 * @property integer $departamento_id
 * 
 * @method integer    getId_munIcIpIo()    Returns the current record's "id_municipio" value
 * @method string     getMunicipio()       Returns the current record's "municipio" value
 * @method integer    getEstado()          Returns the current record's "estado" value
 * @method integer    getDepartamento_iD() Returns the current record's "departamento_id" value
 * @method Municipios setId_munIcIpIo()    Sets the current record's "id_municipio" value
 * @method Municipios setMunicipio()       Sets the current record's "municipio" value
 * @method Municipios setEstado()          Sets the current record's "estado" value
 * @method Municipios setDepartamento_iD() Sets the current record's "departamento_id" value
 * 
 * @package    proyectosm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMunicipios extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('municipios');
        $this->hasColumn('id_municipio', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('municipio', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('estado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('departamento_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}