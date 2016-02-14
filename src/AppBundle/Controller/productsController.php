<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductsController extends Controller
{
    /**
     * @Route("/", name="products-list")
     */
    public function productListAction()
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:product-list.html.twig');
    }

    /**
     * @Route("/product", name="product-sheet")
     */
    public function productSheetAction()
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:product-sheet.html.twig');
    }
}
