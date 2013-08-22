<?php

namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="`option`")
 */
class Option {

    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $shopify_id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updated_at;

    /**
     * @ORM\Column(name="`name`", type="string")
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $code;
    
    /**
     * @ORM\Column(name="`values`", type="array", nullable=true)
     */
    protected $values;

    public function __construct() {
        $this->created_at = new \DateTime(date('Y-m-d H:i:s'));
    }

    public function getArrayCopy() {
        return get_object_vars($this);
    }

    public function populate($data = array()) {
        $this->id = $data['id'];
        $this->updated_at = $data['updated_at'];
        $this->shopify_id = $data['shopify_id'];
        $this->name = $data['name'];
        $this->code = $data['code'];
        $this->values = $data['values'];
    }

  

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set shopify_id
     *
     * @param integer $shopifyId
     * @return Option
     */
    public function setShopifyId($shopifyId)
    {
        $this->shopify_id = $shopifyId;
    
        return $this;
    }

    /**
     * Get shopify_id
     *
     * @return integer 
     */
    public function getShopifyId()
    {
        return $this->shopify_id;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Option
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Option
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Option
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Option
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set values
     *
     * @param array $values
     * @return Option
     */
    public function setValues($values)
    {
        $this->values = $values;
    
        return $this;
    }

    /**
     * Get values
     *
     * @return array 
     */
    public function getValues()
    {
        return $this->values;
    }
}