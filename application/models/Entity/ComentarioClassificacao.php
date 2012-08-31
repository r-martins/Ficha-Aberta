<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\ComentarioClassificacao
 *
 * @ORM\Table(name="comentario_classificacao")
 * @ORM\Entity
 */
class ComentarioClassificacao
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
     * @var datetime $created
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var Entity\Comentario
     *
     * @ORM\OneToOne(targetEntity="Entity\Comentario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comentario_id", referencedColumnName="id", unique=true)
     * })
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
     * @return ComentarioClassificacao
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
     * Set created
     *
     * @param datetime $created
     * @return ComentarioClassificacao
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set comentario
     *
     * @param Entity\Comentario $comentario
     * @return ComentarioClassificacao
     */
    public function setComentario(\Entity\Comentario $comentario = null)
    {
        $this->comentario = $comentario;
        return $this;
    }

    /**
     * Get comentario
     *
     * @return Entity\Comentario 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set usuario
     *
     * @param Entity\Usuario $usuario
     * @return ComentarioClassificacao
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