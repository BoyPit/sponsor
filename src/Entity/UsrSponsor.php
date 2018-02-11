<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsrSponsorRepository")
 */
class UsrSponsor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="name", type = "string", length = 60)
     * 
     */
    private $name;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="description", type = "text")
     * 
     */
    private $descritpiton;

    /**
     * @var string
     * 
     * @ORM\Column(name="email", type = "string", length = 60)
     * 
     */
    private $email;

    /**
     * @var int
     * 
     * @ORM\Column(name="num", type = "integer")
     * 
     */
    private $num;
}
