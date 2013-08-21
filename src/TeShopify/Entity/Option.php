<?php

namespace TeShopify\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="option")
 */
class Option {

    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updated_at;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    public function __construct() {
        $this->created_at = new \DateTime(date('Y-m-d H:i:s'));
    }

    public function getArrayCopy() {
        return get_object_vars($this);
    }
}