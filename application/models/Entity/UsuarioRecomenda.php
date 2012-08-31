<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\UsuarioRecomenda
 *
 * @ORM\Table(name="usuario_recomenda")
 * @ORM\Entity
 */
class UsuarioRecomenda
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
     * @var boolean $icRecomenda
     *
     * @ORM\Column(name="ic_recomenda", type="boolean", nullable=true)
     */
    private $icRecomenda;

    /**
     * @var Entity\Candidato
     *
     * @ORM\OneToOne(targetEntity="Entity\Candidato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidato_id", referencedColumnName="id", unique=true)
     * })
     */
    private $candidato;

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
     * Set icRecomenda
     *
     * @param boolean $icRecomenda
     * @return UsuarioRecomenda
     */
    public function setIcRecomenda($icRecomenda)
    {
        $this->icRecomenda = $icRecomenda;
        return $this;
    }

    /**
     * Get icRecomenda
     *
     * @return boolean 
     */
    public function getIcRecomenda()
    {
        return $this->icRecomenda;
    }

    /**
     * Set candidato
     *
     * @param Entity\Candidato $candidato
     * @return UsuarioRecomenda
     */
    public function setCandidato(\Entity\Candidato $candidato = null)
    {
        $this->candidato = $candidato;
        return $this;
    }

    /**
     * Get candidato
     *
     * @return Entity\Candidato 
     */
    public function getCandidato()
    {
        return $this->candidato;
    }

    /**
     * Set usuario
     *
     * @param Entity\Usuario $usuario
     * @return UsuarioRecomenda
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