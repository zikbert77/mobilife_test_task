<?php

namespace AppBundle\Controller;

use AppBundle\Datatables\ArticleDatatable;
use AppBundle\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TestController extends Controller
{

    public function ajaxAction(Request $request)
    {

        $search = $request->query->get('search');
        $start = $request->query->get('start');
        $length = $request->get('length');
        $order = $request->get('order');
        $columns = $request->get('columns');

        $articles = [];

        $value = '%'. $search['value'] . '%';
        /** @var EntityManagerInterface $em */
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Article', 'p')
            ->where('p.title LIKE :search OR p.text LIKE :search OR p.slug LIKE :search')
            ->setParameter('search', $value ?? '')
            ->addOrderBy("p.".$columns[$order[0]['column']]['data'], $order[0]['dir'])
            ->setFirstResult($start)
            ->setMaxResults($length)
            ->getQuery();
        $data = $query->getArrayResult();


        if ( !$search['value'] ){
            $query2 = $em->createQueryBuilder()
                ->select('count(p)')
                ->from('AppBundle:Article', 'p')
                ->getQuery();
            $res = $query2->getArrayResult();
            $count = $res[0][1];
        } else {
            $count = count($data);
        }

        $articles['recordsTotal'] = $count;
        $articles['recordsFiltered'] = $count;
        $articles['data'] = $query->getArrayResult();

        return new JsonResponse($articles);
    }

    public function indexAction (Request $request)
    {
        $isAjax = $request->isXmlHttpRequest();

        // Get your Datatable ...
        //$datatable = $this->get('app.datatable.post');
        //$datatable->buildDatatable();

        // or use the DatatableFactory
        /** @var DatatableInterface $datatable */
        $datatable = $this->get('sg_datatables.factory')->create(ArticleDatatable::class);
        $datatable->buildDatatable();

        if ($isAjax) {
            $responseService = $this->get('sg_datatables.response');
            $responseService->setDatatable($datatable);
            $responseService->getDatatableQueryBuilder();

            return $responseService->getResponse();
        }

        return $this->render('test/datatable/index.html.twig', array(
            'datatable' => $datatable,
        ));
     }

    public function showAction(Article $post)
    {
        return $this->render('post/show.html.twig', array(
            'post' => $post
        ));
    }
//public function indexAction ()
//    {
//        $em = $this->getDoctrine();
//        $blogRepository = $em->getRepository("AppBundle:Article");
//        $categoriesRepository = $em->getRepository("AppBundle:Categories");
//        $categories = $categoriesRepository->findBy( [
//            'parent' => 0
//        ]);
//        $articles = $blogRepository->findAll();
//        $pages = ceil(count($articles) / 5);
//        return $this->render("test/index.html.twig", [
//            'categories' => $categories,
//            'pages' => $pages
//        ]);
//    }

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