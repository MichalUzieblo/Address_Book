<?php

namespace AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AddressBookBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="name", type="string", length=48)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=48)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Phone", mappedBy="person")
     */
    private $phones;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Email", mappedBy="person")
     */
    private $emails;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Address", mappedBy="person")
     */
    private $addresses;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="persons")
     */
    private $user;
    
    /**
     * @ORM\ManyToMany(targetEntity="Rank", inversedBy="persons")
     * @ORM\JoinTable(name="users_ranks")
     */
    private $ranks;

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
     * Set name
     *
     * @param string $name
     * @return Person
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
     * Set surname
     *
     * @param string $surname
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Person
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add phones
     *
     * @param \AddressBookBundle\Entity\Phone $phones
     * @return Person
     */
    public function addPhone(\AddressBookBundle\Entity\Phone $phones)
    {
        $this->phones[] = $phones;

        return $this;
    }

    /**
     * Remove phones
     *
     * @param \AddressBookBundle\Entity\Phone $phones
     */
    public function removePhone(\AddressBookBundle\Entity\Phone $phones)
    {
        $this->phones->removeElement($phones);
    }

    /**
     * Get phones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Add emails
     *
     * @param \AddressBookBundle\Entity\Email $emails
     * @return Person
     */
    public function addEmail(\AddressBookBundle\Entity\Email $emails)
    {
        $this->emails[] = $emails;

        return $this;
    }

    /**
     * Remove emails
     *
     * @param \AddressBookBundle\Entity\Email $emails
     */
    public function removeEmail(\AddressBookBundle\Entity\Email $emails)
    {
        $this->emails->removeElement($emails);
    }

    /**
     * Get emails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmails()
    {
        return $this->emails;
    }
    /**
     * Constructor
     */
    
    /**
     * Add addresses
     *
     * @param \AddressBookBundle\Entity\Address $addresses
     * @return Person
     */
    public function addAddress(\AddressBookBundle\Entity\Address $addresses)
    {
        $this->addresses[] = $addresses;

        return $this;
    }

    /**
     * Remove addresses
     *
     * @param \AddressBookBundle\Entity\Address $addresses
     */
    public function removeAddress(\AddressBookBundle\Entity\Address $addresses)
    {
        $this->addresses->removeElement($addresses);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
    
    /**
     * Set user
     *
     * @param \AddressBookBundle\Entity\User $user
     * @return Person
     */
    public function setUser(\AddressBookBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AddressBookBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->phones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->emails = new \Doctrine\Common\Collections\ArrayCollection();
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ranks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ranks
     *
     * @param \AddressBookBundle\Entity\Rank $ranks
     * @return Person
     */
    public function addRank(\AddressBookBundle\Entity\Rank $ranks)
    {
        $this->ranks[] = $ranks;

        return $this;
    }

    /**
     * Remove ranks
     *
     * @param \AddressBookBundle\Entity\Rank $ranks
     */
    public function removeRank(\AddressBookBundle\Entity\Rank $ranks)
    {
        $this->ranks->removeElement($ranks);
    }

    /**
     * Get ranks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRanks()
    {
        return $this->ranks;
    }
}
