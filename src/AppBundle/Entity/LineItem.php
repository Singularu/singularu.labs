<?php
/**
 * Created by PhpStorm.
 * User: n3st0r
 * Date: 21/01/2018
 * Time: 11:47
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="line_item")
 */
class LineItem
{

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint", unique=true)
     */
    protected $id;

    /** @ORM\ManyToOne(targetEntity="AppBundle\Entity\Order") */
    protected $order_id;

    /** @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fulfillment") */
    protected $fulfillment_id;

    /** @ORM\Column(type="bigint") */
    protected $variant_id;

    /** @ORM\Column(type="string", length=255) */
    protected $title;

    /** @ORM\Column(type="bigint") */
    protected $quantity;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $price;

    /** @ORM\Column(type="string", length=255) */
    protected $sku;

    /** @ORM\Column(type="string", length=255) */
    protected $variant_title;

    /** @ORM\Column(type="string", length=255) */
    protected $vendor;

    /** @ORM\Column(type="string", length=255) */
    protected $fulfillment_service;

    /** @ORM\Column(type="bigint") */
    protected $product_id;

    /** @ORM\Column(type="boolean") */
    protected $requires_shipping;

    /** @ORM\Column(type="boolean") */
    protected $taxable;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    protected $gift_card;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $pre_tax_price;

    /** @ORM\Column(type="string", length=255) */
    protected $name;

    /** @ORM\Column(type="string", length=255) */
    protected $variant_inventory_management;

    /** @ORM\Column(type="boolean") */
    protected $product_exists;

    /** @ORM\Column(type="integer") */
    protected $fulfillable_quantity;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $grams;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $total_discount;

    /** @ORM\Column(type="string", length=255) */
    protected $fulfillment_status;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId(\AppBundle\Entity\Order $order_id)
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFulfillmentId()
    {
        return $this->fulfillment_id;
    }

    /**
     * @param mixed $fulfillment_id
     */
    public function setFulfillmentId(\AppBundle\Entity\Fulfillment $fulfillment_id)
    {
        $this->fulfillment_id = $fulfillment_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariantId()
    {
        return $this->variant_id;
    }

    /**
     * @param mixed $variant_id
     */
    public function setVariantId($variant_id)
    {
        $this->variant_id = $variant_id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getVariantTitle()
    {
        return $this->variant_title;
    }

    /**
     * @param mixed $variant_title
     */
    public function setVariantTitle($variant_title)
    {
        $this->variant_title = $variant_title;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param mixed $vendor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    /**
     * @return mixed
     */
    public function getFulfillmentService()
    {
        return $this->fulfillment_service;
    }

    /**
     * @param mixed $fulfillment_service
     */
    public function setFulfillmentService($fulfillment_service)
    {
        $this->fulfillment_service = $fulfillment_service;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getRequiresShipping()
    {
        return $this->requires_shipping;
    }

    /**
     * @param mixed $requires_shipping
     */
    public function setRequiresShipping($requires_shipping)
    {
        $this->requires_shipping = $requires_shipping;
    }

    /**
     * @return mixed
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * @param mixed $taxable
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
    }

    /**
     * @return mixed
     */
    public function getGiftCard()
    {
        return $this->gift_card;
    }

    /**
     * @param mixed $gift_card
     */
    public function setGiftCard($gift_card)
    {
        $this->gift_card = $gift_card;
    }

    /**
     * @return mixed
     */
    public function getPreTaxPrice()
    {
        return $this->pre_tax_price;
    }

    /**
     * @param mixed $pre_tax_price
     */
    public function setPreTaxPrice($pre_tax_price)
    {
        $this->pre_tax_price = $pre_tax_price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getVariantInventoryManagement()
    {
        return $this->variant_inventory_management;
    }

    /**
     * @param mixed $variant_inventory_management
     */
    public function setVariantInventoryManagement($variant_inventory_management)
    {
        $this->variant_inventory_management = $variant_inventory_management;
    }

    /**
     * @return mixed
     */
    public function getProductExists()
    {
        return $this->product_exists;
    }

    /**
     * @param mixed $product_exists
     */
    public function setProductExists($product_exists)
    {
        $this->product_exists = $product_exists;
    }

    /**
     * @return mixed
     */
    public function getFulfillableQuantity()
    {
        return $this->fulfillable_quantity;
    }

    /**
     * @param mixed $fulfillable_quantity
     */
    public function setFulfillableQuantity($fulfillable_quantity)
    {
        $this->fulfillable_quantity = $fulfillable_quantity;
    }

    /**
     * @return mixed
     */
    public function getGrams()
    {
        return $this->grams;
    }

    /**
     * @param mixed $grams
     */
    public function setGrams($grams)
    {
        $this->grams = $grams;
    }

    /**
     * @return mixed
     */
    public function getTotalDiscount()
    {
        return $this->total_discount;
    }

    /**
     * @param mixed $total_discount
     */
    public function setTotalDiscount($total_discount)
    {
        $this->total_discount = $total_discount;
    }

    /**
     * @return mixed
     */
    public function getFulfillmentStatus()
    {
        return $this->fulfillment_status;
    }

    /**
     * @param mixed $fulfillment_status
     */
    public function setFulfillmentStatus($fulfillment_status)
    {
        $this->fulfillment_status = $fulfillment_status;
    }

    public function __toString()
    {
        return $this->getTitle();
    }

}