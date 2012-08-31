<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\Amigos
 *
 * @ORM\Table(name="amigos")
 * @ORM\Entity
 */
class Amigos
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
     * @var bigint $fbuid
     *
     * @ORM\Column(name="fbuid", type="bigint", nullable=true)
     */
    private $fbuid;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=145, nullable=true)
     */
    private $nome;

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
     * Set fbuid
     *
     * @param bigint $fbuid
     * @return Amigos
     */
    public function setFbuid($fbuid)
    {
        $this->fbuid = $fbuid;
        return $this;
    }

    /**
     * Get fbuid
     *
     * @return bigint 
     */
    public function getFbuid()
    {
        return $this->fbuid;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Amigos
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set usuario
     *
     * @param Entity\Usuario $usuario
     * @return Amigos
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