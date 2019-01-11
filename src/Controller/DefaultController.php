<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Psr\Log\LoggerInterface;

class DefaultController extends AbstractController 
{
  
    public function index() 
    {
     
        $newvar = "100";
        return $this->render('base.html.twig');       
             
    }

    public function docs(LoggerInterface $logger) 
    {
        $logger->info('Logging Tests');
        return $this->render('docs.html.twig');       
    }

}
