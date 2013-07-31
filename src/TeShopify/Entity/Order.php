<?php

namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="order")
 */
class Order {
    
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
    protected $browser_ip;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $buyer_accepts_marketing;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $cancel_reason;
    
    /**
     * @ORM\Column(type="date")
     */
    protected $cancelled_at;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $cart_token;
    

    /**
     * Set id
     *
     * @param integer $id
     * @return Order
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
     * @return Order
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
     * @return Order
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
     * Set browser_ip
     *
     * @param string $browserIp
     * @return Order
     */
    public function setBrowserIp($browserIp)
    {
        $this->browser_ip = $browserIp;
    
        return $this;
    }

    /**
     * Get browser_ip
     *
     * @return string 
     */
    public function getBrowserIp()
    {
        return $this->browser_ip;
    }

    /**
     * Set buyer_accepts_marketing
     *
     * @param integer $buyerAcceptsMarketing
     * @return Order
     */
    public function setBuyerAcceptsMarketing($buyerAcceptsMarketing)
    {
        $this->buyer_accepts_marketing = $buyerAcceptsMarketing;
    
        return $this;
    }

    /**
     * Get buyer_accepts_marketing
     *
     * @return integer 
     */
    public function getBuyerAcceptsMarketing()
    {
        return $this->buyer_accepts_marketing;
    }

    /**
     * Set cancel_reason
     *
     * @param string $cancelReason
     * @return Order
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancel_reason = $cancelReason;
    
        return $this;
    }

    /**
     * Get cancel_reason
     *
     * @return string 
     */
    public function getCancelReason()
    {
        return $this->cancel_reason;
    }

    /**
     * Set cancelled_at
     *
     * @param \DateTime $cancelledAt
     * @return Order
     */
    public function setCancelledAt($cancelledAt)
    {
        $this->cancelled_at = $cancelledAt;
    
        return $this;
    }

    /**
     * Get cancelled_at
     *
     * @return \DateTime 
     */
    public function getCancelledAt()
    {
        return $this->cancelled_at;
    }

    /**
     * Set cart_token
     *
     * @param string $cartToken
     * @return Order
     */
    public function setCartToken($cartToken)
    {
        $this->cart_token = $cartToken;
    
        return $this;
    }

    /**
     * Get cart_token
     *
     * @return string 
     */
    public function getCartToken()
    {
        return $this->cart_token;
    }
}