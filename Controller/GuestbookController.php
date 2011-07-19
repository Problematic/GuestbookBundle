<?php

namespace Problematic\GuestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GuestbookController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ProblematicGuestbookBundle:Guestbook:index.html.twig', array(
            
        ));
    }
    
}
