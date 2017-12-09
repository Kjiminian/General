<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tipo_evento
 *
 * @ORM\Table(name="tipo_evento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\tipo_eventoRepository")
 */
class tipo_evento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_evento", type="integer")
     */
    private $idEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEvento
     *
     * @param integer $idEvento
     *
     * @return tipo_evento
     */
    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;

        return $this;
    }

    /**
     * Get idEvento
     *
     * @return int
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return tipo_evento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}

