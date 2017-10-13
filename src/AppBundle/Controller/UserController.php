<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Form\UserForm as UserForm;

class UserController extends Controller
{
    /**
     * @Route("/users", name="user_list")
     */
    public function listAction(Request $request)
    {
        $user = $this->getUser();
        $userName = $user->getName();

        // список всех useroв будет доступен только для админа, в противном случае - перенаправление на список поисков
        if($userName == 'admin') {
            $users = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
            return $this->render('users/index.html.twig', array(
                'users' => $users
            ));
        } else return $this->redirectToRoute('searches_list');
    }



    /**
     * @Route("/users/create", name="user_create")
     */
    public function createAction(Request $request)
    {

        $userThis = $this->getUser();
        $userName = $userThis->getName();

        // добавлять useroв может только администратор
        if($userName == 'admin') {

            $form = $this->createForm(UserForm::class);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $user = $form->getData();

                // хеширует пароль нового usera
                $encoder = $this->container->get('security.password_encoder');
                $password = $encoder->encodePassword($user, $form->getData()->getPassword());
                $user->setPassword($password);

                // добавление нового usera в БД
                $em->persist($user);
                $em->flush();

                // выводит блок оповещения о выполненной операции
                $this->addFlash(
                    'notice',
                    'User '.$form->getData()->getName().' added'
                );

                return $this->redirectToRoute('user_list');
            }

            return $this->render('users/create.html.twig', array(
                'form' => $form->createView()
            ));

        } else return $this->redirectToRoute('searches_list');
    }


    /**
     * @Route("/users/edit/{user}", name="user_edit")
     */
    public function editAction(Request $request, User $user)
    {

        $userThis = $this->getUser();
        $userName = $userThis->getName();

        // редактировать useroв может только администратор
        if($userName == 'admin') {

            // вывод ошибки при попытке редактировать не существующего usera
            if (empty($user)) {
                $this->addFlash('error', 'User not found');

                return $this->redirectToRoute('user_list');
            }

            $pass = $user->getPassword();


            $em = $this->getDoctrine()->getManager();
            $form = $this->createForm(UserForm::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                // при изменении пароля, перед отправкой его в БД - его хеширование
                if($pass != $form->getData()->getPassword()){
                    $encoder = $this->container->get('security.password_encoder');
                    $password = $encoder->encodePassword($user, $form->getData()->getPassword());
                    $user->setPassword($password);

                } else $user->setPassword($form->getData()->getPassword());

                // добавление редактированного usera в БД
                $em->flush();

                // выводит блок оповещения о выполненной операции
                $this->addFlash(
                    'notice',
                    $user->getName().' updated'
                );

                return $this->redirectToRoute('user_list');
            }

            return $this->render('users/edit.html.twig', array(
                'form' => $form->createView()
            ));

        } else return $this->redirectToRoute('searches_list');
    }

    /**
     * @Route("/users/details/{id}", name="user_details")
     */
    public function detailsAction($id)
    {
        $userThis = $this->getUser();
        $userName = $userThis->getName();

        // просматривать подробную информацию о usere может только администратор
        if($userName == 'admin') {

            $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);

            return $this->render('users/details.html.twig', array(
                'user' => $user
            ));
        } else return $this->redirectToRoute('searches_list');
    }


    /**
     * @Route("/users/delete/{id}", name="user_delete")
     */
    public function deleteAction($id)
    {
        $userThis = $this->getUser();
        $userName = $userThis->getName();

        // удалять usera может только администратор
        if($userName == 'admin') {

            $user = $this->getDoctrine()
                ->getRepository('AppBundle:User')
                ->find($id);

            // вывод ошибки при попытке удалить не существующего usera
            if (empty($user)) {
                $this->addFlash('error', 'User not found');

                return $this->redirectToRoute('user_list');
            }

            $em = $this->getDoctrine()->getManager();

            $em->remove($user);
            $em->flush();

            $this->addFlash('notice', 'User Removed');

            return $this->redirectToRoute('user_list');

        } else return $this->redirectToRoute('searches_list');
    }

}