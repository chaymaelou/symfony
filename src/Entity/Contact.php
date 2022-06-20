<?php
namespace App\Entity;

class Contact {
   private string $nom;
   private string $email;
   private string $telephone;
   private string $message; 




/**
 * Get the value on nom
 */
public function getNom()
{
   return $this->nom;
}

/**
 * set the value of nom
 * @return self
 */
public function setNom($nom)
{
    $this->nom = $nom;
    return $this;
}

/**
 * Get the value on email
 */
public function getEmail()
{
   return $this->email;
}

/**
 * set the value of email
 * @return self
 */
public function setEmail($email)
{
    $this->email = $email;
    return $this;
}

/**
 * Get the value on telephone
 */
public function getTelephone()
{
   return $this->telephone;
}

/**
 * set the value of telephone
 * @return self
 */
public function setTelephone($telephone)
{
    $this->telephone = $telephone;
    return $this;
}

/**
 * Get the value on message
 */
public function getMessage()
{
   return $this->message;
}

/**
 * set the value of message
 * @return self
 */
public function setMessage($message)
{
    $this->message = $message;
    return $this;
}

















}