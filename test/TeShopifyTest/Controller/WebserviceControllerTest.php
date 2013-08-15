<?php

namespace TeShopifyTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class WebserviceControllerTest extends AbstractHttpControllerTestCase {

    protected $traceError = true;

    public function setUp() {
        $this->setApplicationConfig(include '/var/www/te-shopify/config/application.config.php');
        parent::setUp();
    }

    public function testListActionCanBeAccessed() {

        $this->dispatch('/shopify/webservice/list');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('TeShopify');
        $this->assertControllerName('TeShopify\Controller\Webservice');
        $this->assertControllerClass('WebserviceController');
        $this->assertMatchedRouteName('shopify');
    }

}
