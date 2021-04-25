<?php

namespace App\Entity;

use App\Repository\InfoRepository;
use Doctrine\ORM\Mapping as ORM;

/* @ORM\Entity(repositoryClass=InfoRepository::class)*/
class Info
{
    /* @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")*/
    private $id;

    /* @ORM\Column(type="string", length=255)*/
    private $name;

    /* @ORM\Column(type="string", length=255)*/
    private $value;

      public function __construct($id,$name,$value){
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;

    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}