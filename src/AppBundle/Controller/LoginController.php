<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
        // для вывода ошибок аутентификации
        $errors = $authenticationUtils->getLastAuthenticationError();

        // в данном случае для вывода последнего email набранного userom в случае ошибкт аутентификации
        $lastUserName = $authenticationUtils->getLastUsername();

        return $this->render('Login/login.html.twig', array(
            'errors' => $errors,
            'name' => $lastUserName
        ));
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {

    }

}
