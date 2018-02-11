<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * List of news articles.
     *
     * @return Response
     */
    public function listAction(): Response
    {
        /** @var ArticleRepository $articleRepository */
        $articleRepository = $this->getDoctrine()->getRepository(Article::class);

        return $this->render(
            'list.html.twig',
            [
                'articles' => $articleRepository->findAllPublished(),
            ]
        );
    }
}