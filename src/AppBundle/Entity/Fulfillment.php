<?php
/**
 * Created by PhpStorm.
 * User: n3st0r
 * Date: 21/01/2018
 * Time: 12:25
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class fulfillment
{

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint", unique=true)
     */
    protected $id;

    /** @ORM\ManyToOne(targetEntity="AppBundle\Entity\Order") */
    protected $order_id;

    /** @ORM\Column(type="string", length=255) */
    protected $status;

    /** @ORM\Column(type="date") */
    protected $created_at;

    /** @ORM\Column(type="string", length=255) */
    protected $service;

    /** @ORM\Column(type="date") */
    protected $updated_at;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    protected $tracking_company;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    protected $shipment_status;

    /** @ORM\Column(type="string", length=255) */
    protected $tracking_number;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $tracking_numbers;

    /** @ORM\Column(type="string", length=255) */
    protected $tracking_url;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $tracking_urls;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $receipt;

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
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
    }

    /**
     * @return mixed
     */
    public function getTrackingCompany()
    {
        return $this->tracking_company;
    }

    /**
     * @param mixed $tracking_company
     */
    public function setTrackingCompany($tracking_company)
    {
        $this->tracking_company = $tracking_company;
    }

    /**
     * @return mixed
     */
    public function getShipmentStatus()
    {
        return $this->shipment_status;
    }

    /**
     * @param mixed $shipment_status
     */
    public function setShipmentStatus($shipment_status)
    {
        $this->shipment_status = $shipment_status;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }

    /**
     * @param mixed $tracking_number
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->tracking_number = $tracking_number;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumbers()
    {
        return $this->tracking_numbers;
    }

    /**
     * @param mixed $tracking_numbers
     */
    public function setTrackingNumbers($tracking_numbers)
    {
        $this->tracking_numbers = $tracking_numbers;
    }

    /**
     * @return mixed
     */
    public function getTrackingUrl()
    {
        return $this->tracking_url;
    }

    /**
     * @param mixed $tracking_url
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->tracking_url = $tracking_url;
    }

    /**
     * @return mixed
     */
    public function getTrackingUrls()
    {
        return $this->tracking_urls;
    }

    /**
     * @param mixed $tracking_urls
     */
    public function setTrackingUrls($tracking_urls)
    {
        $this->tracking_urls = $tracking_urls;
    }

    /**
     * @return mixed
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * @param mixed $receipt
     */
    public function setReceipt($receipt)
    {
        $this->receipt = $receipt;
    }

    public function __toString()
    {
        return $this->getStatus();
    }

}