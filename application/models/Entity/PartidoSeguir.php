<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\PartidoSeguir
 *
 * @ORM\Table(name="partido_seguir")
 * @ORM\Entity
 */
class PartidoSeguir
{
    /**
     * @var bigint $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Entity\Partido
     *
     * @ORM\OneToOne(targetEntity="Entity\Partido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partido_id", referencedColumnName="id", unique=true)
     * })
     */
    private $partido;

    /**
     * @var Entity\Usuario
     *
     * @ORM\OneToOne(targetEntity="Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id", unique=true)
     * })
     */
    private $usuario;


    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set partido
     *
     * @param Entity\Partido $partido
     * @return PartidoSeguir
     */
    public function setPartido(\Entity\Partido $partido = null)
    {
        $this->partido = $partido;
        return $this;
    }

    /**
     * Get partido
     *
     * @return Entity\Partido 
     */
    public function getPartido()
    {
        return $this->partido;
    }

    /**
     * Set usuario
     *
     * @param Entity\Usuario $usuario
     * @return PartidoSeguir
     */
    public function setUsuario(\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * Get usuario
     *
     * @return Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}