<?php

class Movie
{
    // attributs ___________________________________  
    //  !!!!! on nomme la variable comme dans la BDD (snake_case)
    // pour ajouter automatiquement les getteurs et setteurs clic droit sur la propriété (plugin vscode)

    private int $id;
    private string $title;
    private string $description;
    private string $director;
    private string $release_date;
    private string $image_url;
    private int $category_id;

    /*  =============== HYDRATATION CONSTRUCTEUR ============= */
    // le constructeur appelle la méthode d'hydratation déclarée après.
    // La méthode d'hydratation boucle sur le tableau de données est crée les setteurs de chaque paramètre et affecte sa valeur.

    // constructeur   
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    // méthodes _____________________________________

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            // on récupère le nom du setter correspondant à l'attrtinut
            $method = 'set' . ucfirst($key); // setId, setTitle, ...
            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter
                $this->$method($value); // instance->setId(1), instance->setTitle('Avatar'), .....
            }
        }
    }


    /* ----- GETTEURS ET SETTEURS --------- */
    /* -------------id------------------- */

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        if ($id > 0) {
            $this->id = $id;
        }
        return $this; // ds les setteurs on renvois systématiquement l'objet
    }
    /* -------------title------------------- */

    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /* -------------description------------------- */
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): self
    {
            $this->description = $description;
        return $this;
    }
    /* -------------director------------------- */
    public function getDirector(): string
    {
        return $this->director;
    }
    public function setDirector(string $director): self
    {
            $this->director = $director;
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
            $this->category_id = $category_id;
        return $this;
    }
}
