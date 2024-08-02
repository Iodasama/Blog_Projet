<?php

declare(strict_types=1); // pour etre sur de l'affichage permet de reperer les erreurs par ex du string alors qu on attend un integer, comme c est permissif cela permet d etre sur que tout est bien typé, que la valeur de retour est bien celle qu on attend
namespace App\Controller\Admin;


use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminArticlesController extends AbstractController
{

    #[Route('/Admin/articles-list-db', name: 'admin_articles_list_db')]
    //Je cree la route, je lui passe le nom de admin_articles_list_db
    public function adminListArticlesFromDb(ArticleRepository $articleRepository): Response //Response pour le typage
    {
        $articles = $articleRepository->findAll(); //dans ma table Article je fais ma demande Select/ArticleRepo methode findAll, Doctrine bosse avec l'Entité->pour la requete SQl $articles = $articleRepository->findAll() je crée une instance de l'Entité (Article ici) cad un enregistrement, je lui mets les valeurs que je veux (propriétés title, color?)je lui passe et Doctrine fait le reste du travail.
        // La classe repository est un design pattern
        //Les requetes Select sont mises dans Repository
        //Je type la classe ArticleRepository et je crée une instance $articleRepository des lors je peux utliser ses methodes
        //Je place en parametres ArticleRepository et $articleRepository
        return $this->render('Admin/page/articles-list.html.twig', ['articles' => $articles]);
        //je retourne une réponse fichier twig code 200, une page qui contient mes articles
        //la variable articles contient la variable $articles
    }

    #[Route('/Admin/delete/{id}', name: 'delete_article')]
    public function deleteArticle(int $id, articleRepository $articleRepository, EntityManagerInterface $entityManager): Response
    {
        $article = $articleRepository->find($id);

        $entityManager->remove($article); //preparation : preparer la requete Sql de suppression
        $entityManager->flush(); // execute : executer la requete préparée


        return $this->redirectToRoute('Admin/page/articles_list_db'); // je redirige vers ma page list pokemon Bdd et je check si le pokemon a été supprimé

    }

//    #[Route('/admin/show-articles/{id}', name: 'admin_article_db_by_id')]
//    public function adminShowArticleById(int $id, ArticleRepository $articleRepository): Response
//    {
//        $article = $articleRepository->find($id);
//
//        if (!$article || !$article->isPublished()) {
//            $html404 = $this->renderView('Admin/page/404.html.twig');
//            return new Response($html404, 404);
//        }
//
//        return $this->render('Admin/page/show-articleById.html.twig', ['article' => $article]);
//    }
//    #[Route('/categories-list-db', name: 'categories_list_db')]
//
//    public function listCategoriesFromDb(CategoryRepository $categoryRepository): Response
//    {
//        $categories = $categoryRepository->findAll();
//
//        return $this->render('Guest/page/categories-list.html.twig', ['categories' => $categories]);
//    }
//
//    #[Route('/show-categories/{id}', name: 'category_db_by_id')]
//    public function showCategoryById(int $id, CategoryRepository $categoryRepository): Response
//    {
//        $category = $categoryRepository->find($id);
//
//        return $this->render('Guest/page/show-categoriesById.html.twig', ['category' => $category]);
//    }


}
