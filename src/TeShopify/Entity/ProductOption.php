<?php

namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="productOption")
 */
class ProductOption {


    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updated_at;
    
    /**
     * @ORM\Id 
     * @ORM\ManyToOne(targetEntity="Option")
     */
    protected $option;
    
    /**
     * @ORM\Id 
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="options", cascade={"persist"})
     */
    protected $product;

    public function __construct() {
        $this->created_at = new \DateTime(date('Y-m-d H:i:s'));
    }

    public function getArrayCopy() {
        return get_object_vars($this);
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return ProductOption
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
     * @return ProductOption
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
     * Set option
     *
     * @param \TeShopify\Entity\Option $option
     * @return ProductOption
     */
    public function setOption(\TeShopify\Entity\Option $option)
    {
        $this->option = $option;
    
        return $this;
    }

    /**
     * Get option
     *
     * @return \TeShopify\Entity\Option 
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Set product
     *
     * @param \TeShopify\Entity\Product $product
     * @return ProductOption
     */
    public function setProduct(\TeShopify\Entity\Product $product)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \TeShopify\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}