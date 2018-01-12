<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Symfony\Component\Cache\Adapter\MemcachedAdapter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Article controller.
 *
 */

class ArticleController extends Controller
{

    public function autofillAction(Request $request){
        if ($count = $request->request->get('count')){
            $i = 0;

            while($i < $count){

                $article = new Article();
                $article->setTitle(self::generateRandomString(rand(3, 10)));
                $article->setText(self::generateRandomString(rand(10, 50)));
                $article->setSlug($this->validateSlug(self::generateRandomString(rand(3, 15))));
                $article->setCreatedAt(new \DateTime());
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();

                $i++;
            }

            return $this->redirectToRoute('article_index');
        }
    }

    private static function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Lists all article entities.
     *
     */
    public function indexAction( )
    {
        $em = $this->getDoctrine()->getManager();

        /**@var $cacheArticles MemcachedAdapter*/
        $conn = MemcachedAdapter::createConnection('memcached://localhost:11211');

        if (!$conn->get('articles')) {
            $articles = $em->getRepository('AppBundle:Article')->findBy([],[
                'createdAt' => 'DESC'
            ]);

            $conn->set('articles', $articles, 60);

        } else {
            $articles = $conn->get('articles');
        }

        if(!$conn->get('articles_template')){
            $articles_template = $this->render('article/index.html.twig', array(
                'articles' => $articles,
            ));
            $conn->set('articles_template', $articles_template, 3600);
        } else {
            $conn->delete('articles');
            $articles_template = $conn->get('articles_template');
        }

        return $articles_template;
    }

    /**
     * Creates a new article entity.
     *
     */
    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm('AppBundle\Form\ArticleType', $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $slug = $form->get('slug')->getData();
            $article->setSlug($this->validateSlug($slug));
            $article->setCreatedAt(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_show', array('id' => $article->getId()));
        }

        return $this->render('article/new.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
        ));
    }

    public function validateSlug( $slug )
    {
        $newSlug = trim( preg_replace( '/ {1,}/', '-', $slug ) );

        return $newSlug;
    }

    /**
     * Finds and displays a article entity.
     *
     */
    public function showAction(Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);

        return $this->render('article/show.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('AppBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $slug = $editForm->get('slug')->getData();
            $article->setSlug($this->validateSlug($slug));
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_edit', array('id' => $article->getId()));
        }

        return $this->render('article/edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a article entity.
     *
     */
    public function deleteAction(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('admin_index');
    }

    /**
     * Creates a form to delete a article entity.
     *
     * @param Article $article The article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
