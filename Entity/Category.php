<?php

class Category
{

    private int $id;
    private string $name;
    private int $color;

    /*  =============== HYDRATATION CONSTRUCTEUR ============= */

    // constructeur   
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    // méthodes

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            // on récupère le nom du setter correspondant à l'attrtinut
            $method = 'set' . ucfirst($key); // setId, setName, setColor ...
            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter
                $this->$method($value);
            }
        }
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
