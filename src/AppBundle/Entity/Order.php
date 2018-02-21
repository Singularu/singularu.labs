<?php
/**
 * Created by PhpStorm.
 * User: n3st0r
 * Date: 08/01/2018
 * Time: 17:19
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Order
{

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint", unique=true)
     */
    protected $id;

    /** @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer") */
    protected $customer_id;

    /** @ORM\Column(type="string", length=255) */
    protected $email;

    /** @ORM\Column(type="date", nullable=true) */
    protected $closed_at;

    /** @ORM\Column(type="date") */
    protected $created_at;

    /** @ORM\Column(type="date") */
    protected $updated_at;

    /** @ORM\Column(type="integer") */
    protected $number;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $note;

    /** @ORM\Column(type="simple_array") */
    protected $token;

    /** @ORM\Column(type="string", length=255) */
    protected $gateway;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $total_price;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $subtotal_price;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $total_weight;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $total_tax;

    /** @ORM\Column(type="boolean") */
    protected $taxes_included;

    /** @ORM\Column(type="string", length=10) */
    protected $currency;

    /** @ORM\Column(type="string", length=10) */
    protected $financial_status;

    /** @ORM\Column(type="boolean") */
    protected $confirmed;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $total_discounts;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $total_line_items_price;

    /** @ORM\Column(type="simple_array") */
    protected $cart_token;

    /** @ORM\Column(type="boolean") */
    protected $buyer_accepts_marketing;

    /** @ORM\Column(type="string", length=25) */
    protected $name;

    /** @ORM\Column(type="string", length=255) */
    protected $referring_site;

    /** @ORM\Column(type="string", length=255) */
    protected $landing_site;

    /** @ORM\Column(type="date", nullable=true) */
    protected $cancelled_at;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $cancel_reason;

    /** @ORM\Column(type="decimal",precision= 10, scale= 2) */
    protected $total_price_usd;

    /** @ORM\Column(type="simple_array") */
    protected $checkout_token;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $reference;

    /** @ORM\Column(type="bigint", nullable=true) */
    protected $user_id;

    /** @ORM\Column(type="bigint", nullable=true) */
    protected $location_id;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $source_identifier;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $source_url;

    /** @ORM\Column(type="date") */
    protected $processed_at;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $device_id;

    /** @ORM\Column(type="string", length=20, nullable=true) */
    protected $phone;

    /** @ORM\Column(type="string", length=10) */
    protected $customer_locale;

    /** @ORM\Column(type="integer") */
    protected $app_id;

    /** @ORM\Column(type="string", length=20) */
    protected $browser_ip;

    /** @ORM\Column(type="string", length=255) */
    protected $landing_site_ref;

    /** @ORM\Column(type="integer") */
    protected $order_number;

    /** @ORM\Column(type="string", length=255) */
    protected $processing_method;

    /** @ORM\Column(type="bigint") */
    protected $checkout_id;

    /** @ORM\Column(type="string", length=255) */
    protected $source_name;

    /** @ORM\Column(type="string", length=255) */
    protected $fulfillment_status;

    /** @ORM\Column(type="string", length=255) */
    protected $contact_email;

    /** @ORM\Column(type="string", length=255) */
    protected $order_status_url;

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
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param mixed $customer_id
     */
    public function setCustomerId(\AppBundle\Entity\Customer $customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
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
    }

    /**
     * @return mixed
     */
    public function getClosedAt()
    {
        return $this->closed_at;
    }

    /**
     * @param mixed $closed_at
     */
    public function setClosedAt($closed_at)
    {
        $this->closed_at = $closed_at;
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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
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
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * @param mixed $gateway
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * @param mixed $total_price
     */
    public function setTotalPrice($total_price)
    {
        $this->total_price = $total_price;
    }

    /**
     * @return mixed
     */
    public function getSubtotalPrice()
    {
        return $this->subtotal_price;
    }

    /**
     * @param mixed $subtotal_price
     */
    public function setSubtotalPrice($subtotal_price)
    {
        $this->subtotal_price = $subtotal_price;
    }

    /**
     * @return mixed
     */
    public function getTotalWeight()
    {
        return $this->total_weight;
    }

    /**
     * @param mixed $total_weight
     */
    public function setTotalWeight($total_weight)
    {
        $this->total_weight = $total_weight;
    }

    /**
     * @return mixed
     */
    public function getTotalTax()
    {
        return $this->total_tax;
    }

    /**
     * @param mixed $total_tax
     */
    public function setTotalTax($total_tax)
    {
        $this->total_tax = $total_tax;
    }

    /**
     * @return mixed
     */
    public function getTaxesIncluded()
    {
        return $this->taxes_included;
    }

    /**
     * @param mixed $taxes_included
     */
    public function setTaxesIncluded($taxes_included)
    {
        $this->taxes_included = $taxes_included;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getFinancialStatus()
    {
        return $this->financial_status;
    }

    /**
     * @param mixed $financial_status
     */
    public function setFinancialStatus($financial_status)
    {
        $this->financial_status = $financial_status;
    }

    /**
     * @return mixed
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * @param mixed $confirmed
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;
    }

    /**
     * @return mixed
     */
    public function getTotalDiscounts()
    {
        return $this->total_discounts;
    }

    /**
     * @param mixed $total_discounts
     */
    public function setTotalDiscounts($total_discounts)
    {
        $this->total_discounts = $total_discounts;
    }

    /**
     * @return mixed
     */
    public function getTotalLineItemsPrice()
    {
        return $this->total_line_items_price;
    }

    /**
     * @param mixed $total_line_items_price
     */
    public function setTotalLineItemsPrice($total_line_items_price)
    {
        $this->total_line_items_price = $total_line_items_price;
    }

    /**
     * @return mixed
     */
    public function getCartToken()
    {
        return $this->cart_token;
    }

    /**
     * @param mixed $cart_token
     */
    public function setCartToken($cart_token)
    {
        $this->cart_token = $cart_token;
    }

    /**
     * @return mixed
     */
    public function getBuyerAcceptsMarketing()
    {
        return $this->buyer_accepts_marketing;
    }

    /**
     * @param mixed $buyer_accepts_marketing
     */
    public function setBuyerAcceptsMarketing($buyer_accepts_marketing)
    {
        $this->buyer_accepts_marketing = $buyer_accepts_marketing;
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
    public function getReferringSite()
    {
        return $this->referring_site;
    }

    /**
     * @param mixed $referring_site
     */
    public function setReferringSite($referring_site)
    {
        $this->referring_site = $referring_site;
    }

    /**
     * @return mixed
     */
    public function getLandingSite()
    {
        return $this->landing_site;
    }

    /**
     * @param mixed $landing_site
     */
    public function setLandingSite($landing_site)
    {
        $this->landing_site = $landing_site;
    }

    /**
     * @return mixed
     */
    public function getCancelledAt()
    {
        return $this->cancelled_at;
    }

    /**
     * @param mixed $cancelled_at
     */
    public function setCancelledAt($cancelled_at)
    {
        $this->cancelled_at = $cancelled_at;
    }

    /**
     * @return mixed
     */
    public function getCancelReason()
    {
        return $this->cancel_reason;
    }

    /**
     * @param mixed $cancel_reason
     */
    public function setCancelReason($cancel_reason)
    {
        $this->cancel_reason = $cancel_reason;
    }

    /**
     * @return mixed
     */
    public function getTotalPriceUsd()
    {
        return $this->total_price_usd;
    }

    /**
     * @param mixed $total_price_usd
     */
    public function setTotalPriceUsd($total_price_usd)
    {
        $this->total_price_usd = $total_price_usd;
    }

    /**
     * @return mixed
     */
    public function getCheckoutToken()
    {
        return $this->checkout_token;
    }

    /**
     * @param mixed $checkout_token
     */
    public function setCheckoutToken($checkout_token)
    {
        $this->checkout_token = $checkout_token;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * @param mixed $location_id
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
    }

    /**
     * @return mixed
     */
    public function getSourceIdentifier()
    {
        return $this->source_identifier;
    }

    /**
     * @param mixed $source_identifier
     */
    public function setSourceIdentifier($source_identifier)
    {
        $this->source_identifier = $source_identifier;
    }

    /**
     * @return mixed
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * @param mixed $source_url
     */
    public function setSourceUrl($source_url)
    {
        $this->source_url = $source_url;
    }

    /**
     * @return mixed
     */
    public function getProcessedAt()
    {
        return $this->processed_at;
    }

    /**
     * @param mixed $processed_at
     */
    public function setProcessedAt($processed_at)
    {
        $this->processed_at = $processed_at;
    }

    /**
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * @param mixed $device_id
     */
    public function setDeviceId($device_id)
    {
        $this->device_id = $device_id;
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
    }

    /**
     * @return mixed
     */
    public function getCustomerLocale()
    {
        return $this->customer_locale;
    }

    /**
     * @param mixed $customer_locale
     */
    public function setCustomerLocale($customer_locale)
    {
        $this->customer_locale = $customer_locale;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @param mixed $app_id
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
    }

    /**
     * @return mixed
     */
    public function getBrowserIp()
    {
        return $this->browser_ip;
    }

    /**
     * @param mixed $browser_ip
     */
    public function setBrowserIp($browser_ip)
    {
        $this->browser_ip = $browser_ip;
    }

    /**
     * @return mixed
     */
    public function getLandingSiteRef()
    {
        return $this->landing_site_ref;
    }

    /**
     * @param mixed $landing_site_ref
     */
    public function setLandingSiteRef($landing_site_ref)
    {
        $this->landing_site_ref = $landing_site_ref;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->order_number;
    }

    /**
     * @param mixed $order_number
     */
    public function setOrderNumber($order_number)
    {
        $this->order_number = $order_number;
    }

    /**
     * @return mixed
     */
    public function getProcessingMethod()
    {
        return $this->processing_method;
    }

    /**
     * @param mixed $processing_method
     */
    public function setProcessingMethod($processing_method)
    {
        $this->processing_method = $processing_method;
    }

    /**
     * @return mixed
     */
    public function getCheckoutId()
    {
        return $this->checkout_id;
    }

    /**
     * @param mixed $checkout_id
     */
    public function setCheckoutId($checkout_id)
    {
        $this->checkout_id = $checkout_id;
    }

    /**
     * @return mixed
     */
    public function getSourceName()
    {
        return $this->source_name;
    }

    /**
     * @param mixed $source_name
     */
    public function setSourceName($source_name)
    {
        $this->source_name = $source_name;
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

    /**
     * @return mixed
     */
    public function getContactEmail()
    {
        return $this->contact_email;
    }

    /**
     * @param mixed $contact_email
     */
    public function setContactEmail($contact_email)
    {
        $this->contact_email = $contact_email;
    }

    /**
     * @return mixed
     */
    public function getOrderStatusUrl()
    {
        return $this->order_status_url;
    }

    /**
     * @param mixed $order_status_url
     */
    public function setOrderStatusUrl($order_status_url)
    {
        $this->order_status_url = $order_status_url;
    }

    public function __toString()
    {
        return $this->getEmail();
    }

}