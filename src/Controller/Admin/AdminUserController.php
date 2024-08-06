<?php

namespace App\Controller\Admin;



use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdminUserController extends AbstractController
{
    #[Route('/admin/users/insert', 'admin_insert_user')] // je crée ma route
    public function insertAdminUser(UserPasswordHasherInterface $passwordHasher, Request $request, EntityManagerInterface $entityManager)
    {

        if ($request->getMethod() === "POST") {   // avec la methode Post la demande de création du user a été envoyée les données sont enregistrées.  // je type ma variable $request elle n acceptera que la classe request
            $email = $request->request->get('email');
            $password = $request->request->get('password');

            $user = new User(); // on instancie une nouvelle classe User

            try {
                $hashedPassword = $passwordHasher->hashPassword(
                    $user,
                    $password
                ); // j'instancie la classe $passwordHasher pour le hashage du password ( On peut le modifier dans security.yaml, par defaut auto (13))

                // je recupere les donnees POST, je place les valeurs que je veux (email, password, role) dans mon user
                $user->setEmail($email);
                $user->setPassword($hashedPassword);
                $user->setRoles(['ROLE_ADMIN']);

                //on instancie la classe entityManager pour ce faire on type EntityManagerInterface et on la placera en parametre ainsi que $EntityManagerInterface
                $entityManager->persist($user); // preparation de la requete
                $entityManager->flush(); // execution de la requete

                $this->addFlash('success', 'user créé'); //je cree mon message flash qui s'affiche une fois l'lutlisateur  crée, on checkera également en BDD si c'est bien le cas.

            } catch (\Exception $exception) {
                // $this->addFlash('error', $exception->getMessage()) à éviter; En effet pour des questions de sécurité, il faut éviter de renvoyer le message directement récupéré depuis les erreurs SQL comme  des données SQL et d'unicité.Un message affichant error sera préférable.
                $this->addFlash('error', 'error');
            }
        }

        return $this->render('admin/page/user/insert_user.html.twig'); // je retourne le formulaire
    }






}