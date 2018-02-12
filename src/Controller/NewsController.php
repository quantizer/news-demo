<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class NewsController
 *
 * @package App\Controller
 */
class NewsController extends Controller
{
    /**
     * List of news articles.
     *
     * @return Response
     */
    public function list(): Response
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

    /**
     * Show article page.
     *
     * @param Article $article
     *
     * @return Response
     */
    public function item(Article $article)
    {
        return $this->render(
            'item.html.twig',
            [
                'article' => $article,
            ]
        );
    }
}
