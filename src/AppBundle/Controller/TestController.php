<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TestController extends Controller
{

    public function ajaxAction(Request $request)
    {

        $start = $request->query->get('start');
        $length = $request->get('length');
        $order = $request->get('order');
        $columns = $request->get('columns');

        $articles = [];

        /** @var EntityManagerInterface $em */
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Article', 'p')
            ->addOrderBy("p.".$columns[$order[0]['column']]['data'], $order[0]['dir'])
            ->setFirstResult($start)
            ->setMaxResults($length)
            ->getQuery();


        $query2 = $em->createQueryBuilder()
            ->select('count(p)')
            ->from('AppBundle:Article', 'p')
            ->getQuery();
        $count = $query2->getArrayResult();

        $articles['recordsTotal'] = $count[0][1];
        $articles['recordsFiltered'] = $count[0][1];
        $articles['data'] = $query->getArrayResult();

        return new JsonResponse($articles);
    }

    public function indexAction ()
    {
        $em = $this->getDoctrine();
        $blogRepository = $em->getRepository("AppBundle:Article");
        $categoriesRepository = $em->getRepository("AppBundle:Categories");
        $categories = $categoriesRepository->findBy( [
            'parent' => 0
        ]);
        $articles = $blogRepository->findAll();
        $pages = ceil(count($articles) / 5);
        return $this->render("test/index.html.twig", [
            'categories' => $categories,
            'pages' => $pages
        ]);
    }

    public function viewAction( $slug )
    {
       $em = $this->getDoctrine();
       $articleRepository = $em->getRepository("AppBundle:Article");
       $article = $articleRepository->findBy([
           'slug' => $slug
       ]);


       return $this->render("test/view.html.twig", [
          'article' => $article
       ]);
    }

}