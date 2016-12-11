<?php

namespace AppBundle\Controller;


use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class MainController extends BaseController
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction()
    {
        return $this->render('@App/main/index.html.twig', [


        ]);
        if ($this->getSchema() == null)
        {
            return $this->redirectToRoute('login');
        }

    }
}
