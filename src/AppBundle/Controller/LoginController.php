<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends Controller
{
    public function loginAction( AuthenticationUtils $authenticationUtils )
    {
        $errors = $authenticationUtils->getLastAuthenticationError();
        $lastusername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'errors' => $errors,
            'username' => $lastusername
        ]);

    }

    public function logout()
    {
        return;
    }
}
