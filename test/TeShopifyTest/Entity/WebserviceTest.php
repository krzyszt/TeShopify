<?php

namespace TeShopifyTest\Entity;

use TeShopifyTest\Bootstrap;
use TeShopify\Entity\Webservice;

class WebserviceTest extends \TeShopifyTest\Entity\EntityTest {
    
    public function testcanCreateWebservice(){
        $this->assertInstanceOf('TeShopify\Entity\Webservice', new Webservice);
    }
    
    public function testCanSetWebserviceAndRetriveIt(){
        $w = $this->getTestWebservice();
        $em = Bootstrap::getEntityManager();
        $em->persist($w);
        $em->flush();
        
        $query = $em->createQuery("Select w from TeShopify\Entity\Webservice w");
        $list = $query->getResult();
        $result = $list[0]->getArrayCopy();
        
        $this->assertEquals(1, count($list));
        $this->assertEquals('MyService', $result['name'] );
        $this->assertEquals('MyService', $w->getName());
        $this->assertEquals('MyServiceDescr', $result['description'] );
        $this->assertEquals('MyServiceDescr', $w->getDescription());
        $this->assertEquals('www.myserviceuri.com', $result['uri'] );
        $this->assertEquals('www.myserviceuri.com', $w->getUri());
        $this->assertEquals('123456789', $result['apikey'] );
        $this->assertEquals('123456789', $w->getApikey());
        $this->assertEquals('987654321', $result['sharedsecret'] );
        $this->assertEquals('987654321', $w->getSharedsecret());
        $this->assertEquals('1', $result['issync'] );
        $this->assertEquals('1', $w->getIssync());
        $this->assertTrue($result['leaf']);
        $this->assertTrue($w->getLeaf());
        
    }
    
    private function getTestWebservice(){
        $w = new Webservice();
        $w->setCreatedAt(new \DateTime("now"));
        $w->setName('MyService');
        $w->setDescription('MyServiceDescr');
        $w->setUri('www.myserviceuri.com');
        $w->setApikey('123456789');
        $w->setSharedsecret('987654321');
        $w->setIssync(1);
        $w->setLeaf(TRUE);
        return $w;
    }
}