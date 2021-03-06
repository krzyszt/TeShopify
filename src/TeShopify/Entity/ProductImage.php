<?php
namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="productImage")
 */
class ProductImage 
{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updated_at;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $src;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $position;
    
    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="images", cascade={"persist"})
     *
     */
    protected $product;    

    public function __construct() {
        $this->created_at = new \DateTime(date('Y-m-d H:i:s'));
    }

        /**
     * Set id
     *
     * @param integer $id
     * @return ProductImage
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return ProductImage
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
     * @return ProductImage
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
     * Set src
     *
     * @param string $src
     * @return ProductImage
     */
    public function setSrc($src)
    {
        $this->src = $src;
    
        return $this;
    }

    /**
     * Get src
     *
     * @return string 
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return ProductImage
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set product
     *
     * @param \TeShopify\Entity\Product $product
     * @return ProductImage
     */
    public function setProduct(\TeShopify\Entity\Product $product = null)
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
    
    public function getArrayCopy() {
        return get_object_vars($this);
    }

    public function populate($data = array()) {
        $this->id = $data['id'];
        $this->created_at = $data['created_at'];
        $this->updated_at = $data['updated_at'];
        $this->position = $data['position'];
        $this->src = $data['src'];
    }
}