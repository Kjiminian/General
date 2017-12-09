<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * evento
 *
 * @ORM\Table(name="evento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\eventoRepository")
 */
class evento
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_evento", type="integer")
     */
    private $tipoEvento;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_boleto", type="integer")
     */
    private $cantidadBoleto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=255)
     */
    private $ubicacion;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer")
     */
    private $estado;


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
     * @return evento
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
     * @return evento
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

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return evento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipoEvento
     *
     * @param integer $tipoEvento
     *
     * @return evento
     */
    public function setTipoEvento($tipoEvento)
    {
        $this->tipoEvento = $tipoEvento;

        return $this;
    }

    /**
     * Get tipoEvento
     *
     * @return int
     */
    public function getTipoEvento()
    {
        return $this->tipoEvento;
    }

    /**
     * Set cantidadBoleto
     *
     * @param integer $cantidadBoleto
     *
     * @return evento
     */
    public function setCantidadBoleto($cantidadBoleto)
    {
        $this->cantidadBoleto = $cantidadBoleto;

        return $this;
    }

    /**
     * Get cantidadBoleto
     *
     * @return int
     */
    public function getCantidadBoleto()
    {
        return $this->cantidadBoleto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return evento
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return evento
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return evento
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return int
     */
    public function getEstado()
    {
        return $this->estado;
    }
}

