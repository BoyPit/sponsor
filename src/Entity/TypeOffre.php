<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeOffreRepository")
 */
class TypeOffre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Annonce")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    private $annonce;


    /**
     * @var string
     * 
     * @ORM\Column(name="offre", type = "string", length = 60)
     * 
     */
    private $offre;

    /**
     * @var integer
     * 
     * @ORM\Column(name="price", type = "integer", length = 60)
     * 
     */
    private $price;
}
