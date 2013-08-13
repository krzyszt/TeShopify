<?php

namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product {

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

    public function getArrayCopy() {
        return get_object_vars($this);
    }

    public function populate($data = array()) {
        $this->id = $data['id'];
        $this->created_at = $data['created_at'];
        $this->updated_at = $data['updated_at'];
        $this->published_at = $data['published_at'];
        $this->body_html = $data['body_html'];
        $this->handle = $data['handle'];
        $this->product_type = $data['product_type'];
        $this->published_scope = $data['published_scope'];
        $this->template_suffix = $data['template_suffix'];
        $this->title = $data['title'];
        $this->vendor = $data['vendor'];
        $this->options = $data['options'];
        $this->tags = $data['tags'];
    }


    /**
     * Set id
     *
     * @param integer $id
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * Set published_at
     *
     * @param \DateTime $publishedAt
     * @return Product
     */
    public function setPublishedAt($publishedAt)
    {
        $this->published_at = $publishedAt;
    
        return $this;
    }

    /**
     * Get published_at
     *
     * @return \DateTime 
     */
    public function getPublishedAt()
    {
        return $this->published_at;
    }

    /**
     * Set body_html
     *
     * @param string $bodyHtml
     * @return Product
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->body_html = $bodyHtml;
    
        return $this;
    }

    /**
     * Get body_html
     *
     * @return string 
     */
    public function getBodyHtml()
    {
        return $this->body_html;
    }

    /**
     * Set handle
     *
     * @param string $handle
     * @return Product
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
    
        return $this;
    }

    /**
     * Get handle
     *
     * @return string 
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * Set product_type
     *
     * @param string $productType
     * @return Product
     */
    public function setProductType($productType)
    {
        $this->product_type = $productType;
    
        return $this;
    }

    /**
     * Get product_type
     *
     * @return string 
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     * Set published_scope
     *
     * @param string $publishedScope
     * @return Product
     */
    public function setPublishedScope($publishedScope)
    {
        $this->published_scope = $publishedScope;
    
        return $this;
    }

    /**
     * Get published_scope
     *
     * @return string 
     */
    public function getPublishedScope()
    {
        return $this->published_scope;
    }

    /**
     * Set template_suffix
     *
     * @param string $templateSuffix
     * @return Product
     */
    public function setTemplateSuffix($templateSuffix)
    {
        $this->template_suffix = $templateSuffix;
    
        return $this;
    }

    /**
     * Get template_suffix
     *
     * @return string 
     */
    public function getTemplateSuffix()
    {
        return $this->template_suffix;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Product
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
     * Set vendor
     *
     * @param string $vendor
     * @return Product
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    
        return $this;
    }

    /**
     * Get vendor
     *
     * @return string 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set options
     *
     * @param array $options
     * @return Product
     */
    public function setOptions($options)
    {
        $this->options = $options;
    
        return $this;
    }

    /**
     * Get options
     *
     * @return array 
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set tags
     *
     * @param array $tags
     * @return Product
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }

    /**
     * Get tags
     *
     * @return array 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add images
     *
     * @param \TeShopify\Entity\ProductImage $images
     * @return Product
     */
    public function addImage(\TeShopify\Entity\ProductImage $images)
    {
        $this->images[] = $images;
    
        return $this;
    }

    /**
     * Remove images
     *
     * @param \TeShopify\Entity\ProductImage $images
     */
    public function removeImage(\TeShopify\Entity\ProductImage $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add variants
     *
     * @param \TeShopify\Entity\ProductVariant $variants
     * @return Product
     */
    public function addVariant(\TeShopify\Entity\ProductVariant $variants)
    {
        $this->variants[] = $variants;
    
        return $this;
    }

    /**
     * Remove variants
     *
     * @param \TeShopify\Entity\ProductVariant $variants
     */
    public function removeVariant(\TeShopify\Entity\ProductVariant $variants)
    {
        $this->variants->removeElement($variants);
    }

    /**
     * Get variants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVariants()
    {
        return $this->variants;
    }
}