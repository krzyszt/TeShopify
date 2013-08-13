<?php

namespace TeShopifyTest\Entity;

use TeShopifyTest\Bootstrap;
use PHPUnit_Framework_TestCase;
use Doctrine\ORM\Tools\SchemaTool;

class EntityTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        $em = Bootstrap::getEntityManager();
        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);
        $classes = $em->getMetadataFactory()->getAllMetadata();
        $tool->dropSchema($classes);
        $tool->createSchema($classes);
        parent::setUp();
    }
    
    public function testInitial(){
        $this->assertEquals(1,1);
    }
}