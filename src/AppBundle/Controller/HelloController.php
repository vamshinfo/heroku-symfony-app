<?php

namespace AppBundle\Controller;  
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;  

class HelloController { 
   /** 
      * @Route("/hello") 
   */ 
   public function helloAction() { 
      return new Response('Welcome to Hello world!'); 
   } 
}