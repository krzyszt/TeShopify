<?php
namespace TeShopify\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel,    
    Doctrine\ORM\EntityManager,
    TeShopify\Entity\Webservice;

class WebserviceController extends AbstractActionController{
    
    protected $webservice;

    /**
     * @var Doctrine\ORM\EntityManager
     */
    protected $em;

    public function setEntityManager(EntityManager $em)
    {
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
    
}

