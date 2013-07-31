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
     * @ORM\Column(type="object")
     */
    protected $client_details;
    
    /**
     * @ORM\Column(type="date")
     */
    protected $closed_at;
    
    /**
     * @ORM\Column(type="string", length=3)
     */
    protected $currency;
    
    /**
     * @ORM\ManyToOne(targetEntity="Customer")
     */
    protected $customer;

    /**
     * @ORM\Column(type="array")
     */
    protected $discount_codes;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $email;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $financial_status;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $fulfillment_status;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $gateway;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $landing_site;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $note;
    
    /**
     * @ORM\Column(type="array")
     */
    protected $note_attributes;

    /**
     * @ORM\Column(type="integer")
     */
    protected $number;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $order_number;
    
    /**
     * @ORM\Column(type="object")
     */
    protected $payment_details;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $processing_method;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $refering_site;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $subtotal_price;
    
    /**
     * @ORM\Column(type="array")
     */
    protected $tax_lines;
    
    /**
     * @ORM\Column(type="string")
     * 
     */
    protected $taxes_included;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $token;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $total_discounts;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $total_line_items_price;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $total_price;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $total_tax;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $total_weight;
    
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

    /**
     * Set client_details
     *
     * @param \stdClass $clientDetails
     * @return Order
     */
    public function setClientDetails($clientDetails)
    {
        $this->client_details = $clientDetails;
    
        return $this;
    }

    /**
     * Get client_details
     *
     * @return \stdClass 
     */
    public function getClientDetails()
    {
        return $this->client_details;
    }

    /**
     * Set closed_at
     *
     * @param \DateTime $closedAt
     * @return Order
     */
    public function setClosedAt($closedAt)
    {
        $this->closed_at = $closedAt;
    
        return $this;
    }

    /**
     * Get closed_at
     *
     * @return \DateTime 
     */
    public function getClosedAt()
    {
        return $this->closed_at;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return Order
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    
        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set discount_codes
     *
     * @param array $discountCodes
     * @return Order
     */
    public function setDiscountCodes($discountCodes)
    {
        $this->discount_codes = $discountCodes;
    
        return $this;
    }

    /**
     * Get discount_codes
     *
     * @return array 
     */
    public function getDiscountCodes()
    {
        return $this->discount_codes;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Order
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
     * Set financial_status
     *
     * @param string $financialStatus
     * @return Order
     */
    public function setFinancialStatus($financialStatus)
    {
        $this->financial_status = $financialStatus;
    
        return $this;
    }

    /**
     * Get financial_status
     *
     * @return string 
     */
    public function getFinancialStatus()
    {
        return $this->financial_status;
    }

    /**
     * Set fulfillment_status
     *
     * @param string $fulfillmentStatus
     * @return Order
     */
    public function setFulfillmentStatus($fulfillmentStatus)
    {
        $this->fulfillment_status = $fulfillmentStatus;
    
        return $this;
    }

    /**
     * Get fulfillment_status
     *
     * @return string 
     */
    public function getFulfillmentStatus()
    {
        return $this->fulfillment_status;
    }

    /**
     * Set gateway
     *
     * @param string $gateway
     * @return Order
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
    
        return $this;
    }

    /**
     * Get gateway
     *
     * @return string 
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set landing_site
     *
     * @param string $landingSite
     * @return Order
     */
    public function setLandingSite($landingSite)
    {
        $this->landing_site = $landingSite;
    
        return $this;
    }

    /**
     * Get landing_site
     *
     * @return string 
     */
    public function getLandingSite()
    {
        return $this->landing_site;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Order
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
     * Set note
     *
     * @param string $note
     * @return Order
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
     * Set note_attributes
     *
     * @param array $noteAttributes
     * @return Order
     */
    public function setNoteAttributes($noteAttributes)
    {
        $this->note_attributes = $noteAttributes;
    
        return $this;
    }

    /**
     * Get note_attributes
     *
     * @return array 
     */
    public function getNoteAttributes()
    {
        return $this->note_attributes;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Order
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set order_number
     *
     * @param string $orderNumber
     * @return Order
     */
    public function setOrderNumber($orderNumber)
    {
        $this->order_number = $orderNumber;
    
        return $this;
    }

    /**
     * Get order_number
     *
     * @return string 
     */
    public function getOrderNumber()
    {
        return $this->order_number;
    }

    /**
     * Set payment_details
     *
     * @param \stdClass $paymentDetails
     * @return Order
     */
    public function setPaymentDetails($paymentDetails)
    {
        $this->payment_details = $paymentDetails;
    
        return $this;
    }

    /**
     * Get payment_details
     *
     * @return \stdClass 
     */
    public function getPaymentDetails()
    {
        return $this->payment_details;
    }

    /**
     * Set processing_method
     *
     * @param string $processingMethod
     * @return Order
     */
    public function setProcessingMethod($processingMethod)
    {
        $this->processing_method = $processingMethod;
    
        return $this;
    }

    /**
     * Get processing_method
     *
     * @return string 
     */
    public function getProcessingMethod()
    {
        return $this->processing_method;
    }

    /**
     * Set subtotal_price
     *
     * @param float $subtotalPrice
     * @return Order
     */
    public function setSubtotalPrice($subtotalPrice)
    {
        $this->subtotal_price = $subtotalPrice;
    
        return $this;
    }

    /**
     * Get subtotal_price
     *
     * @return float 
     */
    public function getSubtotalPrice()
    {
        return $this->subtotal_price;
    }

    /**
     * Set tax_lines
     *
     * @param array $taxLines
     * @return Order
     */
    public function setTaxLines($taxLines)
    {
        $this->tax_lines = $taxLines;
    
        return $this;
    }

    /**
     * Get tax_lines
     *
     * @return array 
     */
    public function getTaxLines()
    {
        return $this->tax_lines;
    }

    /**
     * Set taxes_included
     *
     * @param string $taxesIncluded
     * @return Order
     */
    public function setTaxesIncluded($taxesIncluded)
    {
        $this->taxes_included = $taxesIncluded;
    
        return $this;
    }

    /**
     * Get taxes_included
     *
     * @return string 
     */
    public function getTaxesIncluded()
    {
        return $this->taxes_included;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Order
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set total_discounts
     *
     * @param float $totalDiscounts
     * @return Order
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->total_discounts = $totalDiscounts;
    
        return $this;
    }

    /**
     * Get total_discounts
     *
     * @return float 
     */
    public function getTotalDiscounts()
    {
        return $this->total_discounts;
    }

    /**
     * Set total_line_items_price
     *
     * @param float $totalLineItemsPrice
     * @return Order
     */
    public function setTotalLineItemsPrice($totalLineItemsPrice)
    {
        $this->total_line_items_price = $totalLineItemsPrice;
    
        return $this;
    }

    /**
     * Get total_line_items_price
     *
     * @return float 
     */
    public function getTotalLineItemsPrice()
    {
        return $this->total_line_items_price;
    }

    /**
     * Set total_price
     *
     * @param float $totalPrice
     * @return Order
     */
    public function setTotalPrice($totalPrice)
    {
        $this->total_price = $totalPrice;
    
        return $this;
    }

    /**
     * Get total_price
     *
     * @return float 
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * Set total_tax
     *
     * @param float $totalTax
     * @return Order
     */
    public function setTotalTax($totalTax)
    {
        $this->total_tax = $totalTax;
    
        return $this;
    }

    /**
     * Get total_tax
     *
     * @return float 
     */
    public function getTotalTax()
    {
        return $this->total_tax;
    }

    /**
     * Set total_weight
     *
     * @param integer $totalWeight
     * @return Order
     */
    public function setTotalWeight($totalWeight)
    {
        $this->total_weight = $totalWeight;
    
        return $this;
    }

    /**
     * Get total_weight
     *
     * @return integer 
     */
    public function getTotalWeight()
    {
        return $this->total_weight;
    }

    /**
     * Set customer
     *
     * @param \TeShopify\Entity\Customer $customer
     * @return Order
     */
    public function setCustomer(\TeShopify\Entity\Customer $customer = null)
    {
        $this->customer = $customer;
    
        return $this;
    }

    /**
     * Get customer
     *
     * @return \TeShopify\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    
    /**
     * Set refering_site
     *
     * @param string $referingSite
     * @return Order
     */
    public function setReferingSite($referingSite)
    {
        $this->refering_site = $referingSite;
    
        return $this;
    }

    /**
     * Get refering_site
     *
     * @return string 
     */
    public function getReferingSite()
    {
        return $this->refering_site;
    }
    
    public function getArrayCopy() {
        return get_object_vars($this);
    }

    public function populate($data = array()) {
        $this->id = $data['id'];
        $this->created_at = $data['created_at'];
        $this->updated_at = $data['updated_at'];
        $this->browser_ip = $data['browser_ip'];
        $this->buyer_accepts_marketing = $data['buyer_accepts_marketing'];
        $this->cancel_reason = $data['cancel_reason'];
        $this->cancelled_at = $data['cancelled_at'];
        $this->cart_token = $data['cart_token'];
        $this->client_details = $data['client_details'];
        $this->closed_at = $data['closed_at'];
        $this->currency = $data['currency'];
        $this->customer = $data['customer'];
        $this->discount_codes = $data['discount_codes'];
        $this->email = $data['email'];
        $this->financial_status = $data['financial_status'];
        $this->fulfillment_status = $data['fulfillment_status'];
        $this->gateway = $data['gateway'];
        $this->landing_site = $data['landing_site'];
        $this->name = $data['name'];
        $this->note = $data['note'];
        $this->note_attributes = $data['note_attributes'];
        $this->number = $data['number'];
        $this->order_number = $data['order_number'];
        $this->payment_details = $data['payment_details'];
        $this->processing_method = $data['processing_method'];
        $this->refering_site = $data['refering_site'];
        $this->subtotal_price = $data['subtotal_price'];
        $this->tax_lines = $data['tax_lines'];
        $this->taxes_included = $data['taxes_included'];
        $this->token = $data['token'];
        $this->total_discounts = $data['total_discounts'];
        $this->total_line_items_price = $data['otal_line_items_price'];
        $this->total_price = $data['total_price'];
        $this->total_tax = $data['total_tax'];
        $this->total_weight = $data['total_weight'];
    }
}