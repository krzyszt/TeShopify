<?php

namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="customer")
 */
class Customer {

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
    protected $accepts_marketing;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $email;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $first_name;
    
    /**
     * @ORM\Column(type="object")
     */
    protected $metafield;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $multipass_identifier;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $last_name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $last_order_id;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $last_order_name;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $note;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $orders_count;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $state;
    
    /**
     * @ORM\Column(type="array")
     */
    protected $tags;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $total_spent;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $verified_email;
    
    
    /**
     * Set id
     *
     * @param integer $id
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * Set accepts_marketing
     *
     * @param string $acceptsMarketing
     * @return Customer
     */
    public function setAcceptsMarketing($acceptsMarketing)
    {
        $this->accepts_marketing = $acceptsMarketing;
    
        return $this;
    }

    /**
     * Get accepts_marketing
     *
     * @return string 
     */
    public function getAcceptsMarketing()
    {
        return $this->accepts_marketing;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    
        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set metafield
     *
     * @param \stdClass $metafield
     * @return Customer
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
     * Set multipass_identifier
     *
     * @param string $multipassIdentifier
     * @return Customer
     */
    public function setMultipassIdentifier($multipassIdentifier)
    {
        $this->multipass_identifier = $multipassIdentifier;
    
        return $this;
    }

    /**
     * Get multipass_identifier
     *
     * @return string 
     */
    public function getMultipassIdentifier()
    {
        return $this->multipass_identifier;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    
        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set last_order_id
     *
     * @param integer $lastOrderId
     * @return Customer
     */
    public function setLastOrderId($lastOrderId)
    {
        $this->last_order_id = $lastOrderId;
    
        return $this;
    }

    /**
     * Get last_order_id
     *
     * @return integer 
     */
    public function getLastOrderId()
    {
        return $this->last_order_id;
    }

    /**
     * Set last_order_name
     *
     * @param string $lastOrderName
     * @return Customer
     */
    public function setLastOrderName($lastOrderName)
    {
        $this->last_order_name = $lastOrderName;
    
        return $this;
    }

    /**
     * Get last_order_name
     *
     * @return string 
     */
    public function getLastOrderName()
    {
        return $this->last_order_name;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Customer
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set orders_count
     *
     * @param integer $ordersCount
     * @return Customer
     */
    public function setOrdersCount($ordersCount)
    {
        $this->orders_count = $ordersCount;
    
        return $this;
    }

    /**
     * Get orders_count
     *
     * @return integer 
     */
    public function getOrdersCount()
    {
        return $this->orders_count;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Customer
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set tags
     *
     * @param array $tags
     * @return Customer
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
     * Set total_spent
     *
     * @param float $totalSpent
     * @return Customer
     */
    public function setTotalSpent($totalSpent)
    {
        $this->total_spent = $totalSpent;
    
        return $this;
    }

    /**
     * Get total_spent
     *
     * @return float 
     */
    public function getTotalSpent()
    {
        return $this->total_spent;
    }

    /**
     * Set verified_email
     *
     * @param string $verifiedEmail
     * @return Customer
     */
    public function setVerifiedEmail($verifiedEmail)
    {
        $this->verified_email = $verifiedEmail;
    
        return $this;
    }

    /**
     * Get verified_email
     *
     * @return string 
     */
    public function getVerifiedEmail()
    {
        return $this->verified_email;
    }
    
    public function getArrayCopy() {
        return get_object_vars($this);
    }

    public function populate($data = array()) {
        $this->id = $data['id'];
        $this->created_at = $data['created_at'];
        $this->updated_at = $data['updated_at'];
        $this->accepts_marketing = $data['accepts_marketing'];
        $this->email = $data['email'];
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->last_order_id = $data['last_order_id'];
        $this->last_order_name = $data['last_order_name'];
        $this->metafield = $data['metafield'];
        $this->multipass_identifier = $data['multipass_identifier'];
        $this->note = $data['note'];
        $this->orders_count = $data['orders_count'];
        $this->state = $data['state'];
        $this->tags = $data['tags'];
        $this->total_spent = $data['total_spent'];
        $this->verified_email = $data['verified_email'];
    }
    
}