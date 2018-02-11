<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UsrMedia") cascade=("persist","remove")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    private $usrmedia;


    /**
     * @var string
     * 
     * @ORM\Column(name="titre", type = "string", length = 60)
     * 
     */
    private $titre;

    /**
     * @var string
     * 
     * @ORM\Column(name="description", type = "text")
     * 
     */
    private $description;


    /**
     * @ORM\OneToOne(targetEntity="App\Entity\UsrSponsor")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    private $autor;
    
}
