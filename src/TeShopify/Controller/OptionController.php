<?php

namespace TeShopify\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel,
    Doctrine\ORM\EntityManager,
    TeShopify\Entity\ProductVariant,
    TeShopify\Service\ProductVariant as ProductVariantService,
    TeShopify\Entity\Option,
    TeShopify\Service\Option as OptionServ;

class OptionController extends AbstractActionController {

    protected $option;

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
        $dataArray = $this->getEntityManager()->getRepository('TeShopify\Entity\Option')->findAll();
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
                $option = new Option();
                $optionService = new OptionServ();
                $inputFilter = $optionService->getInputFilter();
                $inputFilter->setData($data);
                if ($inputFilter->isValid()) {
                    $option->populate($data);
                    $this->getEntityManager()->persist($option);
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
                    'msg' => 'Please select a valid option',
                    'success' => false,
                ));
                return $result;
            }
            try {
                $option = $this->getEntityManager()->find('TeShopify\Entity\Option', $id);
            } catch (\Exception $ex) {
                $result = new JsonModel(array(
                    'msg' => 'Application error. Please try again later. ',
                    'success' => false,
                ));
                return $result;
            }
            try {
                $optionService = new OptionServ();
                $inputFilter = $optionService->getInputFilter();
                $inputFilter->setData($data);
                if ($inputFilter->isValid()) {
                    $option->populate($data);
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

