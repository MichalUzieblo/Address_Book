<?php

namespace AddressBookBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/

class User extends BaseUser
    {
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Person", mappedBy="user")
     */
    private $persons;

    public function __construct()
    {
        parent::__construct();
        $this->persons = new \Doctrine\Common\Collections\ArrayCollection();
    } 

    /**
     * Add persons
     *
     * @param \AddressBookBundle\Entity\Person $persons
     * @return User
     */
    public function addPerson(\AddressBookBundle\Entity\Person $persons)
    {
        $this->persons[] = $persons;

        return $this;
    }

    /**
     * Remove persons
     *
     * @param \AddressBookBundle\Entity\Person $persons
     */
    public function removePerson(\AddressBookBundle\Entity\Person $persons)
    {
        $this->persons->removeElement($persons);
    }

    /**
     * Get persons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * Add ranks
     *
     * @param \AddressBookBundle\Entity\Rank $ranks
     * @return User
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
