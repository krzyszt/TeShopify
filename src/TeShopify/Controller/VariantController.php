<?php

namespace TeShopify\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel,
    Doctrine\ORM\EntityManager,
    TeShopify\Entity\ProductVariant,
    TeShopify\Service\ProductVariant as ProductVariantService,
    TeShopify\Entity\Webservice,
    TeShopify\Service\Webservice as WebserviceServ,
    Zend\Http\Client,
    Zend\Http\Request;

class VariantController extends AbstractActionController {

    protected $variant;

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
        $dataArray = $this->getEntityManager()->getRepository('TeShopify\Entity\ProductVariant')->findAll();
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
                $variant = new ProductVariant();
                $variantService = new ProductVariantService();
                $inputFilter = $variantService->getInputFilter();
                $inputFilter->setData($data);
                if ($inputFilter->isValid()) {
                    $variant->setProduct($product);
                    $variant->populate($data);
                    $this->getEntityManager()->persist($product);
                    $this->getEntityManager()->flush();
                    $result = new JsonModel(array(
                        'msg' => 'Variant created',
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
                    'msg' => 'Please select a product variant',
                    'success' => false,
                ));
                return $result;
            }
            try {
                $variant = $this->getEntityManager()->find('TeShopify\Entity\ProductVariant', $id);
            } catch (\Exception $ex) {
                $result = new JsonModel(array(
                    'msg' => 'Application error. Please try again later. ',
                    'success' => false,
                ));
                return $result;
            }
            try {
                $variantService = new ProductVariantService();
                $inputFilter = $variantService->getInputFilter();
                $inputFilter->setData($data);
                if ($inputFilter->isValid()) {
                    $variant->setCompareAtPrice($data['compare_at_price']);
                    $variant->setFulfillmentService($data['fulfillment_service']);
                    $variant->setGrams($data['grams']);
                    $variant->setInventoryManagement($data['inventory_management']);
                    $variant->setInventoryPolicy($data['inventory_policy']);
                    $variant->setInventoryQuantity($data['inventory_quantity']);
                    $variant->setMetafield($data['metafield']);
                    $variant->setOption($data['option']);
                    $variant->setPosition($data['position']);
                    $variant->setPrice($data['price']);
                    $variant->setRequiresShipping($data['requires_shipping']);
                    $variant->setSku($data['sku']);
                    $variant->setTaxable($data['taxable']);
                    $variant->setTitle($data['title']);
                    $this->getEntityManager()->persist($variant);
                    $this->getEntityManager()->flush();
                    $result = new JsonModel(array(
                        'msg' => 'Product variant was successfully saved',
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

