<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
<<<<<<< HEAD
<<<<<<< HEAD
    #[ORM\JoinColumn(nullable: true, onDelete: "SET NULL")]
=======
>>>>>>> 9dea6b5 (commit_Admin_Guest)
=======
    #[ORM\JoinColumn(nullable: true, onDelete: "SET NULL")]
>>>>>>> 8588bb4 (user_insert_form)
    private ?Category $category = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column]
    private ?bool $isPublished = null;
// Permet de supprimer en "cascade"
    // les articles liés à une catégorie
    // quand la catégorie est supprimée
    //#[ORM\JoinColumn(onDelete: "CASCADE")]
    // quand la catégorie est supprimée
        // on supprime la valeur de category_id dans les articles
        // liés à la catégorie
    public function __construct() { // penser a bien le mettre sinon ca passe pas au niveau des dates

        $this->createdAt=new \DateTime(datetime:'NOW');
        $this->updatedAt=new \DateTime(datetime:'NOW');
    }

<<<<<<< HEAD
    // Permet de supprimer en "cascade"
    // les articles liés à une catégorie
    // quand la catégorie est supprimée
    //#[ORM\JoinColumn(onDelete: "CASCADE")]
    // quand la catégorie est supprimée
    // on supprime la valeur de category_id dans les articles
    // liés à la catégorie

    public function __construct() { // penser a bien le mettre sinon ca passe pas au niveau des dates

        $this->createdAt=new \DateTime(datetime:'NOW');
        $this->updatedAt=new \DateTime(datetime:'NOW');
    }

=======
>>>>>>> 9dea6b5 (commit_Admin_Guest)
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getIsPublished(): ?bool // bien verifier si la syntaxe du getter
=======
    public function isPublished(): ?bool
>>>>>>> 9dea6b5 (commit_Admin_Guest)
=======
    public function getIsPublished(): ?bool // bien verifier si la syntaxe du getter
>>>>>>> 8588bb4 (user_insert_form)
    {
        return $this->isPublished;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setIsPublished(bool $isPublished): static //bien verifier si la syntaxe du setter
=======
    public function setPublished(bool $isPublished): static
>>>>>>> 9dea6b5 (commit_Admin_Guest)
=======
    public function setIsPublished(bool $isPublished): static //bien verifier si la syntaxe du setter
>>>>>>> 8588bb4 (user_insert_form)
    {
        $this->isPublished = $isPublished;

        return $this;
    }
}
