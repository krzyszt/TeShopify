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

    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

    public function getPublishedAt() {
        return $this->published_at;
    }

    public function setPublishedAt($published_at) {
        $this->published_at = $published_at;
    }

    public function getBodyHtml() {
        return $this->body_html;
    }

    public function setBodyHtml($body_html) {
        $this->body_html = $body_html;
    }

    public function getHandle() {
        return $this->handle;
    }

    public function setHandle($handle) {
        $this->handle = $handle;
    }

    public function getProductType() {
        return $this->product_type;
    }

    public function setProductType($product_type) {
        $this->product_type = $product_type;
    }

    public function getPublishedScope() {
        return $this->published_scope;
    }

    public function setPublishedScope($published_scope) {
        $this->published_scope = $published_scope;
    }

    public function getTemplateSuffix() {
        return $this->template_suffix;
    }

    public function setTemplateSuffix($template_suffix) {
        $this->template_suffix = $template_suffix;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getVendor() {
        return $this->vendor;
    }

    public function setVendor($vendor) {
        $this->vendor = $vendor;
    }

    public function getOptions() {
        return $this->options;
    }

    public function setOptions($options) {
        $this->options = $options;
    }

    public function getTags() {
        return $this->tags;
    }

    public function setTags($tags) {
        $this->tags = $tags;
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

}

