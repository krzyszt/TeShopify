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
     * @ORM\Column(type="date")
     */
    protected $created_at;
    
    /**
     * @ORM\Column(type="date")
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
     * @ORM\Column(type="decimal")
     */
    protected $price;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $product_id;
    
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
    
}


