<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version108 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropTable('navigation');
    }

    public function down()
    {
        $this->createTable('navigation', array(
             'id' => 
             array(
              'type' => 'integer',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '4',
             ),
             'label' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '200',
             ),
             'description' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '200',
             ),
             'uri' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '200',
             ),
             'parent_id' => 
             array(
              'type' => 'integer',
              'default' => '0',
              'notnull' => '1',
              'length' => '4',
             ),
             'module' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '20',
             ),
             'controller' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '20',
             ),
             ), array(
             'type' => '',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => '',
             'charset' => 'UTF8',
             ));
    }
}