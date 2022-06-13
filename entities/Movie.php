<?php

class Movie
{
    // attributs    !!!!! on nomme la variable comme dans la BDD (snake_case)
    // pour ajouter automatiquement les getteurs et setteurs clic droit sur la propriété
    private int $id;
    private string $title;
    private string $description;
    private string $director;
    private string $release_date;
    private string $image_url;
    private int $category_id;

    // constructeur   
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }



    // méthodes

    public function hydrate(array $data)
    {
    }


    /* ----- GETTEURS ET SETTEURS --------- */
    /* -------------id------------------- */

    public function getId(): int
    {
        return $this->id; // ds les setteurs on renvois systématiquement l'objet
    }
    public function setId(int $id): self
    {
        if ($id > 0) {
            $this->id = $id;
        }
        return $this;
    }
    /* -------------title------------------- */

    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): self
    {
        if (strlen($title) >= 3 && strlen($title <= 180)) { // entre 3 et 180 caracteres
            $this->title = $title;
        }
        return $this;
    }
    /* -------------description------------------- */
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): self
    {
        if (strlen($description) >= 10 && strlen($description <= 2000)) { // entre 3 et 2000 caracteres
            $this->description = $description;
        }
        return $this;
    }
    /* -------------director------------------- */
    public function getDirector(): string
    {
        return $this->director;
    }
    public function setDirector(string $director): self
    {
        if (strlen($director) >= 3 && strlen($director <= 120)) { // entre 3 et 120 caracteres
            $this->director = $director;
        }
        return $this;
    }
    /* -------------release_date------------------- */
    public function getRelease_date(): string
    {
        return $this->release_date;
    }
    public function setRelease_date(string $release_date): self
    {
        $this->release_date = $release_date;

        return $this;
    }
    /* -------------image_url------------------- */
    public function getImage_url(): string
    {
        return $this->image_url;
    }
    public function setImage_url(string $image_url): self
    {
        $this->image_url = $image_url;
        return $this;
    }
    /* -------------category_id------------------- */
    public function getCategory_id(): int
    {
        return $this->category_id;
    }
    public function setCategory_id(int $category_id): self
    {
        if ($category_id > 0) {
            $this->category_id = $category_id;
        }
        return $this;
    }
}
