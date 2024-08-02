<?php

declare(strict_types=1); // pour etre sur de l'affichage permet de reperer les erreurs par ex du string alors qu on attend un integer, comme c est permissif cela permet d etre sur que tout est bien typé, que la valeur de retour est bien celle qu on attend
namespace App\Controller\Guest;


<<<<<<< HEAD
use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
=======
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
>>>>>>> 9dea6b5 (commit_Admin_Guest)
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticlesController extends AbstractController
{

    #[Route('/articles-list-db', name: 'articles_list_db')]
<<<<<<< HEAD
=======

>>>>>>> 9dea6b5 (commit_Admin_Guest)
    public function listArticlesFromDb(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render('Guest/page/articles-list.html.twig', ['articles' => $articles]);
    }

    #[Route('/show-articles/{id}', name: 'article_db_by_id')]
    public function showArticleById(int $id, ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find($id);

<<<<<<< HEAD
        if (!$article || !$article->getIsPublished()) {
=======
        if (!$article || !$article->isPublished()) {
>>>>>>> 9dea6b5 (commit_Admin_Guest)
            $html404 = $this->renderView('guest/page/404.html.twig');
            return new Response($html404, 404);
        }

        return $this->render('Guest/page/show-articleById.html.twig', ['article' => $article]);
    }
<<<<<<< HEAD

    #[Route('/categories-list-db', name: 'categories_list_db')]
=======
    #[Route('/categories-list-db', name: 'categories_list_db')]

>>>>>>> 9dea6b5 (commit_Admin_Guest)
    public function listCategoriesFromDb(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('Guest/page/categories-list.html.twig', ['categories' => $categories]);
    }

    #[Route('/show-categories/{id}', name: 'category_db_by_id')]
    public function showCategoryById(int $id, CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->find($id);

        return $this->render('Guest/page/show-categoriesById.html.twig', ['category' => $category]);
    }

<<<<<<< HEAD
}

=======

}
>>>>>>> 9dea6b5 (commit_Admin_Guest)
