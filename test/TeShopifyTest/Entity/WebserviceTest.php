<?php

namespace TeShopifyTest\Entity;

use TeShopify\Entity\Webservice;

class WebserviceTest extends \TeShopifyTest\Entity\EntityTest {
    
    public function testcanCreatewebservice(){
        $this->assertInstanceOf('TeShopify\Entity\Webservice', new Webservice);
    }
}