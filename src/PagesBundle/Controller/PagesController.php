<?php

namespace PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends Controller
{
    /**
     * @Route("/{id}", name="page")
     */
    public function indexAction($id)
    {
        return $this->render('PagesBundle:pages.html.twig');
    }
}
