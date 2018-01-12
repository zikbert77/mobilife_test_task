<?php

namespace AppBundle\Controller;

use AppBundle\Datatables\ArticleDatatable;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TestController extends Controller
{
    public function indexAction (Request $request)
    {
        $isAjax = $request->isXmlHttpRequest();

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