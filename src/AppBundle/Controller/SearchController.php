<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Search;
use AppBundle\Entity\Resource;

use AppBundle\Tests\Result;

use AppBundle\Entity\Count;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\SearchForm as SearchForm;

class SearchController extends Controller
{

    /**
     * @Route("/", name="searches_list")
     */
    public function listAction(Request $request)
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $userName = $user->getName();

        // администратор видит все поиски
        if($userName != 'admin'){
            $searches = $this->getDoctrine()->getRepository('AppBundle:Search')->findByUser($userId);
            // вывод необходимого view
            return $this->render('searches/searches.html.twig', array(
                'searches' => $searches
            ));
        }
        else{
            // обычный пользователь - только свои
            $searches = $this->getDoctrine()->getRepository('AppBundle:Search')->findAll();
            // вывод необходимого view
            return $this->render('searches/searches.html.twig', array(
                'searches' => $searches
            ));
        }
    }

    /**
     * @Route("/users/searches", name="user_searches")
     */
    public function searchAction(Request $request)
    {

        $form = $this->createForm(SearchForm::class);
        $form->handleRequest($request);

            // добавляет новый поиск
            if($form->isSubmitted() && $form->isValid()){

                $user = $this->getUser();

                $em = $this->getDoctrine()->getManager();

                $search = $form->getData();

                // добавляет user_id
                $search->setUser($user);

                // фиксирует время создания поиска
                $search->setCreatedAt(time());

                // отправка нового поиска в БД
                $em->persist($search);
                $em->flush();

                // вывод блока с оповещением
                $this->addFlash(
                    'notice',
                    'Search '.$form->getData()->getName().' added'
                );

               return $this->redirectToRoute('searches_list');
            }

        // вывод необходимого view
        return $this->render('users/search.html.twig', array(
            'form' => $form->createView()
        ));
    }



    /**
     * @Route("/searches/edit/{search}", name="search_edit")
     */
    public function editAction(Request $request, Search $search)
    {

        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(SearchForm::class, $search);
        $form->handleRequest($request);

        // вывод сообщения об ошибке при попытке редактировать не существующий поиск
        if (empty($search)) {
            $this->addFlash('error', 'Search not found');
            // вывод необходимого view
            return $this->redirectToRoute('searches_list');
        }


        if($form->isSubmitted() && $form->isValid()){

            // фиксирует время бновления поиска
            $search->setUpdatedAt(time());

            // отправка редактированного поиска в БД
            $em->flush();

            // вывод блока с оповещением
            $this->addFlash(
                'notice',
                $search->getName().' updated'
            );
            // вывод необходимого view
            return $this->redirectToRoute('searches_list');
        }
        // вывод необходимого view
        return $this->render('searches/edit.html.twig', array(
            'search' => $search,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/searches/duplicate", name="search_duplicateSettings")
     */
    public function duplicateSettings(Request $request){

        // получение данных из скрытого поля
        $id = $request->get('hidden');

        // исключает ошибку при отправке формы ($id - undefined)
        if(!empty($id)){
            $search = $this->getDoctrine()->getRepository('AppBundle:Search')->find($id);
            $form = $this->createForm(SearchForm::class, $search);
            $form->handleRequest($request);
        }

        else{
            $form = $this->createForm(SearchForm::class);
            $form->handleRequest($request);
        }

        if($form->isSubmitted() && $form->isValid()){

            $user=$this->getUser();

            $em = $this->getDoctrine()->getManager();

            $search = $form->getData();

            // для заполнения поля user_id
            $search->setUser($user);

            // фиксация времени создания нового поиска
            $search->setCreatedAt(time());

            // отправка данных с новым поиском в БД
            $em->persist($search);
            $em->flush();

            // вывод блока с оповещением
            $this->addFlash(
                'notice',
                'Search '.$form->getData()->getName().' added'
            );

            // вывод необходимого view
            return $this->redirectToRoute('searches_list');
        }

        // вывод необходимого view
        return $this->render('searches/duplicate.html.twig', array(
            'form' => $form->createView()
        ));

    }


    /**
     * @Route("/searches/details/{id}", name="search_details")
     */
    public function detailsAction($id)
    {
        // для вывода детальной информации о поиске
        $search = $this->getDoctrine()->getRepository('AppBundle:Search')->find($id);
        // вывод необходимого view
        return $this->render('searches/details.html.twig', array(
            'search' => $search
        ));
    }

    /**
     * @Route("/searches/delete/{id}", name="search_delete")
     */
    public function deleteAction($id)
    {
        $search = $this->getDoctrine()
            ->getRepository('AppBundle:Search')
            ->find($id);

        // вывод сообщения об ошибке при попытке удалить не существующий поиск
        if (empty($search)) {
            $this->addFlash('error', 'Search not found');

            return $this->redirectToRoute('searches_list');
        }

        $em = $this->getDoctrine()->getManager();

        $em->remove($search);
        $em->flush();

        // удаляем всю статистику данного поля
        $counts = $this->getDoctrine()->getRepository('AppBundle:Count')->findBySearchId($id);
        foreach ($counts as $count) {
            $em->remove($count);
            $em->flush();
        }

        // вывод блока с оповещением
        $this->addFlash('notice', 'Search '.$search->getName().' removed');

        // вывод необходимого view
        return $this->redirectToRoute('searches_list');
    }

    /**
     * @Route("/searches/start/{id}", name="search_start")
     */
    public function startAction($id)
    {
        $search = $this->getDoctrine()->getRepository('AppBundle:Search')->find($id);

        // редактирование поля action в данном поиске
        $em = $this->getDoctrine()->getManager();
        $em->persist($search->setAction('start'));
        $em->flush();

        // вывод блока с оповещением
        $this->addFlash(
            'notice',
            'Search '.$search->getName().' started'
        );
        // вывод необходимого view
        return $this->redirectToRoute('searches_list');
    }

    /**
     * @Route("/searches/stop/{id}", name="search_stop")
     */
    public function stopAction($id)
    {
        $search = $this->getDoctrine()->getRepository('AppBundle:Search')->find($id);

        // редактирование поля action в данном поиске
        $em = $this->getDoctrine()->getManager();
        $em->persist($search->setAction('stop'));
        $em->flush();

        // вывод блока с оповещением
        $this->addFlash(
            'notice',
            'Search '.$search->getName().' stopped'
        );
        // вывод необходимого view
        return $this->redirectToRoute('searches_list');
    }


    /**
     * @Route("/searches/newResult/{id}", name="search_newResult")
     */
    public function newResultAction($id)
    {
        $search = $this->getDoctrine()->getRepository('AppBundle:Search')->find($id);

        $resources = $this->getDoctrine()->getRepository('AppBundle:Resource')->findAll();

        // получение результата по данному поиску из таблицы Resource в БД
        $results = new Result($search, $resources);

        // вывод необходимого view
        return $this->render('searches/result.html.twig', array(
            'results' => $results->getData(),
            'id' => $id
        ));
    }

    /**
     * @Route("/searches/statistics/{id}", name="search_statistics")
     */
    public function statisticsAction($id)
    {
        // получение поиска по которому надо вывести статистику
        $search = $this->getDoctrine()->getRepository('AppBundle:Search')->find($id);

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        // получение и подсчёт данных об отправленных email из таблицы Count за последние сутки
        $statement = $connection->prepare(
            "select COUNT(id) as 'emails', SUM(results) as 'results' from count
            where date > date_sub(now(),INTERVAL 1 DAY) AND search_id = :id"
        );
        $statement->bindValue('id', $id);
        $statement->execute();
        $resultsToDay = $statement->fetchAll();

        // получение и подсчёт данных об отправленных email из таблицы Count за последнюю неделю
        $statement = $connection->prepare(
            "select COUNT(id) as 'emails', SUM(results) as 'results' from count
            where date > date_sub(now(),INTERVAL 1 WEEK) AND search_id = :id"
        );
        $statement->bindValue('id', $id);
        $statement->execute();
        $resultsToWeek = $statement->fetchAll();

        // получение и подсчёт данных об отправленных email из таблицы Count за всё время
        $statement = $connection->prepare(
            "select COUNT(id) as 'emails', SUM(results) as 'results' from count
            where search_id = :id"
        );
        $statement->bindValue('id', $id);
        $statement->execute();
        $resultsAll = $statement->fetchAll();

        // получение текущего времени
        $nowtime = time();

        // получение данных создания поиска
        $createdTime = $search->getCreatedAt();

        // получение данных редактирования поиска
        $updatedTime = $search->getUpdatedAt();

        // получение количества времени прошедшего с момента создания поиска
        if($createdTime)
            $countDayFromCreatedAt = $this->time_elapsed($nowtime-$createdTime);
        else $countDayFromCreatedAt='';

        // получение количества времени прошедшего с момента последнего редактирования поиска
        if($updatedTime)
            $countDayFromUpdatedAt = $this->time_elapsed($nowtime-$updatedTime);
        else $countDayFromUpdatedAt = '';

        // вывод необходимого view
        return $this->render('searches/statistics.html.twig', array(
            'search' => $search,
            'countDay' => $countDayFromCreatedAt,
            'countDayFromUpdate' => $countDayFromUpdatedAt,
            'resultsAll' => $resultsAll,
            'resultsToWeek' => $resultsToWeek,
            'resultsToDay' => $resultsToDay
        ));
    }

    // метод, который переводит полученные данные о времени в секунды, минуты, часы, дни, недели, годы
    public function time_elapsed($secs){
        $bit = array(
            'y' => $secs / 31556926 % 12,
            'w' => $secs / 604800 % 52,
            'd' => $secs / 86400 % 7,
            'h' => $secs / 3600 % 24,
            'm' => $secs / 60 % 60,
            's' => $secs % 60
        );

        foreach($bit as $k => $v)
            if($v > 0)$ret[] = $v . $k;

        if(!empty($ret))
            return join(' ', $ret);
    }
}