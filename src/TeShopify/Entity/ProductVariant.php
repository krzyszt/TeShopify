<?php
namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="productVariant")
 */
class ProductVariant 
{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
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
    protected $compare_at_price;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $fulfillment_service;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $grams;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $inventory_management;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $inventory_policy;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $inventory_quantity;
    
    /**
     * @ORM\Column(type="object")
     */
    protected $metafield;
    
    /**
     * @ORM\Column(type="array")
     */
    protected $option;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $position;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $requires_shipping;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $sku;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $taxable;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $title;
    
    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="variants")
     */
    protected $product;
    
    public function __construct() {
        $this->created_at = new \DateTime(date('Y-m-d H:i:s'));
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return ProductVariant
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
     * @return ProductVariant
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
     * @return ProductVariant
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
     * Set compare_at_price
     *
     * @param string $compareAtPrice
     * @return ProductVariant
     */
    public function setCompareAtPrice($compareAtPrice)
    {
        $this->compare_at_price = $compareAtPrice;
    
        return $this;
    }

    /**
     * Get compare_at_price
     *
     * @return string 
     */
    public function getCompareAtPrice()
    {
        return $this->compare_at_price;
    }

    /**
     * Set fulfillment_service
     *
     * @param string $fulfillmentService
     * @return ProductVariant
     */
    public function setFulfillmentService($fulfillmentService)
    {
        $this->fulfillment_service = $fulfillmentService;
    
        return $this;
    }

    /**
     * Get fulfillment_service
     *
     * @return string 
     */
    public function getFulfillmentService()
    {
        return $this->fulfillment_service;
    }

    /**
     * Set grams
     *
     * @param integer $grams
     * @return ProductVariant
     */
    public function setGrams($grams)
    {
        $this->grams = $grams;
    
        return $this;
    }

    /**
     * Get grams
     *
     * @return integer 
     */
    public function getGrams()
    {
        return $this->grams;
    }

    /**
     * Set inventory_management
     *
     * @param string $inventoryManagement
     * @return ProductVariant
     */
    public function setInventoryManagement($inventoryManagement)
    {
        $this->inventory_management = $inventoryManagement;
    
        return $this;
    }

    /**
     * Get inventory_management
     *
     * @return string 
     */
    public function getInventoryManagement()
    {
        return $this->inventory_management;
    }

    /**
     * Set inventory_policy
     *
     * @param string $inventoryPolicy
     * @return ProductVariant
     */
    public function setInventoryPolicy($inventoryPolicy)
    {
        $this->inventory_policy = $inventoryPolicy;
    
        return $this;
    }

    /**
     * Get inventory_policy
     *
     * @return string 
     */
    public function getInventoryPolicy()
    {
        return $this->inventory_policy;
    }

    /**
     * Set inventory_quantity
     *
     * @param integer $inventoryQuantity
     * @return ProductVariant
     */
    public function setInventoryQuantity($inventoryQuantity)
    {
        $this->inventory_quantity = $inventoryQuantity;
    
        return $this;
    }

    /**
     * Get inventory_quantity
     *
     * @return integer 
     */
    public function getInventoryQuantity()
    {
        return $this->inventory_quantity;
    }

    /**
     * Set metafield
     *
     * @param \stdClass $metafield
     * @return ProductVariant
     */
    public function setMetafield($metafield)
    {
        $this->metafield = $metafield;
    
        return $this;
    }

    /**
     * Get metafield
     *
     * @return \stdClass 
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    /**
     * Set option
     *
     * @param array $option
     * @return ProductVariant
     */
    public function setOption($option)
    {
        $this->option = $option;
    
        return $this;
    }

    /**
     * Get option
     *
     * @return array 
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return ProductVariant
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
     * Set price
     *
     * @param float $price
     * @return ProductVariant
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set requires_shipping
     *
     * @param string $requiresShipping
     * @return ProductVariant
     */
    public function setRequiresShipping($requiresShipping)
    {
        $this->requires_shipping = $requiresShipping;
    
        return $this;
    }

    /**
     * Get requires_shipping
     *
     * @return string 
     */
    public function getRequiresShipping()
    {
        return $this->requires_shipping;
    }

    /**
     * Set sku
     *
     * @param string $sku
     * @return ProductVariant
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    
        return $this;
    }

    /**
     * Get sku
     *
     * @return string 
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set taxable
     *
     * @param string $taxable
     * @return ProductVariant
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
    
        return $this;
    }

    /**
     * Get taxable
     *
     * @return string 
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ProductVariant
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set product
     *
     * @param \TeShopify\Entity\Product $product
     * @return ProductVariant
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
        $this->compare_at_price = $data['compare_at_price'];
        $this->fulfillment_service = $data['fulfillment_service'];
        $this->grams = $data['grams'];
        $this->inventory_management = $data['inventory_management'];
        $this->inventory_policy = $data['inventory_policy'];
        $this->inventory_quantity = $data['inventory_quantity'];
        $this->metafield = $data['metafield'];
        $this->option = $data['option'];
        $this->position = $data['position'];
        $this->price = $data['price'];
        $this->product = $data['product'];
        $this->requires_shipping = $data['requires_shipping'];
        $this->sku = $data['sku'];
        $this->taxable = $data['taxable'];
        $this->title = $data['title'];
    }
    
}