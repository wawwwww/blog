<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class CreaModifSupp extends AbstractController
{
    /**
     * @Route ("/articles/")
     * @return Response
     */
    public function fonction1(): Response
    {
        return $this->render('article/index1.html.twig');
    }


    /**
     * @Route ("/articles/creation")
     * @return Response
     */
    public function fonction2(): Response
    {
        $this->addFlash('success', 'Votre article a été ajouté');

        return $this->render('article/index2.html.twig');
    }


    /**
     * @Route ("/articles/modification")
     * @return Response
     */
    public function fonction3(): Response
    {
        $this->addFlash('success', 'Votre article a été modifié');

        return $this->render('article/index3.html.twig');
    }


    /**
     * @Route ("/articles/suppression")
     * @return Response
     */
    public function fonction4(): Response
    {
        $this->addFlash('danger', 'Votre article a été supprimé');

        return $this->render('article/index4.html.twig');
    }
}