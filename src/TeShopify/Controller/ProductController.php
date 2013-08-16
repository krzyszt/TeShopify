<?php

namespace TeShopify\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel,
    Doctrine\ORM\EntityManager,
    TeShopify\Entity\Product;

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
            'children' => $data,
            'success' => true,
        ));
        return $result;
    }
    
    public function createAction(){
        if ($this->request->isPost()){
            $data = $this->request->getPost();
            $product = new Product();
            $product->setTitle($data['title']);
            $product->setHandle($data['handle']);
            $product->setBodyHtml($data['body_html']);
            $product->setProductType($data['product_type']);
            $product->setVendor($data['vendor']);
            
            $this->getEntityManager()->persist($product);
            $this->getEntityManager()->flush();
            $result = new JsonModel(array(
                'msg'=>'Product created',
                'success' => true
            ));
            return $result;
        }
    }

    

    

}

