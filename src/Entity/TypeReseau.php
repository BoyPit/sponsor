<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeReseauRepository")
 */
class TypeReseau
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
     * @ORM\Column(name="nom", type = "string", length = 60)
     * 
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UsrMedia") cascade=("persist","remove")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    private $usr;
    

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Annonce")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    private $annonce;
}
