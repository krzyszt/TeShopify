<?php

namespace TeShopify\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel,
    Doctrine\ORM\EntityManager,
    TeShopify\Entity\Webservice;

class WebserviceController extends AbstractActionController {

    protected $webservice;

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
        $dataArray = $this->getEntityManager()->getRepository('TeShopify\Entity\Webservice')->findAll();
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

    public function createAction() {
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            $webservice = new Webservice();
            $webservice->setCreatedAt(new \DateTime("now"));
            $webservice->setName($data['name']);
            $webservice->setDescription($data['description']);
            $webservice->setUri($data['uri']);
            $webservice->setApikey($data['apikey']);
            $webservice->setSharedsecret($data['sharedsecret']);
            $webservice->setIssync(0);
            $webservice->setLeaf(true);
            $this->getEntityManager()->persist($webservice);
            $this->getEntityManager()->flush();
            $result = new JsonModel(array(
                'msg' => 'Shop created',
                'success' => true,
            ));
            return $result;
        }
    }

    public function updateAction() {
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            $id = (int) $data['id'];
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
            $webservice->setUpdatedAt(new \DateTime("now"));
            $webservice->setName($data['name']);
            $webservice->setDescription($data['description']);
            $webservice->setUri($data['uri']);
            $webservice->setApikey($data['apikey']);
            $webservice->setSharedsecret($data['sharedsecret']);
            $webservice->setIssync(0);
            $webservice->setLeaf(true);
            $this->getEntityManager()->persist($webservice);
            $this->getEntityManager()->flush();
            $result = new JsonModel(array(
                'msg' => 'Shopify Shop updated.',
                'success' => true,
            ));
            return $result;
        }
    }

    public function deleteAction() {
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            $id = (int) $data['id'];
            if (!$id) {
                $result = new JsonModel(array(
                    'msg' => 'Please select a valid shopify shop.',
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
            if ($webservice) {
                $this->getEntityManager()->remove($webservice);
                $this->getEntityManager()->flush();
                $result = new JsonModel(array(
                    'msg' => 'Record deleted',
                    'success' => true,
                ));
                return $result;
            } else {
                $result = new JsonModel(array(
                    'msg' => 'Application error. Please try again later. ',
                    'success' => false,
                ));
                return $result;
            }
        }
    }

}

