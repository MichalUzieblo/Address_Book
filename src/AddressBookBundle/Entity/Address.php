<?php

namespace AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="AddressBookBundle\Repository\AddressRepository")
 */
class Address
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="streetName", type="string", length=48, nullable=true)
     */
    private $streetName;

    /**
     * @var int
     *
     * @ORM\Column(name="nrOfHouse", type="integer")
     */
    private $nrOfHouse;

    /**
     * @var int
     *
     * @ORM\Column(name="nrOfFlat", type="integer", nullable=true)
     */
    private $nrOfFlat;

    /**
     * @var string
     *
     * @ORM\Column(name="zipCode", type="string", length=6)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=48)
     */
    private $city;
    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=48)
     */
    private $type;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="addresses")
     */
    private $person;


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
     * Set streetName
     *
     * @param string $streetName
     * @return Address
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * Get streetName
     *
     * @return string 
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Set nrOfHouse
     *
     * @param integer $nrOfHouse
     * @return Address
     */
    public function setNrOfHouse($nrOfHouse)
    {
        $this->nrOfHouse = $nrOfHouse;

        return $this;
    }

    /**
     * Get nrOfHouse
     *
     * @return integer 
     */
    public function getNrOfHouse()
    {
        return $this->nrOfHouse;
    }

    /**
     * Set nrOfFlat
     *
     * @param integer $nrOfFlat
     * @return Address
     */
    public function setNrOfFlat($nrOfFlat)
    {
        $this->nrOfFlat = $nrOfFlat;

        return $this;
    }

    /**
     * Get nrOfFlat
     *
     * @return integer 
     */
    public function getNrOfFlat()
    {
        return $this->nrOfFlat;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Address
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set person
     *
     * @param \AddressBookBundle\Entity\Person $person
     * @return Address
     */
    public function setPerson(\AddressBookBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \AddressBookBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Address
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
