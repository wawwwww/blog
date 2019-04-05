<?php
namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class < FrontArticleController extends AbstractController
{
    /**
     * Liste les derniers articles
     * @Route("/")
     * @return Response
     */
    public function list(): Response
    {
        // Récupération du Repository
        $repository = $this->getDoctrine()
            ->getRepository(Article::class);

        // Récupération de tous les articles
        $articles = $repository->findAll();

        // Renvoi des articles à la vue
        return $this->render('index.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/article/{slug}")
     * @return Response
     */
    public function show(): Response
    {
        return $this->render('article/show.html.twig');
    }
}