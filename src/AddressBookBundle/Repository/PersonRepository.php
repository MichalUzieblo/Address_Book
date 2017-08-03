<?php

namespace AddressBookBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PersonRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PersonRepository extends EntityRepository
{
    public function findByUserAlphabetic($user_id){
        $persons = $this->getEntityManager()->createQuery(
            'SELECT p FROM AddressBookBundle:Person p WHERE p.user = :user_id ORDER BY p.name ASC'
        )
        ->setParameter("user_id", $user_id)
        ->getResult();
        return $persons;
    }
    
    public function findBySearchSentence($search, $user_id) {
        $persons = $this->getEntityManager()->createQuery(
        'SELECT p FROM AddressBookBundle:Person p WHERE (p.name LIKE :sentence OR p.surname LIKE :sentence) AND p.user = :user_id')
        ->setParameter("sentence", '%' . $search . '%')
        ->setParameter("user_id", $user_id)
        ->getResult();
        return $persons;
    }
}
