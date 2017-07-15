<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Phone;

/**
 * @Route("/{person_id}/phone")
 */
class PhoneController extends Controller
{
    private function getForm ($person_id, $phone, $actionUrl=false) {
        if ($actionUrl==FALSE) {
            $actionUrl = $this->generateUrl('addressbook_phone_create',
                    ['person_id' => $person_id]);
        }
        $form = $this->createFormBuilder($phone)
                ->setMethod('post')
                ->setAction($actionUrl)
                ->add('number')
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
        $phone = new Phone();
        $form = $this->getForm($person_id, $phone);
        return $this->render('AddressBookBundle:Phone:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/create")
     * @Method("POST")
     */
    public function createAction(Request $req, $person_id)
    {
        $p = new Phone();
        $form = $this->getForm($person_id, $p);
        $form->handleRequest($req);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $person = $em->getRepository('AddressBookBundle:Person')->find($person_id);
            
            $person->addPhone($p);
            $p->setPerson($person);
            
            $em ->persist($p);
            
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
        return $this->render('AddressBookBundle:Phone:new.html.twig', array(
            'form' => $form
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction($person_id)
    {
        return $this->render('AddressBookBundle:Phone:delete.html.twig', array(
            // ...
        ));
    }

}
