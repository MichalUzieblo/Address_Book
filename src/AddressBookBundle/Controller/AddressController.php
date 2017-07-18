<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Address;

/**
 * @Route("/{person_id}/address")
 */
class AddressController extends Controller
{
    private function getForm ($person_id, $address, $actionUrl=false) {
        if ($actionUrl==FALSE) {
            $actionUrl = $this->generateUrl('addressbook_address_create',
                    ['person_id' => $person_id]);
        }
        $form = $this->createFormBuilder($address)
                ->setMethod('post')
                ->setAction($actionUrl)
                ->add('streetName')
                ->add('nrOfHouse')
                ->add('nrOfFlat')
                ->add('zipCode')
                ->add('city')
                ->add('type')
                ->add('submit', 'submit', ['label'=>'Add'])
                ->getForm();
        return $form;
    } 

    /**
     * @Route("/new")
     */
    public function newAction($person_id)
    {
        $address = new Address();
        $form = $this->getForm($person_id, $address);
        return $this->render('AddressBookBundle:Address:new.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
        /**
     * @Route("/create")
     * @Method("POST")
     */
    public function createAction(Request $req, $person_id)
    {
        $address = new Address();
        $form = $this->getForm($person_id, $address);
        $form->handleRequest($req);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $person = $em->getRepository('AddressBookBundle:Person')->find($person_id);
            
            $person->addAddress($address);
            $address->setPerson($person);
            
            $em ->persist($address);
            
            $em ->flush();
            
            return $this->redirect(
            $this->generateUrl(
                    'addressbook_person_show',
                    [
                        'id'=>$person_id
                    ]
                )
            );
        }
        return $this->render('AddressBookBundle:Address:new.html.twig', array(
            'form' => $form
        ));
    }

    /**
     * @Route("/{address_id}/delete")
     */
    public function deleteAction($person_id, $address_id)
    {
        $em = $this->getDoctrine()->getManager();
        $email = $em->getRepository('AddressBookBundle:Address')->find($address_id);
        $em ->remove($address);
        $em ->flush();
        
        return $this->redirect(
            $this->generateUrl(
                    'addressbook_person_show',
                    [
                        'id'=>$person_id
                    ]
                )
            );
    }
}
