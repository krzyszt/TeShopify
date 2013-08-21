<?php

namespace TeShopify\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel,
    Doctrine\ORM\EntityManager,
    TeShopify\Entity\Product,
    TeShopify\Service\Product as ProductService,
    TeShopify\Entity\Webservice,
    TeShopify\Service\Webservice as WebserviceServ,
    Zend\Http\Client,
    Zend\Http\Request;

class ProductController extends AbstractActionController {

    protected $product;

    /**
     * @var Doctrine\ORM\EntityManager
     */
    protected $em;

    public function setEntityManager(EntityManager $em) {
        $this->em = $em;
    }

    public function getEntityManager() {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->em;
    }

    public function listAction() {
        $dataArray = $this->getEntityManager()->getRepository('TeShopify\Entity\Product')->findAll();
        $data = array();
        foreach ($dataArray as $object) {
            $data[] = $object->getArrayCopy();
        }
        $result = new JsonModel(array(
            'data' => $data,
            'success' => true,
        ));
        return $result;
    }

    public function createAction() {
        if ($this->request->isPost()) {
            $rawData = $this->request->getContent();
            $data = json_decode($rawData, true);
            try {
                $product = new Product();
                $productService = new ProductService();
                $inputFilter = $productService->getInputFilter();
                $inputFilter->setData($data);
                if ($inputFilter->isValid()) {
                    $product->setTitle($data['title']);
                    $product->setHandle($data['handle']);
                    $product->setBodyHtml($data['body_html']);
                    $product->setProductType($data['product_type']);
                    $product->setVendor($data['vendor']);
                    $this->getEntityManager()->persist($product);
                    $this->getEntityManager()->flush();
                    $result = new JsonModel(array(
                        'msg' => 'Product created',
                        'success' => true
                    ));
                    return $result;
                } else {
                    $result = new JsonModel(array(
                        'msg' => 'Invalid form.',
                        'success' => false,
                    ));
                    return $result;
                }
            } catch (\Exception $ex) {
                $result = new JsonModel(array(
                    'msg' => 'Application error. Please try again later. ',
                    'success' => false,
                ));
                return $result;
            }
        }
    }

    public function updateAction() {
        if ($this->request->isPost()) {
            $rawData = $this->request->getContent();
            $data = json_decode($rawData, true);
            $id = (int) $data['id'];
            if (!$id) {
                $result = new JsonModel(array(
                    'msg' => 'Please select a product.',
                    'success' => false,
                ));
                return $result;
            }
            try {
                $product = $this->getEntityManager()->find('TeShopify\Entity\Product', $id);
            } catch (\Exception $ex) {
                $result = new JsonModel(array(
                    'msg' => 'Application error. Please try again later. ',
                    'success' => false,
                ));
                return $result;
            }
            try {
                $productService = new ProductService();
                $inputFilter = $productService->getInputFilter();
                $inputFilter->setData($data);
                if ($inputFilter->isValid()) {
                    $product->setTitle($data['title']);
                    $product->setHandle($data['handle']);
                    $product->setBodyHtml($data['body_html']);
                    $product->setProductType($data['product_type']);
                    $product->setVendor($data['vendor']);
                    $this->getEntityManager()->persist($product);
                    $this->getEntityManager()->flush();
                    $result = new JsonModel(array(
                        'msg' => 'Product was successfully saved',
                        'success' => true
                    ));
                    return $result;
                } else {
                    $result = new JsonModel(array(
                        'msg' => 'Invalid form',
                        'success' => false,
                    ));
                    return $result;
                }
            } catch (\Exception $ex) {
                $result = new JsonModel(array(
                    'msg' => 'Application error. Please try again later. ',
                    'success' => false,
                ));
                return $result;
            }
        }
    }

    public function listonlineAction() {

//        passing service is in order to get shopify_client_config info
        if ($this->getRequest()->isGet()) {
            $id = (int) $this->getRequest()->getQuery()->id;
            if (!$id) {
                $result = new JsonModel(array(
                    'msg' => 'Please select a shopify shop.',
                    'success' => false,
                ));
                return $result;
            }
            try {
                $webservice = $this->getEntityManager()->find('TeShopify\Entity\Webservice', $id);
            } catch (\Exception $ex) {
                $result = new JsonModel(array(
                    'msg' => 'Application error. Please try again later. ',
                    'success' => false,
                ));
                return $result;
            }
//            $uri = 'https://jakubowski-brakus6215.myshopify.com/admin/products.json';
            $uri = 'https://' . $webservice->getUri() .'/admin/products.json';

//            $client->setUri($uri);
            try {
                $request = new Request();
                $request->setUri($uri);
                $config = array(
                    'adapter' => 'Zend\Http\Client\Adapter\Socket',
                    'sslverifypeer' => false
                );
                $client = new Client();
                $client->setOptions($config);
                $client->setAuth($webservice->getApikey(), $webservice->getPassword());
                $response = $client->dispatch($request);
                if ($response->isSuccess()) {
                    $list = json_decode($response->getBody(), true);
                    foreach ($list['products'] as &$value) {
                        foreach ($value as &$item) {
                            $item = html_entity_decode($item);
                        }
                    }
                    $result = new JsonModel(array(
                        'data' => $list['products'],
                        'msg' => 'success',
                    ));
                    return $result;
                } else {
                    $result = new JsonModel(array(
                        'response' => $response->toString(),
                        'request' => $request->toString(),
                        'msg' => 'failed',
                    ));
                    return $result;
                }
            } catch (\Exception $ex) {
                $result = new JsonModel(array(
                    'msg' => $ex,
                    'success' => false,
                ));
                return $result;
            }
        } else {
            $result = new JsonModel(array(
                'msg' => 'Invalid method',
                'success' => false,
            ));
            return $result;
        }
    }

}

