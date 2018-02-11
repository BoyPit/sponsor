<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsrMediaRepository")
 */
class UsrMedia
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
     * @ORM\Column(name="name",type ="string",length=100)
     * 
     */
    private $name;

    /**
     * @var string
     * 
     * @ORM\Column(name="type",type ="string",length=100)
     * 
     */
    private $type;

    /**
     * @var string
     * 
     * @ORM\Column(name="url",type ="string",length=255)
     * 
     */
    private $url;

    /**
     * @var string
     * 
     * @ORM\Column(name="description", type = "text")
     * 
     */
    private $description;

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
     * @ORM\Column(name="nbfollow", type = "integer")
     * 
     */
    private $nbfollow;


    /**
     * @var int
     * 
     * @ORM\Column(name="nbvuheb", type = "integer")
     * 
     */
    private $nbvuheb;


    /**
     * @var int
     * 
     * @ORM\Column(name="trancheage", type = "integer")
     * 
     */
    private $trancheage;

    /**
     * @var int
     * 
     * @ORM\Column(name="num", type = "integer")
     * 
     */
    private $num;


    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Annonce") 
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    private $postule;
}
