<?php

namespace TeShopifyTest\Entity;

use TeShopifyTest\Bootstrap;
use TeShopify\Entity\Option;

class OptionTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        $em = Bootstrap::getEntityManager();
        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);
        $classes = $em->getMetadataFactory()->getAllMetadata();
        $tool->dropSchema($classes);
        $tool->createSchema($classes);
        parent::setUp();
    }

    public function testcanCreateProduct() {
        $this->assertInstanceOf('TeShopify\Entity\Option', new Option);
    }
    
    public function testCanSetOptionAndRetriveIt() {
        $ent = $this->getTestOption();
        $em = Bootstrap::getEntityManager();
        $em->persist($ent);
        $em->flush();
        $query = $em->createQuery("Select o from TeShopify\Entity\Option o");
        $list = $query->getResult();
        $result = $list[0]->getArrayCopy();
        $this->assertEquals(1, count($list));
        $this->assertEquals('TestOption', $result['name']);
        $this->assertEquals('TestOption', $ent->getName());
        $this->assertEquals('TestOptionCode', $result['code']);
        $this->assertEquals('TestOptionCode', $ent->getCode());
        $this->assertEquals(10123123, $result['shopify_id']);
        $this->assertEquals(10123123, $ent->getShopifyId());
        $val1 = $result['values'];
        $this->assertEquals('blue', $val1[0]);
        $this->assertEquals('red', $val1[1]);
        $this->assertEquals('yellow', $val1[2]);
        $this->assertEquals(3, count($val1));
        $val2 = $ent->getValues();
        $this->assertEquals('blue', $val2[0]);
        $this->assertEquals('red', $val2[1]);
        $this->assertEquals('yellow', $val2[2]);
        $this->assertEquals(3, count($val2));
        $em->detach($ent);
    }
    
    public function testCanPopulateOptionAndRetiveIt(){
        $data = array();
        $data['updated_at']= new \DateTime(date('2013-10-28 11:29:29'));
        $data['shopify_id'] = 10999888;
        $data['name'] = 'TestSize';
        $data['code'] = 'TestCodeSize';
        $data['values'] = array(12,15,19);
        $ent = new Option();
        $ent->populate($data);
        $em = Bootstrap::getEntityManager();
        $em->persist($ent);
        $em->flush();
        $query = $em->createQuery("SELECT o FROM TeShopify\Entity\Option o WHERE o.code='TestCodeSize'");
        $result = $query->getResult();
        $this->assertEquals(1, count($result));
        $this->assertEquals('TestSize', $result[0]->getName());
        $this->assertEquals('TestCodeSize', $result[0]->getCode());
    }

        private function getTestOption() {
        $ent = new Option();
        $ent->setName('TestOption');
        $ent->setCreatedAt(new \DateTime("now"));
        $ent->setCode('TestOptionCode');
        $ent->setShopifyId(10123123);
        $values = array('blue', 'red', 'yellow');
        $ent->setValues($values);
        return $ent;
    }
}