<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
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
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=145, nullable=false)
     */
    private $nome;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=145, nullable=false)
     */
    private $email;

    /**
     * @var bigint $fbuid
     *
     * @ORM\Column(name="fbuid", type="bigint", nullable=false)
     */
    private $fbuid;

    /**
     * @var string $fbtoken
     *
     * @ORM\Column(name="fbtoken", type="string", length=145, nullable=false)
     */
    private $fbtoken;

    /**
     * @var datetime $cadastro
     *
     * @ORM\Column(name="cadastro", type="datetime", nullable=false)
     */
    private $cadastro;


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
     * Set nome
     *
     * @param string $nome
     * @return Usuario
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
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fbuid
     *
     * @param bigint $fbuid
     * @return Usuario
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
     * Set fbtoken
     *
     * @param string $fbtoken
     * @return Usuario
     */
    public function setFbtoken($fbtoken)
    {
        $this->fbtoken = $fbtoken;
        return $this;
    }

    /**
     * Get fbtoken
     *
     * @return string 
     */
    public function getFbtoken()
    {
        return $this->fbtoken;
    }

    /**
     * Set cadastro
     *
     * @param datetime $cadastro
     * @return Usuario
     */
    public function setCadastro($cadastro)
    {
        $this->cadastro = $cadastro;
        return $this;
    }

    /**
     * Get cadastro
     *
     * @return datetime 
     */
    public function getCadastro()
    {
        return $this->cadastro;
    }
}