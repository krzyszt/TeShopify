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
    protected $src;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $position;
    
    /**
     * @ORM\ManyToOne(targetEntity="Product")
     */
    protected $product;
    
}


