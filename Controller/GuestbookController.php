<?php

namespace Problematic\GuestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Problematic\GuestbookBundle\Entity\Address;
use Problematic\GuestbookBundle\Form\AddressType;

class GuestbookController extends Controller
{
    
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->getRequest();
        
        $address = new Address();
        $form = $this->createForm(new AddressType(), $address);
        
        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);
            
            if ($form->isValid()) {
                $em->persist($address);
                $em->flush();
                
                $this->sendEmailNotification($address);
                
                return $this->redirect($this->generateUrl('Problematic_Guestbook_thanks'));
            }
        }
        
        return $this->render('ProblematicGuestbookBundle:Guestbook:index.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
    
    public function thanksAction()
    {
        
        return $this->render('ProblematicGuestbookBundle:Guestbook:thanks.html.twig', array(
            
        ));
        
    }
    
    protected function sendEmailNotification(Address $address)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject($address->getName() . ' signed the guestbook')
            ->setFrom('guestbook@localhost')
            ->setTo($this->container->getParameter('problematic_messenger.email'))
            ->setBody($this->renderView('ProblematicGuestbookBundle:Guestbook:email.txt.twig', array(
                'address' => $address,
            )));
        $this->get('mailer')->send($message);
    }
    
}
