<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\Comentario
 *
 * @ORM\Table(name="comentario")
 * @ORM\Entity
 */
class Comentario
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
     * @var boolean $classificacao
     *
     * @ORM\Column(name="classificacao", type="boolean", nullable=true)
     */
    private $classificacao;

    /**
     * @var text $comentario
     *
     * @ORM\Column(name="comentario", type="text", nullable=true)
     */
    private $comentario;

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
     * @var Entity\Candidato
     *
     * @ORM\OneToOne(targetEntity="Entity\Candidato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidato_id", referencedColumnName="id", unique=true)
     * })
     */
    private $candidato;


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
     * Set classificacao
     *
     * @param boolean $classificacao
     * @return Comentario
     */
    public function setClassificacao($classificacao)
    {
        $this->classificacao = $classificacao;
        return $this;
    }

    /**
     * Get classificacao
     *
     * @return boolean 
     */
    public function getClassificacao()
    {
        return $this->classificacao;
    }

    /**
     * Set comentario
     *
     * @param text $comentario
     * @return Comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
        return $this;
    }

    /**
     * Get comentario
     *
     * @return text 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set usuario
     *
     * @param Entity\Usuario $usuario
     * @return Comentario
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

    /**
     * Set candidato
     *
     * @param Entity\Candidato $candidato
     * @return Comentario
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
}