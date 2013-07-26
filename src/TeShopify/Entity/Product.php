<?php
namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product 
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
     * @ORM\Column(type="date")
     */
    protected $published_at;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $body_html;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $handle;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $product_type;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $published_scope;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $template_suffix;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $title;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $vendor;
    
    /**
     * @ORM\Column(type="array")
     */
    protected $options;
        
    /**
     * @ORM\Column(type="array")
     */
    protected $tags;
    
    /**
     * @ORM\OneToMany(targetEntity="ProductImage", mappedBy="product")
     */
    protected $images;
    
    /**
     * @ORM\OneToMany(targetEntity="ProductVariant", mappedBy="product")
     */
    protected $variants;

    public function __construct() {
        $this->images = new ArrayCollection();
        $this->variants = new ArrayCollection();
    }
    
    
    
}


