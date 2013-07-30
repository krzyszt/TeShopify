<?php

namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="webservice")
 */
class Webservice {

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
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $description;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $uri;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $apikey;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $sharedsecret;
    
    /**
     * @ORM\Column(type="date")
     */
    protected $syncdate;
    
    /**
     * @ORM\Column(type="time")
     */
    protected $synctime;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $issync;
    
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

    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name = $name;
    }
    
    public function getDesctription(){
        return $this->description;
    }
    
    public function setDescription($description){
        $this->description = $description;
    }
    
    public function getUri(){
        return $this->uri;
    }
    
    public function setUri($uri){
        $this->uri = $uri;
    }
    
    public function getApikey(){
        return $this->apikey;
    }
    
    public function setApikey($apikey){
        $this->apikey = $apikey;
    }
    
    public function getSharedsecret(){
        return $this->sharedsecret;
    }
    
    public function setSharedsecret($sharedsecret){
        $this->sharedsecret = $sharedsecret;
    }

    public function getSyncdate(){
        return $this->syncdate;
    }
    
    public function setSyncdate($syncdate){
        $this->syncdate = $syncdate;
    }
    
    public function getSynctime(){
        return $this->synctime;
    }
    
    public function setSynctime($synctime){
        $this->synctime = $synctime;
    }
    
    public function getIssync(){
        return $this->issync;
    }
    
    public function setIssync($issync){
        $this->issync = $issync;
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

