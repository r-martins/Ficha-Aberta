<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\Candidato
 *
 * @ORM\Table(name="candidato")
 * @ORM\Entity
 */
class Candidato
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
     * @var string $nomeUrna
     *
     * @ORM\Column(name="nome_urna", type="string", length=145, nullable=false)
     */
    private $nomeUrna;

    /**
     * @var string $candidatura
     *
     * @ORM\Column(name="candidatura", type="string", length=1, nullable=false)
     */
    private $candidatura;

    /**
     * @var bigint $numero
     *
     * @ORM\Column(name="numero", type="bigint", nullable=false)
     */
    private $numero;

    /**
     * @var string $situacao
     *
     * @ORM\Column(name="situacao", type="string", length=45, nullable=true)
     */
    private $situacao;

    /**
     * @var string $cargoAtual
     *
     * @ORM\Column(name="cargo_atual", type="string", length=45, nullable=true)
     */
    private $cargoAtual;

    /**
     * @var string $sexo
     *
     * @ORM\Column(name="sexo", type="string", length=45, nullable=true)
     */
    private $sexo;

    /**
     * @var datetime $dtNascimento
     *
     * @ORM\Column(name="dt_nascimento", type="datetime", nullable=true)
     */
    private $dtNascimento;

    /**
     * @var string $coligacao
     *
     * @ORM\Column(name="coligacao", type="string", length=145, nullable=true)
     */
    private $coligacao;

    /**
     * @var string $cidade
     *
     * @ORM\Column(name="cidade", type="string", length=145, nullable=true)
     */
    private $cidade;

    /**
     * @var string $uf
     *
     * @ORM\Column(name="uf", type="string", length=2, nullable=true)
     */
    private $uf;

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
     * @return Candidato
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
     * Set nomeUrna
     *
     * @param string $nomeUrna
     * @return Candidato
     */
    public function setNomeUrna($nomeUrna)
    {
        $this->nomeUrna = $nomeUrna;
        return $this;
    }

    /**
     * Get nomeUrna
     *
     * @return string 
     */
    public function getNomeUrna()
    {
        return $this->nomeUrna;
    }

    /**
     * Set candidatura
     *
     * @param string $candidatura
     * @return Candidato
     */
    public function setCandidatura($candidatura)
    {
        $this->candidatura = $candidatura;
        return $this;
    }

    /**
     * Get candidatura
     *
     * @return string 
     */
    public function getCandidatura()
    {
        return $this->candidatura;
    }

    /**
     * Set numero
     *
     * @param bigint $numero
     * @return Candidato
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Get numero
     *
     * @return bigint 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set situacao
     *
     * @param string $situacao
     * @return Candidato
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
        return $this;
    }

    /**
     * Get situacao
     *
     * @return string 
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set cargoAtual
     *
     * @param string $cargoAtual
     * @return Candidato
     */
    public function setCargoAtual($cargoAtual)
    {
        $this->cargoAtual = $cargoAtual;
        return $this;
    }

    /**
     * Get cargoAtual
     *
     * @return string 
     */
    public function getCargoAtual()
    {
        return $this->cargoAtual;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Candidato
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set dtNascimento
     *
     * @param datetime $dtNascimento
     * @return Candidato
     */
    public function setDtNascimento($dtNascimento)
    {
        $this->dtNascimento = $dtNascimento;
        return $this;
    }

    /**
     * Get dtNascimento
     *
     * @return datetime 
     */
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * Set coligacao
     *
     * @param string $coligacao
     * @return Candidato
     */
    public function setColigacao($coligacao)
    {
        $this->coligacao = $coligacao;
        return $this;
    }

    /**
     * Get coligacao
     *
     * @return string 
     */
    public function getColigacao()
    {
        return $this->coligacao;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Candidato
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set uf
     *
     * @param string $uf
     * @return Candidato
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * Get uf
     *
     * @return string 
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set partido
     *
     * @param Entity\Partido $partido
     * @return Candidato
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
}