<?php
/**
 * Created by PhpStorm.
 * User: n3st0r
 * Date: 04/01/2018
 * Time: 13:27
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Customer
{

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint", unique=true)
     */
    protected $id;

    /** @ORM\Column(type="string", length=255) */
    protected $email;

    /** @ORM\Column(type="boolean", nullable=true) */
    protected $accepts_marketing;

    /** @ORM\Column(type="date") */
    protected $created_at;

    /** @ORM\Column(type="date") */
    protected $updated_at;

    /** @ORM\Column(type="string", length=100) */
    protected $first_name;

    /** @ORM\Column(type="string", length=255) */
    protected $last_name;

    /** @ORM\Column(type="integer") */
    protected $orders_count;

    /** @ORM\Column(type="string", length=100) */
    protected $state;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2, nullable=true) */
    protected $total_spent;

    /** @ORM\Column(type="bigint", nullable=true) */
    protected $last_order_id;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $note;

    /** @ORM\Column(type="boolean") */
    protected $verified_email;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    protected $multipass_identifier;

    /** @ORM\Column(type="boolean", nullable=true) */
    protected $tax_exempt;

    /** @ORM\Column(type="string", length=20, nullable=true) */
    protected $phone;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $tags;

    /** @ORM\Column(type="string", length=10) */
    protected $last_order_name;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAcceptsMarketing()
    {
        return $this->accepts_marketing;
    }

    /**
     * @param mixed $accepts_marketing
     */
    public function setAcceptsMarketing($accepts_marketing)
    {
        $this->accepts_marketing = $accepts_marketing;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrdersCount()
    {
        return $this->orders_count;
    }

    /**
     * @param mixed $orders_count
     */
    public function setOrdersCount($orders_count)
    {
        $this->orders_count = $orders_count;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalSpent()
    {
        return $this->total_spent;
    }

    /**
     * @param mixed $total_spent
     */
    public function setTotalSpent($total_spent)
    {
        $this->total_spent = $total_spent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastOrderId()
    {
        return $this->last_order_id;
    }

    /**
     * @param mixed $last_order_id
     */
    public function setLastOrderId($last_order_id)
    {
        $this->last_order_id = $last_order_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVerifiedEmail()
    {
        return $this->verified_email;
    }

    /**
     * @param mixed $verified_email
     */
    public function setVerifiedEmail($verified_email)
    {
        $this->verified_email = $verified_email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultipassIdentifier()
    {
        return $this->multipass_identifier;
    }

    /**
     * @param mixed $multipass_identifier
     */
    public function setMultipassIdentifier($multipass_identifier)
    {
        $this->multipass_identifier = $multipass_identifier;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxExempt()
    {
        return $this->tax_exempt;
    }

    /**
     * @param mixed $tax_exempt
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->tax_exempt = $tax_exempt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastOrderName()
    {
        return $this->last_order_name;
    }

    /**
     * @param mixed $last_order_name
     */
    public function setLastOrderName($last_order_name)
    {
        $this->last_order_name = $last_order_name;
        return $this;
    }

    public function __toString()
    {
        return $this->getFirstName();
    }

}