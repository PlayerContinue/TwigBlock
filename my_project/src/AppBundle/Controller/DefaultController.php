<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }


  /**
     * @Route("/main", name="mainpage")
     */
    public function mainAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('DavidTwig/replace.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
	
  /**
     * @Route("/real", name="realpage")
     */
    public function startAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('DavidTwig/start.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
	

}
