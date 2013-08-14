<?php

namespace TeShopifyTest\Entity;

use TeShopifyTest\Bootstrap;
use TeShopify\Entity\Product;

class ProductTest extends \TeShopifyTest\Entity\EntityTest {
    
    public function testcanCreateProduct(){
        $this->assertInstanceOf('TeShopify\Entity\Product', new Product);
    }
    
    public function testCanSetProductAndRetriveIt(){
        $ent = $this->getTestProduct();
        $em = Bootstrap::getEntityManager();
        $em->persist($ent);
        $em->flush();
        
        $query = $em->createQuery("Select p from TeShopify\Entity\Product p");
        $list = $query->getResult();
        $result = $list[0]->getArrayCopy();
        
        $this->assertEquals(1, count($list));
        $this->assertEquals('TestProduct', $result['title'] );
        $this->assertEquals('TestProduct', $ent->getTitle());
        $this->assertEquals('TestHandle', $result['handle'] );
        $this->assertEquals('TestHandle', $ent->getHandle());
        $this->assertEquals('<br>TestBodyHtml</br>', $result['body_html'] );
        $this->assertEquals('<br>TestBodyHtml</br>', $ent->getBodyHtml());
        
        
    }
    
    private function getTestProduct(){
        $ent = new Product();
        $ent->setCreatedAt(new \DateTime("now"));
        $ent->setTitle('TestProduct');
        $ent->setHandle('TestHandle');
        $ent->setBodyHtml('<br>TestBodyHtml</br>');
        
                
        
        
        return $ent;
    }
}