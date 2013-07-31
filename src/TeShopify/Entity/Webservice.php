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
     * @return Webservice
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
     * @return Webservice
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
     * @return Webservice
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
     * @return Webservice
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
     * Set description
     *
     * @param string $description
     * @return Webservice
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return Webservice
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    
        return $this;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set apikey
     *
     * @param string $apikey
     * @return Webservice
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;
    
        return $this;
    }

    /**
     * Get apikey
     *
     * @return string 
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * Set sharedsecret
     *
     * @param string $sharedsecret
     * @return Webservice
     */
    public function setSharedsecret($sharedsecret)
    {
        $this->sharedsecret = $sharedsecret;
    
        return $this;
    }

    /**
     * Get sharedsecret
     *
     * @return string 
     */
    public function getSharedsecret()
    {
        return $this->sharedsecret;
    }

    /**
     * Set syncdate
     *
     * @param \DateTime $syncdate
     * @return Webservice
     */
    public function setSyncdate($syncdate)
    {
        $this->syncdate = $syncdate;
    
        return $this;
    }

    /**
     * Get syncdate
     *
     * @return \DateTime 
     */
    public function getSyncdate()
    {
        return $this->syncdate;
    }

    /**
     * Set synctime
     *
     * @param \DateTime $synctime
     * @return Webservice
     */
    public function setSynctime($synctime)
    {
        $this->synctime = $synctime;
    
        return $this;
    }

    /**
     * Get synctime
     *
     * @return \DateTime 
     */
    public function getSynctime()
    {
        return $this->synctime;
    }

    /**
     * Set issync
     *
     * @param integer $issync
     * @return Webservice
     */
    public function setIssync($issync)
    {
        $this->issync = $issync;
    
        return $this;
    }

    /**
     * Get issync
     *
     * @return integer 
     */
    public function getIssync()
    {
        return $this->issync;
    }
}