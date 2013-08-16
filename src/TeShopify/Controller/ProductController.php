<?php

namespace TeShopify\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel,
    Doctrine\ORM\EntityManager,
    TeShopify\Entity\Product,
    TeShopify\Service\Product as ProductService;

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
            $data = $this->request->getPost();
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
            $data = $this->request->getPost();
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

}

