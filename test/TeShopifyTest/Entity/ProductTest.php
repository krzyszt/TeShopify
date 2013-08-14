<?php

namespace TeShopifyTest\Entity;

use TeShopifyTest\Bootstrap;
use TeShopify\Entity\Product;
use TeShopify\Entity\ProductImage;

class ProductTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        $em = Bootstrap::getEntityManager();
        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);
        $classes = $em->getMetadataFactory()->getAllMetadata();
        $tool->dropSchema($classes);
        $tool->createSchema($classes);
        parent::setUp();
    }

    public function testcanCreateProduct() {
        $this->assertInstanceOf('TeShopify\Entity\Product', new Product);
    }

    public function testCanSetProductAndRetriveIt() {
        $ent = $this->getTestProduct();
        $em = Bootstrap::getEntityManager();
        $em->persist($ent);
        $em->flush();
        $query = $em->createQuery("Select p from TeShopify\Entity\Product p");
        $list = $query->getResult();
        $result = $list[0]->getArrayCopy();
        $this->assertEquals(1, count($list));
        $this->assertEquals('TestProduct', $result['title']);
        $this->assertEquals('TestProduct', $ent->getTitle());
        $this->assertEquals('TestHandle', $result['handle']);
        $this->assertEquals('TestHandle', $ent->getHandle());
        $this->assertEquals('<br>TestBodyHtml</br>', $result['body_html']);
        $this->assertEquals('<br>TestBodyHtml</br>', $ent->getBodyHtml());
        $em->detach($ent);
    }

    public function testCanAddProductImageToProduct() {
        $em = Bootstrap::getEntityManager();
        $ent = $this->getTestProduct();
        
        $img1 = new ProductImage();
        $img1->setPosition(1);
        $img1->setSrc('/imgsrc');
        $img1->setProduct($ent);

        $img2 = new ProductImage();
        $img2->setPosition(2);
        $img2->setSrc('/imgsrc');
        $img2->setProduct($ent);

        $ent->addImage($img1);
        $ent->addImage($img2);
        $em->persist($ent);
        $em->flush();
        $query = $em->createQuery("Select p from TeShopify\Entity\Product p");
        $result = $query->getResult();
        $this->assertEquals(1, count($result));
        $this->assertEquals(2, count($result[0]->getImages()->toArray()));
        $em->detach($ent);
    }

    private function getTestProduct() {
        $ent = new Product();
        $ent->setCreatedAt(new \DateTime("now"));
        $ent->setTitle('TestProduct');
        $ent->setHandle('TestHandle');
        $ent->setBodyHtml('<br>TestBodyHtml</br>');
        return $ent;
    }

}