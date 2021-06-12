<?php

namespace App\Entity;

use App\Repository\SeriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SeriesRepository::class)
 */
class Series
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;

    /**
     * @ORM\Column(type="integer")
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $creador;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getFecha(): ?int
    {
        return $this->fecha;
    }

    public function setFecha(int $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getCreador(): ?string
    {
        return $this->creador;
    }

    public function setCreador(string $creador): self
    {
        $this->creador = $creador;

        return $this;
    }
}
