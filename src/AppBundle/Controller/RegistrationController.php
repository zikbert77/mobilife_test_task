<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends Controller
{

    public function registerAction( Request $request, UserPasswordEncoderInterface $passwordEncoder ) {

        $user = new User();
        $form = $this->createForm( UserType::class, $user );

        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid() ){
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            #$user->setRoles(['ROLE_ADMIN']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirect('/');
        }

        return $this->render('registration/register.html.twig', [
            'form' => $form->createView()
        ]);

    }

}
