<?php

namespace AddressBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use AddressBookBundle\Entity\Email;

/**
 * @Route("/{person_id}/email")
 */
class EmailController extends Controller
{
    private function getForm ($person_id, $email, $actionUrl=false) {
        if ($actionUrl==FALSE) {
            $actionUrl = $this->generateUrl('addressbook_email_create',
                    ['person_id' => $person_id]);
        }
        $form = $this->createFormBuilder($email)
                ->setMethod('post')
                ->setAction($actionUrl)
                ->add('email')
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
        $email = new Email();
        $form = $this->getForm($person_id, $email);
        return $this->render('AddressBookBundle:Email:new.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
        /**
     * @Route("/create")
     * @Method("POST")
     */
    public function createAction(Request $req, $person_id)
    {
        $email = new Email();
        $form = $this->getForm($person_id, $email);
        $form->handleRequest($req);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $person = $em->getRepository('AddressBookBundle:Person')->find($person_id);
            
            $person->addEmail($email);
            $email->setPerson($person);
            
            $em ->persist($email);
            
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
        return $this->render('AddressBookBundle:Email:new.html.twig', array(
            'form' => $form
        ));
    }

    /**
     * @Route("/{email_id}/delete")
     */
    public function deleteAction($person_id, $email_id)
    {
        $em = $this->getDoctrine()->getManager();
        $email = $em->getRepository('AddressBookBundle:Email')->find($email_id);
        $em ->remove($email);
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
    
    

//    /**
//     * Displays a form to edit an existing email entity.
//     *
//     * @Route("/{id}/edit", name="email_edit")
//     * @Method({"GET", "POST"})
//     */
//    public function editAction(Request $request, Email $email)
//    {
//        $deleteForm = $this->createDeleteForm($email);
//        $editForm = $this->createForm('AddressBookBundle\Form\EmailType', $email);
//        $editForm->handleRequest($request);
//
//        if ($editForm->isSubmitted() && $editForm->isValid()) {
//            $this->getDoctrine()->getManager()->flush();
//
//            return $this->redirectToRoute('email_edit', array('id' => $email->getId()));
//        }
//
//        return $this->render('email/edit.html.twig', array(
//            'email' => $email,
//            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }



}
