<?php
/**
 * Created by PhpStorm.
 * User: n3st0r
 * Date: 04/01/2018
 * Time: 16:14
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Address
{

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint", unique=true)
     */
    protected $id;

    /** @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer") */
    protected $customer_id;

    /** @ORM\Column(type="string", length=100) */
    protected $first_name;

    /** @ORM\Column(type="string", length=255) */
    protected $last_name;

    /** @ORM\Column(type="string", length=255, nullable=true) */
    protected $company;

    /** @ORM\Column(type="simple_array") */
    protected $address1;

    /** @ORM\Column(type="simple_array", nullable=true) */
    protected $address2;

    /** @ORM\Column(type="string", length=255) */
    protected $city;

    /** @ORM\Column(type="string", length=255) */
    protected $province;

    /** @ORM\Column(type="string", length=255) */
    protected $country;

    /** @ORM\Column(type="string", length=10) */
    protected $zip;

    /** @ORM\Column(type="string", length=20) */
    protected $phone;

    /** @ORM\Column(type="string", length=255) */
    protected $name;

    /** @ORM\Column(type="string", length=10) */
    protected $province_code;

    /** @ORM\Column(type="string", length=10) */
    protected $country_code;

    /** @ORM\Column(type="string", length=100) */
    protected $country_name;

    /** @ORM\Column(type="boolean", nullable=true) */
    protected $default;

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
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param mixed $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param mixed $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
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
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvinceCode()
    {
        return $this->province_code;
    }

    /**
     * @param mixed $province_code
     */
    public function setProvinceCode($province_code)
    {
        $this->province_code = $province_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param mixed $country_code
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->country_name;
    }

    /**
     * @param mixed $country_name
     */
    public function setCountryName($country_name)
    {
        $this->country_name = $country_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    public function __toString()
    {
        return $this->getFirstName();
    }

}