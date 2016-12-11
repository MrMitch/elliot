<?php

namespace AppBundle\Controller;


use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends BaseController
{
    /**
     * @Route("/login", name="login")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('connectionString', TextType::class, [
                'label' => 'Connection string',
                'required' => true
            ])
            ->add('user', TextType::class, [
                'label' => 'User',
                'required' => false
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Password',
                'required' => false
            ])->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {

        }

        return $this->render('@App/login/login.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
