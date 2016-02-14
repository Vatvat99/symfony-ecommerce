<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ShoppingCartController extends Controller
{
    /**
     * @Route("/cart", name="shopping-cart")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:shopping-cart.html.twig');
    }

    /**
     * @Route("/delivery", name="delivery")
     */
    public function deliveryAction()
    {
        return $this->render('AppBundle:delivery.html.twig');
    }

    /**
     * @Route("/validation", name="validation")
     */
    public function validationAction()
    {
        return $this->render('AppBundle:validation.html.twig');
    }
}
