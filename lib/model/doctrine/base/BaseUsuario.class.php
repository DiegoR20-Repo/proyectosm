<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Usuario', 'doctrine');

/**
 * BaseUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $idareaproduccion
 * @property string $nombre
 * @property string $telefono
 * @property integer $rol
 * 
 * @method integer getId()               Returns the current record's "id" value
 * @method integer getIdareaproduccIon() Returns the current record's "idareaproduccion" value
 * @method string  getNombre()           Returns the current record's "nombre" value
 * @method string  getTelefono()         Returns the current record's "telefono" value
 * @method integer getRol()              Returns the current record's "rol" value
 * @method Usuario setId()               Sets the current record's "id" value
 * @method Usuario setIdareaproduccIon() Sets the current record's "idareaproduccion" value
 * @method Usuario setNombre()           Sets the current record's "nombre" value
 * @method Usuario setTelefono()         Sets the current record's "telefono" value
 * @method Usuario setRol()              Sets the current record's "rol" value
 * 
 * @package    proyectosm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('idareaproduccion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
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
        $this->hasColumn('telefono', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('rol', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
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