<?php


class User
{
    private int $id;
    private string $username;
    private string $password;


/* 
    public function __construct($username, $password)
    {
      $this->username = $username;
      $this->password = $password;
    }
 */

   
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

}