<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\Partido
 *
 * @ORM\Table(name="partido")
 * @ORM\Entity
 */
class Partido
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
     * @var string $sigla
     *
     * @ORM\Column(name="sigla", type="string", length=145, nullable=false)
     */
    private $sigla;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=145, nullable=true)
     */
    private $nome;


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
     * Set sigla
     *
     * @param string $sigla
     * @return Partido
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
        return $this;
    }

    /**
     * Get sigla
     *
     * @return string 
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Partido
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
}